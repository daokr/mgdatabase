<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class paramModel extends Model
{

	public function addParam($itemid, $paramname, $expid){
		$count = $this->where(array('paramname'=>$paramname))->count();
		if($count==0){
			if (false !== $this->create ( array('paramname'=>$paramname,'itemid'=>$itemid) )){
				$paramid = $this->add();
				$tagIndexCount = D('param_exp')->where(array('paramid'=>$paramid))->count();
				if ($tagIndexCount==0){
					D('param_exp')->create(array('expid'=>$expid,'paramid'=>$paramid));
					D('param_exp')->add();
				}
			}
		}else{
			$paramData = $this->where(array('paramname'=>$paramname))->find();
			$tagIndexCount = D('param_exp')->where(array('paramid'=>$paramData['paramid']))->count();
			if ($tagIndexCount==0){
				D('param_exp')->create(array('paramid'=>$paramData['paramid'],'expid'=>$expid));
				D('param_exp')->add();
			}
		}
	}
	//获取所有参数
	public function getParamsByItemid($itemid){
		$result = $this->where(array('itemid'=>$itemid))->select();
		return $result;
	}
}