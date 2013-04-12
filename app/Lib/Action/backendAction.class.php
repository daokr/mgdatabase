<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class backendAction extends baseAction
{
	protected $_name = '';
	protected $menuid = 0;
    public function _initialize() {
        parent::_initialize();
        $this->_name = $this->getActionName();
        $this->check_login();
        $this->assign('acname',strtolower($this->_name));
    }
    protected function title($title){
    	$this->assign('title', $title);
    }
    //检查登录状态
    public function check_login() {
    	if ( (!isset($_SESSION['admin']) || !$_SESSION['admin']) && !in_array(ACTION_NAME, array('login','verify_code')) ) {
    		$this->redirect('index/login');
    	}
    }
    
    //更新配置文件
    protected function update_config($new_config, $config_file = '') {
    	!is_file($config_file) && $config_file = CONF_PATH . 'home/config.php';
    	if (is_writable($config_file)) {
    		$config = require $config_file;
    		$config = array_merge($config, $new_config);
    		file_put_contents($config_file, "<?php \nreturn " . stripslashes(var_export($config, true)) . ";", LOCK_EX);
    		@unlink(RUNTIME_FILE);
    		return true;
    	} else {
    		return false;
    	}
    } 
    /**
     * 后台台分页统一
     */
    protected function _pager($count, $pagesize) {
    	$pager = new Page($count, $pagesize);
    	$pager->rollPage = 10;
    	$pager->setConfig('prev', '<前页');
    	$pager->setConfig('next', '后页>');
    	$pager->setConfig('theme', '%upPage% %first% %linkPage% %end% %downPage%');
    	return $pager;
    }   

    
}
