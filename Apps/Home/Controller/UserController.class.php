<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
    public function index(){
		$this->show();
    }
    
    //用户登录
    public function login(){
    	
    	//是否已登录-在另一个类统一处理
    	if( session('member_status') == IS_LOGIN ){
    		//您已经登录，跳转
    		$this->redirect("index/index");exit;
    	}

    	if( IS_POST ){
    		
    		$model_user = D('user');
    		//if( $this->check_verify(I('param.verify')) ){

    		if( $data = $model_user->create('',4) ){

    			//验证用户
    			$result = $model_user->where("username='" . $data['username'] . "' AND password='" . md5($data['password']) . "'")->find();
    			if( $result ){
    				//session赋值
    				session('member_status',IS_LOGIN);
    				session('member_uid',$result['uid']);
    				session('member_username',$result['username']);
    				$this->success('登录成功', __APP__."/index"); exit;
    			} else {
					$this -> assign('errorinfo', array('用户名或密码错误'));
    			}
    		} else {
				$this -> assign('errorinfo', $model_user->getError());
    		}
    		$this -> assign('post', $_POST);
    	}

    	//layout(false);
    	$this->display('login');
    }
    
    //用户注销
    public function logout() {
		parent::logout();
    	$this->success('已注销', __APP__."/index"); exit;
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
