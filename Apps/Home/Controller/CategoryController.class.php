<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends CommonController {
	function _initialize(){
		parent::_initialize();
		//layout('layout_blog');
	}
    
    //添加文章分类
    public function cate_add(){
    	
    	parent::need_login();
    	$model_cate = D('Category');
		if($_POST){
    		$data = $model_cate->create();
    		if(I('parent_id')>0){
    			$parent_info = $model_cate->where('id='.I('parent_id'))->field('level,route')->find();
    			$parent_level = $parent_info['level'];
    			$parent_route = $parent_info['route'];
    			$data['level'] = $parent_level + 1;
    		} else {
    			$data['level'] = 1;
    		}
    		
    		$data['uid'] = session('member_uid');
    		if( $id = $model_cate->add($data)){
    			if( $data['level'] == 1 ){
    				$route['route'] = $id;
    			} else {
    				$route['route'] = $parent_route . '_' . $id;
    			}

    			$model_cate->where("id=$id")->save($route);
				$this->success('添加成功', __APP__."/Category/cate_list"); exit;
    		} else {
				$this->error('添加失败', __APP__."/Category/cate_add"); exit;
    		}
    	}

    	$select_option = $model_cate->cate_select();
    	$type_list = $model_cate->type_list();
    	$this->assign('select_option',$select_option);
    	$this->assign('type_list',$type_list);
		$this->show('');
    }
    
    //文章分类修改
    public function cate_update(){
    	
    }
    public function cate_list(){
    	
    }

}