<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends CommonController {
	public function index(){
		//考虑sphinx 全文索引
		$model_article = D('Article');
		$where = "title like '%{$this->keywords}%' || content like '%{$this->keywords}%' ";
    	$list = $model_article->where("$where")->order('add_time desc')->page($_GET['p'].',20')->select();
    	$count      = $model_article->where("$where")->count();// 查询满足要求的总记录数
    	$page       = new \Think\Page($count,20);
    	$show       = $page->show();// 分页显示输出
    	$this->assign('page',$show);// 赋值分页输出
    	$this->assign('list',$list);
		$this->display('index');
	}
	
	public function search(){
		
	}
}