<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class expAction extends frontendAction {
	public function _initialize() {
		parent::_initialize ();
		$this->user_mod = D ( 'user' );
		$this->cate_mod = D( 'cate' );
		$this->item_mod = D( 'item' );
		$this->exp_mod = D( 'exp' );
		$this->param_mod = D( 'param' );
		// 访问者控制
		if (! $this->visitor->is_login && in_array ( ACTION_NAME, array (
				'add',
		) )) {
			$this->redirect ( 'user/login' );
		} else {
			$this->userid = $this->visitor->info ['userid'];
		}
	}
    public function index(){
		$this->display();
    }
    public function addnew(){
    	$userid = $this->userid;
    	// 获取资讯分类
		$arrCate = $this->cate_mod->where('')->select();
		$arrItem = ''; // 初始化下拉列表
		$arrItemname = array ();
		foreach ( $arrCate as $key => $item ) {
			$arrItemname = $this->item_mod->where(array('cateid'=>$item['cateid']))->select();
			$arrItem .= '<optgroup label="' . $item ['catename'] . '">';
			foreach ( $arrItemname as $key1 => $item1 ) {
				$arrItem .= '<option  value="' . $item1 ['itemid'] . '" >' . $item1 ['itemname'] . '</option>';
			}
			$arrItem .= '</optgroup>';
		}
		if(IS_POST){
			$data['userid'] = $userid;
			$data['title'] = $title = $this->_post('title','trim','');
			$data['itemid'] = $itemid = $this->_post('itemid','trim',0);
			$data['isoriginal'] = $this->_post('isoriginal','trim','1');
			$data['author'] = $this->_post('author','trim','');
			$parameters = $this->_post('parameters','trim','');
			$data['content'] = $this->_post('content','trim','');
			$data['addtime'] = time();
			
			if(empty($title) || $itemid ==0){
				$this->error('名称和分类必须填写！');
			}else{
				
				$ishave = $this->exp_mod->where(array('title'=>$data['title']))->find();
    			if($ishave){
    				$this->error('该名称已经存在；请不要重复添加！');
    			}else{
    				$dir = date ( 'Y' );
    				if(!empty($_FILES['exfile']['name'])){ 
    					$result_exfile = $this->_upload($_FILES['exfile'], 'exps/exfile/'.$dir,'' ,random(16));
    					if ($result_exfile['error']) {
    						$this->error($result_exfile['info']);
    					}else{
    						$data['exfile'] = $result_exfile['info'][0]['savepath'].$result_exfile['info'][0]['savename'];
    					}
    				}
    				
    				if(!empty($_FILES['picfile']['name'])){
    					$result_picfile = $this->_upload($_FILES['picfile'], 'exps/picfile/'.$dir,'' ,random(16));
    					if ($result_picfile['error']) {
    						$this->error($result_picfile['info']);
    					}else{
    						$data['picfile'] = $result_picfile['info'][0]['savepath'].$result_picfile['info'][0]['savename'];
    					}
    				}
    				if(!false == $this->exp_mod->create($data)){
    					$expid = $this->exp_mod->add();
    					if(!empty($parameters)){
    						//参数添加
    						foreach($parameters as $item){
    							if(!empty($item)){
    								$this->param_mod->addParam($itemid, $item, $expid);
    							}
    						}
    					}
    					$this->success('添加成功',U('exp/addnew'));
    				}
    			}
				
			}
		}else{
			$title = $this->_get('title','trim','');
			$this->assign('title',$title);
			$this->assign('arrItem',$arrItem);
			$this->display();
		}
    }
}