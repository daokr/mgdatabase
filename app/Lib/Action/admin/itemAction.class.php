<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class itemAction extends backendAction {

    public function _initialize() {
        parent::_initialize();
        $this->itemmod = D('item');
        $this->catemod = D('cate');
    }

    public function index() {   			

    		$cate = $this->catemod->where('')->order('cateid desc')->select();
    		$list = $this->itemmod->where('')->order('itemid desc')->select();
    		foreach ($list as $key=> $item){
    			$list[$key]['catename'] =  $this->catemod->where(array('cateid'=>$item['cateid']))->getField('catename');
    		}
    		$this->assign('list',$list); 
    		$this->assign('cate',$cate);
        	$this->display();
    
    }
    public function add(){
    	if(IS_POST){
    		$itemname = $this->_post('itemname');
    		$order = $this->_post('order');
    		$cateid = $this->_post('cateid');
    		$data = array('itemname'=>$itemname, 'orderid'=>$order,'cateid'=>$cateid);
    		if(!false==$this->itemmod->create($data)){
    			$this->itemmod->add();
    			$this->redirect('item/index');
    		}
    	}else{
    		$cate = $this->catemod->where('')->order('cateid desc')->select();
    		$this->assign('cate',$cate);
    		$this->display();
    	}
    }
    public function edit() {
    	if(IS_POST){
    		$itemid = $this->_get('itemid');
    	    $itemname = $this->_post('itemname');
    		$order = $this->_post('order');
    		$cateid = $this->_post('cateid');
    		$data = array('itemname'=>$itemname, 'orderid'=>$order,'cateid'=>$cateid);
 
    		$this->itemmod->where(array('itemid'=>$itemid))->save($data);
    		$this->redirect('item/index');
    	
    	}else{
    		$itemid = $this->_get('itemid');
    		$strData = $this->itemmod->where(array('itemid'=>$itemid))->find();
    		
    		$cate = $this->catemod->where('')->order('cateid desc')->select();
    		$this->assign('cate',$cate);
    		
    		$this->assign('strData',$strData);
    		$this->display();
    	}
    }
    public function delete() {
    
    	$itemid = $this->_get('itemid');
    	$this->itemmod->where(array('itemid'=>$itemid))->delete();
    	$this->redirect('item/index');
    
    }
  
}