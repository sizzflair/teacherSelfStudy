<?php
/**
 * InitPHP开源框架 - DEMO
 * @author zhuli
 */
class indexController extends Controller {
	
	public $initphp_list = array(); //Action白名单

	public function run() {    
		// $this->view->display("index/run");
		// echo "hello world.";
		$userDao = InitPHP::getDao("test");
		$userResult = $userDao->test();
		var_dump($userResult);
		
	}
} 