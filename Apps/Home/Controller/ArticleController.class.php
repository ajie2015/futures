<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
    	//layout(false);
    	if($_POST){
    		var_dump($_POST);exit;
    	}
		$this->show('');
    }
    
}