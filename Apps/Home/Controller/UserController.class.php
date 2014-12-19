<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
		$this->display();
    }
    
    public function login(){
    	layout(false);
    	$this->display('login');
    }
    
}
