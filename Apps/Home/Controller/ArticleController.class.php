<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
	public function article_add(){
    	//layout(false);
		if($_POST){
    		$model_article = D('Article');
    		$model_article->create();
    	    $model_article->uid = session('member_uid');
    	    $model_article->add_time = time();
    	    $model_article->update_time = time();
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
    	$this->assign('select_option',$select_option);
    	$this->assign('action',$action);
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
    	$article_list = $model_article->where("uid='$uid'")->order('add_time desc')->select();
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
    
    //添加文章分类
    public function cate_add(){
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
    		
    		if( $id = $model_cate->add($data)){
    			if( $data['level'] == 1 ){
    				$route['route'] = $id;
    			} else {
    				$route['route'] = $parent_route . '_' . $id;
    			}

    			$model_cate->where("id=$id")->save($route);
				$this->success('添加成功', __APP__."/article/cate_list"); exit;
    		} else {
				$this->error('添加失败', __APP__."/article/cate_add"); exit;
    		}
    	}

    	$select_option = $model_cate->cate_select();
    	$this->assign('select_option',$select_option);
		$this->show('');
    }
    
    //文章分类修改
    public function cate_update(){
    	
    }

}