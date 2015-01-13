<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	
	public function _initialize(){
		//用户标识，memb_id或session
        //if(isset($_SESSION['member'])){
        if( session('?member_status') ){
			//status =1;未登录；
			//status =2;已登录；
        } else {
            $this->logout();
        }
        $this->assign('controller_name',CONTROLLER_NAME);
    	$this->assign('action_name',ACTION_NAME);
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
