<?php
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model{
	protected $patchValidate = true;
	protected  $_validate = array();
	
	//分类列表
    function cate_list(){
    	$uid = session('member_uid');
    	$cate_list = $this->where("uid='$uid'")->order('route asc')->select();
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