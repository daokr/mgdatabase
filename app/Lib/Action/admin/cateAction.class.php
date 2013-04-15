<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class cateAction extends backendAction {

    public function _initialize() {
        parent::_initialize();
        $this->mod = D('cate');
    }

    public function index() {   			
    	if(IS_POST){
    		$catename = $this->_post('catename');
    		$data = array('catename'=>$catename);
    		if(!false==$this->mod->create($data)){
    			$this->mod->add();
    			$this->redirect('cate/index');
    		}
    	}else{
    		$list = $this->mod->where('')->order('cateid desc')->select();
    		$this->assign('list',$list);    	
        	$this->display();
    	}
    }
    public function edit() {
    	if(IS_POST){
    		$catename = $this->_post('catename');
    		$cateid = $this->_post('cateid');
    		$data = array('catename'=>$catename);
    		$this->mod->where(array('cateid'=>$cateid))->setField($data);
    		$this->redirect('cate/index');
    	}else{
    		$cateid = $this->_get('cateid');
    		$strData = $this->mod->where(array('cateid'=>$cateid))->find();
    		$this->assign('strData',$strData);
    		$this->display();
    	}
    }
    public function delete() {

    		$cateid = $this->_get('cateid');
    		$this->mod->where(array('cateid'=>$cateid))->delete();
    		$this->redirect('cate/index');

    }
  
  
}