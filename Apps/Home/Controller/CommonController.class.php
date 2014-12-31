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
            $time = time();
            session('member_status',NOT_LOGIN);
            session('member_uid',md5($time.'uid'));
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
