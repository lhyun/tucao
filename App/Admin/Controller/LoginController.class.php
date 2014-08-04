<?php

namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	Public function index() {
		$this -> display();
	}

	Public function login() {
		if (!IS_POST)
			halt('页面不存在');
		if (I('code', '', 'md5') != session('verify_code')) {
			var_dump(I('code', '', 'md5'));
			var_dump(session('verify_code'));
			//$this -> error('验证码错误');
		}

		$username = I('username');
		$pwd = I('password', '', 'md5');

		$user = M('user') -> where(array('username' => $username)) -> find();

		if (!$user || $user['password'] != $pwd) {
			$this -> error('账号或密码错误');
		}

		if ($user['lock'])
			$this -> error('用户被锁定');

		$data = array('id' => $user['id'], 'logintime' => time(), 'loginip' => get_client_ip(), );
		M('user') -> save($data);

		session('uid', $user['id']);
		session('username', $user['username']);
		session('logintime', date('Y-m-d H:i:s', $user['logintime']));
		session('loginip', $user['loginip']);

		$this -> redirect('Admin/Index/index');

	}

	Public function verify() {
		ob_clean();
		$Verify = new \Think\Verify();
		$Verify -> entry();
	

}

}
?>