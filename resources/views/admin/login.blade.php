<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href={{asset("/css/ch-ui.admin.css")}}>
	<link rel="stylesheet" href={{asset("/css/admin/font/css/font-awesome.min.css")}}>
	<title>登入</title>
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			@if(session("msg"))
				<p style="">用户名错误</p>
			@endif

			<form action="	" method="post">
				{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="user_name" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="user_password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>

					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.houdunwang.com" target="_blank">http://www.ceshidemo.com</a></p>
		</div>
	</div>
</body>
</html>