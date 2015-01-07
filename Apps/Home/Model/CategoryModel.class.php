<?php
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model{
	protected $patchValidate = true;
	protected  $_validate = array();
	
	//分类列表
    function cate_list(){
    	$cate_list = $this->order('route asc')->select();
    	return $cate_list;
    }
    
    function cate_select( $id ){
    	$cate_list = $this->cate_list();
    	$symbol = '';
		foreach ( $cate_list as $key => $cate ){
			$select= '';
			if( $id == $cate['id'] ){
				$select = 'selected="selected"';
			}
			$symbol = str_repeat( '----', $cate['level']-1 );
			$option .= "<option value='{$cate[id]}' {$select} >{$symbol}{$cate[name]}</option>";
		}
		return $option;
    }
}
?>