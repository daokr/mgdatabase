<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class indexAction extends backendAction {

    public function _initialize() {
        parent::_initialize();
       
    }

    public function index() {   			
    	$this->title('管理中心');
        $this->display();
    }
    //admin 登录
    public function login() {
    	if (IS_POST) {
    		$email = $this->_post('admin_email', 'trim');
    		$password = $this->_post('admin_password', 'trim');
    		$admin = M('admin')->where(array('email'=>$email, 'status'=>1))->find();
    		if (!$admin) {
    			$this->error(L('admin_not_exist'));
    		}
    		if ($admin['password'] != md5($password)) {
    			$this->error(L('password_error'));
    		}
    		session('admin', array(
    		'userid' => $admin['userid'],
    		'role_id' => $admin['role_id'],
    		'username' => $admin['username'],
    		'email' => $admin['email'],
    		));
    		M('admin')->where(array('userid'=>$admin['userid']))->save(array('last_time'=>time(), 'last_ip'=>get_client_ip()));
    		$this->success('登录成功', U('index/index'));
    	} else {
    		$this->display();
    	}
    }
    //admin 退出
    public function logout() {
    	session('admin', null);
    	$this->success('退出成功', U('index/login'));
    	exit;
    }
  
}