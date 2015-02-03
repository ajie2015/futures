<?php
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model{
	protected $patchValidate = true;
	protected  $_validate = array();
	const CATE_TYPE_BLOG = 1;
	const CATE_TYPE_LINK = 2;
	public function type_list(){
		$type_list = array(
			self::CATE_TYPE_BLOG => '日志',
			self::CATE_TYPE_LINK => '链接',
		);
		return $type_list;
	}
	
	//分类列表
    function cate_list( $type=1 ){
    	$uid = session('member_uid');
    	$cate_list = $this->where("uid='$uid' and type='$type'")->order('route asc')->select();
    	return $cate_list;
    }
    
    function cate_select( $id = '' ){
    	$cate_list = $this->cate_list();
    	$symbol = '';
    	$option = '';
		foreach ( $cate_list as $key => $cate ){
			$select= '';
			if( isset($id) && $id == $cate['id'] ){
				$select = 'selected="selected"';
			}
			$symbol = str_repeat( '----', $cate['level']-1 );
			$option .= "<option value='{$cate['id']}' {$select} >{$symbol}{$cate['name']}</option>";
		}
		return $option;
    }
}
?>