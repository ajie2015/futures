<?php
namespace Home\Controller;
use Think\Controller;
class DashboardController extends CommonController {
	public function index(){
		layout(false);
		$this->display('index');
	}
	
}