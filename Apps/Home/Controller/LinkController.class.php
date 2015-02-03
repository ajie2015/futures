<?php
namespace Home\Controller;
use Think\Controller;
class LinkController extends CommonController {
	public function index(){
		//parent::need_login();
    	//$uid = session('member_uid');
    	$uid = 1;
    	$model_link = D('link');
    	$where = "uid='$uid'";
    	$link_list = $model_link->where("$where")->order('add_time desc')->page($_GET['p'].',20')->select();
    	$count      = $model_link->where("$where")->count();// 查询满足要求的总记录数
    	$page       = new \Think\Page($count,20);
    	$show       = $page->show();// 分页显示输出
    	$this->assign('page',$show);// 赋值分页输出
    	$this->assign('link_list',$link_list);
		$this->display();
	}
	
	public function add_link(){
		parent::need_login();
		if($_POST){
    		$model_link = D('Link');
    		$model_link->create();
    	    $model_link->uid = session('member_uid');
    	    $model_link->add_time = time();
    	    //$model_article->title = I('title');
    		$result = $model_link->add();
    		if( $result ){
				$this->success('添加成功', __APP__."/link"); exit;
    		} else {
    			$this->error('添加失败', __APP__."/link/add_link"); exit;
    		}
    	}
    	$model_cate = D('Category');
    	$select_option = $model_cate->cate_select();
    	$action = '添加链接';
    	$info = array(
    		'title' =>'',
    		'url' =>'',
    	);
    	$this->assign('select_option',$select_option);
    	$this->assign('action',$action);
    	$this->assign('info',$info);
		$this->show('');
	}
}