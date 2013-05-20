<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
 * @Email:160780470@qq.com
 */
class userAction extends userbaseAction {
	public function _initialize() {
		parent::_initialize ();
		$this->user_mod = D ( 'user' );
		$this->doc_mod = D( 'doc' );
		// 访问者控制
		if (! $this->visitor->is_login && in_array ( ACTION_NAME, array (
				'index' 
		) )) {
			$this->redirect ( 'user/login' );
		} else {
			$this->userid = $this->visitor->info ['userid'];
		}
	}
	public function register() {
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
			$this->redirect ( 'index/index', array (
					'id' => $this->visitor->info ['userid'] 
			) );
		} else {
			$this->_config_seo ();
			$this->display ();
		}
	}
	public function login() {
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
			
			$this->redirect ( 'index/index', array (
					'id' => $this->visitor->info ['userid'] 
			) );
		} else {
			$this->display ();
		}
	}
	public function index() {
		$user = $this->user_mod->getOneUser ( $this->userid );
		$userid = $this->userid; 
		$this->assign ( 'user', $user );
		$type = $this->_get ( 'type', 'trim', 'baseinfo' );
		
		$menu = array (
				'baseinfo' => array (
						'url' => U ( 'user/index', array (
								'type' => 'baseinfo' 
						) ),
						'text' => '中心首页' 
				),
				'pwd' => array (
						'url' => U ( 'user/index', array (
								'type' => 'pwd' 
						) ),
						'text' => '修改密码' 
				),
				'explist' => array (
						'url' => U ( 'user/index', array (
								'type' => 'explist' 
						) ),
						'text' => '已添实验' 
				),
				'doclist' => array (
						'url' => U ( 'user/index', array (
								'type' => 'doclist' 
						) ),
						'text' => '已添文献' 
				),
				'qalist' => array (
						'url' => U ( 'user/index', array (
								'type' => 'qalist' 
						) ),
						'text' => '已添求助' 
				),
				'comments' => array (
						'url' => U ( 'user/index', array (
								'type' => 'comments' 
						) ),
						'text' => '发表评论' 
				),
				'jfcount' => array (
						'url' => U ( 'user/index', array (
								'type' => 'jfcount' 
						) ),
						'text' => '积分统计' 
				),
				'pay' => array (
						'url' => U ( 'user/index', array (
								'type' => 'pay' 
						) ),
						'text' => '在线充值' 
				) 
		);
		
		$this->assign ( 'menu', $menu );
		$this->assign ( 'type', $type );
		switch ($type) {
			case 'baseinfo' :
				if (IS_POST) {
					$email = $this->_post ( 'email', 'trim', '' );
					if (empty ( $email ))
						$this->error ( '邮箱不能为空' );
					$address = $this->_post ( 'address', 'trim', '' );
					$this->user_mod->where ( array (
							'userid' => $userid 
					) )->setField ( array (
							'email' => $email,
							'address' => $address 
					) );
					$this->success ( '修改成功！' );
				} else {
					$this->display ( 'index' );
				}
				break;
			case 'doclist' :
	
					//查询条件 是否审核
					$map = array('isaudit'=>'0');
					$map = array('userid'=>$userid);
					//显示列表
					$pagesize = 20;
					$count = $this->doc_mod->where($map)->order('orderid desc')->count();
					$pager = $this->_pager($count, $pagesize);
					$lists =  $this->doc_mod->where($map)->order('addtime desc')->limit($pager->firstRow.','.$pager->listRows)->select();
					
					$this->assign('pageUrl', $pager->fshow());
					$this->assign('lists', $lists);
					
				
					$this->_config_seo (array('title'=>'已添文献'));
					$this->display ( 'doclist' );
			
				break;
		}
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