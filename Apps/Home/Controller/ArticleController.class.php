<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
	function _initialize(){
		parent::_initialize();
		layout('layout_blog');
	}
	public function article_add(){
    	//layout(false);
		if($_POST){
    		$model_article = D('Article');
    		$model_article->create();
    	    $model_article->uid = session('member_uid');
    	    $model_article->add_time = time();
    	    $model_article->update_time = time();
    	    $model_article->content = htmlspecialchars_decode(I('content'));
    		$result = $model_article->add();
    		if( $result ){
				$this->success('添加成功', __APP__."/article"); exit;
    		} else {
    			$this->error('添加失败', __APP__."/article/article_add"); exit;
    		}
    	}
    	$model_cate = D('Category');
    	$select_option = $model_cate->cate_select();
    	$action = '发表文章';
    	$info = array(
    		'title' =>'',
    		'content' =>'',
    	);
    	$this->assign('select_option',$select_option);
    	$this->assign('action',$action);
    	$this->assign('info',$info);
		$this->show('');
    }
    
    public function article_edit( $id ){
    	if($_POST){
    		$model_article = D('Article');
    		$model_article->create();
    	    $model_article->update_time = time();
    	    $model_article->content = htmlspecialchars_decode(I('content'));
    		$result = $model_article->save('',array("where"=>"id='$id'"));
    		if( $result ){
				$this->success('修改成功', __APP__."/article/detail?id=$id"); exit;
    		} else {
    			$this->error('修改失败'); exit;
    		}
    	}
    	$model_article = D('Article');
    	$info = $model_article->where("id=$id")->find();
    	$action = '修改文章';
    	$model_cate = D('Category');
    	$select_option = $model_cate->cate_select($info['cate_id']);
    	$this->assign('select_option',$select_option);
    	$this->assign('info',$info);
    	$this->assign('action',$action);
    	$this->display('article_add');
    }
    
    //文章列表
    public function index(){

    	parent::need_login();
    	$uid = session('member_uid');
    	$model_article = D('Article');
    	$where = "uid='$uid'";
    	$article_list = $model_article->where("$where")->order('add_time desc')->page($_GET['p'].',20')->select();
    	$count      = $model_article->where("$where")->count();// 查询满足要求的总记录数
    	$page       = new \Think\Page($count,20);
    	$show       = $page->show();// 分页显示输出
    	$this->assign('page',$show);// 赋值分页输出
    	$this->assign('article_list',$article_list);
    	$this->show('');
    }
    
    public function detail( $id ){
    	if( $id ){
    		$model_article = D('Article');
	    	$detail = $model_article->where( "id= '$id'" )->find();
	    	$this->assign('detail',$detail);
	    	$this->show('');
    	} else {
			$this->error('请选择文章', __APP__."/article/index"); exit;
    	}
    }

}