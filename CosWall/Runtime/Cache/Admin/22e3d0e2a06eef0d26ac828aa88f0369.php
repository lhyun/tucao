<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>管理员</title>
		<link rel="stylesheet" type="text/css" href="/tptest/CosWall/Admin/Public/Css/admin.css"/>
		<link rel="stylesheet" type="text/css" href="/tptest/Public/Css/bootstrap.css"/>
	</head>
	<body>
		<header></header>
		<div class="wrapper">
			<div class="content">
				<div id="form-wrapper" class="form-wrapper">
					<form class="login active">
						<h3>登陆</h3>
						<div>
							<label>用户名:</label>
							<input type="text" id="user-name"   placeholder="请输入用户名"/>
							<span id="info-user-name"></span>
						</div>
						<div>
							<label>密码:
								<a href="forgot_password.html" rel="forgot_password" class="forgot linkform">
									忘记密码?
								</a></label>
							<input type="password" id="password"  onblur="validate_pwd()" placeholder="请输入密码"/>
							<span id="info_pwd"></span>
						</div>
						<div class="bottom">
							<div class="remember">
								<input type="checkbox" />
								<span>保持登录状态</span>
							</div>
							<!--需要对用户信息，在进行跳转-->
							<input type="button" class="login_btn" value="登陆"/>
							<div class="clear"></div>
						</div>
					</form>
					<form class="forgot_password">
						<h3>找回密码</h3>
						<div>
							<label>邮箱:</label>
							<input type="email" name="email" />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom" ;>
							<input type="button" value="取回密码"/>
							<a href="index.html" rel="login" class="linkform">
								回想起密码? 点这儿登陆
							</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
	<script src="/tptest/Public/Js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="/tptest/Public/Js/jquery-ui.js" type="text/javascript" charset="utf-8"></script>
	<script src="/tptest/Public/Js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
	<script src="__Public__/Js/admin.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		var handleUrl = "<?php echo U('Index/login');?>"
	</script>
</html>