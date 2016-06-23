<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="./css/navigate.css" />
	<link rel="stylesheet" type="text/css" href="./css/body.css" />
	<link rel="stylesheet" type="text/css" href="./css/login.css" />
</head>

<body>
<?php
	session_start();
	if (isset($_SESSION['flag']))
	{
		echo ("<script type='text/javascript'>{window.location = './admin.php';} </script>");
	}
	else 
	{
		//NULL
	}
?>
<!--navigate bar-->
<div class="navigate">
	<img id="logo" src="../image/logo.png" />
	<p id="text">这张同学录真厉害~</p>
	<a href="/"><img id="home" src="../image/home.png"></a>
</div>
<!--password-->
<div id="login">
<form action="veryfy.php" method="post">
	<input class="login" name="user" type="text" placeholder="用户名" />
	<input class="login" name="password" type="password" placeholder="密码" />
	<input class="login" type="submit" value="登录" />
</form>
</div>

</body>
</html>
