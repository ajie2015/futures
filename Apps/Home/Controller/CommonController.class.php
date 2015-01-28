<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	
	public function _initialize(){
		//用户
        if( session('?member_status') ){
			//status =1;未登录；
			//status =2;已登录；
        } else {
            $this->logout();
        }
        $this->assign('controller_name',CONTROLLER_NAME);
    	$this->assign('action_name',ACTION_NAME);
    	
    	//分页
    	if(isset($_GET['p']) && $_GET['p']>0){
            $_GET['p'] = intval($_GET['p']);
        } else {
           $_GET['p'] = 1;
        }
        
        //导航搜索框
        if( isset($_GET['keywords']) && $_GET['keywords'] !='' ){
        	$this->keywords = trim($_GET['keywords']);
        	
        } else {
        	$this->keywords = '';
        }
        $this->assign('keywords',$this->keywords);
	}
	
	public function logout(){
		session(null);
		$time = time();
        session('member_username','游客');
        session('member_status',NOT_LOGIN);
	}

	public function need_login(){

		if( session('member_status') != IS_LOGIN ){
			$this->error('请登录', __APP__."/user/login"); exit;
		}
	}
	
    //验证码
    function verify(){
		$Verify = new \Think\Verify();
		$Verify->entry();
    }
    
    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function check_verify($code, $id = ''){
    	$verify = new \Think\Verify();
    	return $verify->check($code, $id);
    }
}
