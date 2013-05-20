<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class searchAction extends frontendAction {
	public function _initialize() {
		parent::_initialize ();
		$this->user_mod = D ( 'user' );
		$this->doc_mod = D( 'doc' );
		$this->exp_mod = D( 'exp' );
	}
    public function all(){
    	if(IS_POST){
    		$type = $this->_get('type','trim','doc');
    		
    		switch ($type) {
    			case "doc" :
    				$this->serchdoc();
    				break;
    			case "exp" :
    				$this->searchexp();
    				break;
    		}   		
    	}else{
    		$this->error('请输入搜索关键字');
    	}
    }
    public function serchdoc(){
    	$keyword = $this->_post('keyword','trim','');
    	$map['title|doctitle'] =  array('like','%'.$keyword.'%');
		$result = $this->doc_mod->where($map)->select();
		$this->assign('result',$result);
		$this->display('doc:add');
    }
    public function searchexp(){
    	$keyword = $this->_post('keyword','trim','');
    	$map['title'] =  array('like','%'.$keyword.'%');
    	$result = $this->exp_mod->where($map)->select();
    	$this->assign('result',$result);
    	$this->display('exp:add');
    }
    
}