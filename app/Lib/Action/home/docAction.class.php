<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class docAction extends frontendAction {
	public function _initialize() {
		parent::_initialize ();
		$this->user_mod = D ( 'user' );
		$this->doc_mod = D( 'doc' );
		// 访问者控制
		if (! $this->visitor->is_login && in_array ( ACTION_NAME, array (

				'addnew',
				'editdoc',
		) )) {
			$this->redirect ( 'user/login' );
		} else {
			$this->userid = $this->visitor->info ['userid'];
		}
	}
    public function index(){
    	// 处理html编码
		$this->display();
    }
    public function add(){
    	// 处理html编码
    	$this->display();
    }
    public function down(){
    	// 处理html编码
    	$id = $this->_get('id');
    	$doc = $this->doc_mod->where(array('id'=>$id))->find();
    	if($doc){
    		$this->doc_mod->where(array('id'=>$id))->setInc('downcount');
    		header('location:'.C('ik_site_url').$doc['exfile']);
    	}else{
    		$this->error('你找的文献不存在！');
    	}
    }
    public function addnew(){
    	if(IS_POST){
    		$data['userid'] = $uid = $this->userid;
    		$data['title'] = $this->_post('title','trim','');
    		$data['volume'] = $this->_post('volume','trim','');//卷
    		$data['datetime'] = $this->_post('datetime','trim','');//年份
    		$data['pagestart'] = $this->_post('pagestart','trim','');
    		$data['author'] = $this->_post('author','trim','');
    		$data['doctitle'] = $this->_post('doctitle','trim','');
    		$data['addtime'] = time();
    		if(empty($data['title']) || empty($data['volume'])  || empty($data['doctitle'])){
    			$this->error('信息填写不完整；请重新填写！');
    		}else{
				$ishave = $this->doc_mod->where(array('doctitle'=>$data['doctitle']))->find();
    			if($ishave){
    				$this->error('该文献已经存在；请不要重复添加！');
    			}else{
    				
    				if(!empty($_FILES['exfile']['name'])){
    					$dir = date ( 'Y/m' );
    					$result = $this->_upload($_FILES['exfile'], 'docment/'.$dir,'' ,random(16));
    					if ($result['error']) {
    						$this->error($result['info']);
    					} else {
    						$data['exfile'] = $result['info'][0]['savepath'].$result['info'][0]['savename'];
    					}
    				}
    				
    				if(!false == $this->doc_mod->create($data)){
    					$id = $this->doc_mod->add();
    					$this->success('添加成功',U('doc/addnew'));
    				}

    			}
    			
    		}
    		
    	}else{
    		$doctitle = $this->_get('doctitle','trim','');
    		$this->assign('doctitle',$doctitle);
    		$this->display();
    	}
    }
    public function lists(){
    	//查询条件 是否审核
    	$map = array('isaudit'=>'0');
    	//显示列表
    	$pagesize = 20;
    	$count = $this->doc_mod->where($map)->order('addtime desc')->count();
    	$pager = $this->_pager($count, $pagesize);
    	$arrdoc =  $this->doc_mod->where($map)->order('addtime desc')->limit($pager->firstRow.','.$pager->listRows)->select();
    		
    	$this->assign('pageUrl', $pager->fshow());
    	$this->assign('arrdoc',$arrdoc);
    	$this->display('index:doclist');
    }
    public function show(){
    	$id = $this->_get('id','intval','0');
    	$strDoc = $this->doc_mod->where(array('id'=>$id))->find();
    	if(!$strDoc){
    		$this->error('你找的页面不存在！');
    	}
    	$arrdocs = $this->doc_mod->where(array('doctitle'=>$strDoc['doctitle']))->order('addtime desc')->select();
    	foreach($arrdocs as $key=>$item){
    		$arrdoc[] = $item;
    		$arrdoc[$key]['user'] = $this->user_mod->where(array('userid'=>$item['userid']))->find();
    	}
    	$this->assign('strDoc',$strDoc);
    	$this->assign('arrdoc',$arrdoc);
    	$this->display('index:docshow');
    }
    //修改文档
    public function editdoc(){
    	$id = $this->_get('id','intval','0');
    	$strDoc = $this->doc_mod->where(array('id'=>$id))->find();
    	if(!$strDoc){
    		$this->error('你找的页面不存在！');
    	}
    	
    	if(IS_POST){
    		
    		$data['userid'] = $uid = $this->userid;
    		$data['title'] = $this->_post('title','trim','');
    		$data['volume'] = $this->_post('volume','trim','');//卷
    		$data['datetime'] = $this->_post('datetime','trim','');//年份
    		$data['pagestart'] = $this->_post('pagestart','trim','');
    		$data['author'] = $this->_post('author','trim','');
    		$data['doctitle'] = $this->_post('doctitle','trim','');
    		
    		if(empty($data['title']) || empty($data['volume'])  || empty($data['doctitle'])){
    			$this->error('信息填写不完整；请重新填写！');
    		}else{

    				if(!empty($_FILES['exfile']['name'])){
    					$dir = date ( 'Y/m' );
    					$result = $this->_upload($_FILES['exfile'], 'docment/'.$dir,'' ,random(16));
    					if ($result['error']) {
    						$this->error($result['info']);
    					} else {
    						$data['exfile'] = $result['info'][0]['savepath'].$result['info'][0]['savename'];
    					}
    				}
  
    				$this->doc_mod->where(array('id'=>$id))->save($data);
    				$this->redirect('user/index',array('type'=>'doclist'));
    		}

    	}else{
    		$this->assign('strDoc',$strDoc);
    		$this->display();
    	}
    }
    //修改文档
    public function deldoc(){
    	$id = $this->_get('id','intval','0');
    	$strDoc = $this->doc_mod->where(array('id'=>$id))->find();
    	if(!$strDoc){
    		$this->error('你找的页面不存在！');
    	}

    	$this->doc_mod->deldoc($id);
    	$this->redirect('user/index',array('type'=>'doclist'));
    }    
}