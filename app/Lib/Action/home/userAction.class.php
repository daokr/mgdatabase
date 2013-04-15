<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class userAction extends userbaseAction {
	public function _initialize() {
		parent::_initialize ();
		$this->user_mod = D ( 'user' );
		// 访问者控制
		if (! $this->visitor->is_login && in_array ( ACTION_NAME, array (
				'setbase',
				'setcity',
				'setdoname',
				'setface',
				'setpassword',
				'settag',
				'unfollow',
				'userfollow',
		) )) {
			$this->redirect ( 'user/login' );
		} else {
			$this->userid = $this->visitor->info ['userid'];
		}
	}
    public function register(){
    $this->visitor->is_login && $this->redirect ( 'people/index', array (
				'id' => $this->visitor->info ['doname'] 
		) );
		if (IS_POST) {
			$captcha = $this->_post ( 'authcode', 'trim' );
			$username = $this->_post ( 'username', 'trim' );
			$email = $this->_post ( 'email', 'trim' );
			$password = $this->_post ( 'password', 'trim' );
			$repassword = $this->_post ( 'repassword', 'trim' );
			if ($password != $repassword) {
				$this->error ( L ( 'inconsistent_password' ) ); // 确认密码
			}
			if (session ( 'authcode' ) != strtoupper ( $captcha )) {
				$this->error ( L ( 'captcha_failed' ) );
			}
			// 连接用户中心
			$passport = $this->_user_server ();
			// 注册
			$uid = $passport->register ( $username, $password, $email );

			// 登陆
			$this->visitor->login ( $uid );

			// 同步登陆
			$synlogin = $passport->synlogin ( $uid );
			$this->redirect ( 'user/index', array (
					'id' => $this->visitor->info ['userid'] 
			) );
		} else {
			$this->_config_seo ();
			$this->display ();
		}
    }
    public function login(){
    $this->visitor->is_login && $this->redirect ( 'user/index', array (
				'id' => $this->visitor->info ['userid'] 
		) );
		if (IS_POST) {
			$email = $this->_post ( 'username', 'trim' );
			$password = $this->_post ( 'password', 'trim' );
			if (empty ( $email )) {
				$this->error ( L ( 'email_not_null' ) );
			}
			if (empty ( $password )) {
				$this->error ( L ( 'password_not_null' ) );
			}
			// 连接用户中心
			$passport = $this->_user_server ();
			$uid = $passport->auth ( $email, $password );
			if (! $uid) {
				$this->error ( $passport->get_error () );
			}
			// 登陆
			$this->visitor->login ( $uid );
			// 同步登陆
			$synlogin = $passport->synlogin ( $uid );

			$this->redirect ( 'user/index', array (
					'id' => $this->visitor->info ['userid']
			) );
		}
    }
    public function index(){
    	$user = $this->user_mod->getOneUser($this->userid);
    	$this->assign('user',$user);
    	$this->display();
    }
    /**
     * 用户退出
     */
    public function logout() {
    	$this->visitor->logout ();
    	// 同步退出
    	$passport = $this->_user_server ();
    	$synlogout = $passport->synlogout ();
    	// 跳转到退出前页面（执行同步操作）
    	$this->redirect ( 'index' );
    }
}