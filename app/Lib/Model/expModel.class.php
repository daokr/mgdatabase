<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class expModel extends Model
{

	public function getNewAdd($limit){
		$where = array (
				'isaudit' => 0, // 0 表示正常 1停用
		);
		$results = $this->where($where)->order('addtime desc')->limit($limit)->select();
		foreach($results as $key=>$item){
			$result[] = $item;
			if($item['picfile']){
				$result[$key]['picfile'] = C('ik_site_url').$item['picfile'];
			}else{
				$result[$key]['picfile'] = C('ik_site_url').'static/public/images/dengtu.jpg';
			}
			if($item['exfile']){
				$result[$key]['exfile'] = C('ik_site_url').$item['exfile'];
			}else{
				$result[$key]['exfile'] = '';
			}
		}
		return $result;
	}

}