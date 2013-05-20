<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class indexAction extends frontendAction {
	public function _initialize() {
		parent::_initialize ();
		$this->user_mod = D ( 'user' );
		$this->doc_mod = D( 'doc' );
		$this->exp_mod = D( 'exp' );
		$this->cate_mod = D( 'cate' );
		$this->item_mod = D( 'item' );
		$this->param_mod = D( 'param' );
	}
    public function index(){
		//活跃会员
		$arrHotUser = $this->user_mod->getHotUser(12);
		//获取新加实验数据
		$arrNewExp = $this->exp_mod->getNewAdd(10);
		
    	//获取文献10条
    	$arrdoc = $this->doc_mod->where('')->order('addtime desc')->limit(10)->select();
    	
    	//获取大分类
		$arrCates = $this->cate_mod->where('')->select();
		$arrParam = array();
		
		foreach ($arrCates as $key=>$item){
			$arrCate[] = $item;
			$items = $this->item_mod->where(array('cateid'=>$item['cateid']))->select();
			foreach($items as $key1=>$itemlist){
				$arrCate[$key]['items'][] = $itemlist;
				$arrCate[$key]['items'][$key1]['params']=$this->param_mod->where(array('itemid'=>$itemlist['itemid']))->select();
			}
		}
		
		$this->assign ( 'arrHotUser', $arrHotUser );
		$this->assign ( 'arrNewExp', $arrNewExp );
    	$this->assign('arrCate',$arrCate);
    	$this->assign('arrdoc',$arrdoc);
		$this->display();
    }
}