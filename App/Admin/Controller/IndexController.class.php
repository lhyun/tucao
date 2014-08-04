<?php

namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {

	Public function index() {
		$this -> display();
	}

	Public function logout() {
		session_unset();
		session_destroy();
		$this -> redirect('Admin/Login/index');
	}

}
?>