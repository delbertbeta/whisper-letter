<?php
	#连接数据库部分
	$con = mysql_connect("localhost","root","");
	mysql_set_charset("utf8",$con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	if(!mysql_select_db("memory",$con))
	{
		echo mysql_error();
	}
	$inputUser = $_POST['user'];
	$inputPw = $_POST['password'];
	$sqlFindUser = "SELECT * FROM admin WHERE user = '{$inputUser}'";
	$row = mysql_query($sqlFindUser);
	$result = mysql_fetch_array($row);
	if (!$result)
	{
		mysql_close($con);
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		echo ("<script type='text/javascript'>{alert('用户名或密码错误');window.location = './';} </script>");
	}
	if ($result['password'] == $inputPw)
	{
		mysql_close($con);
		session_start();
		$_SESSION['flag'] = 1;
		echo ("<script type='text/javascript'>{window.location = './admin.php';} </script>");
	}
	else
	{
		mysql_close($con);
		echo '<meta charset="gb22312" />';
		echo ("<script type='text/javascript'>{alert('用户名或密码错误');window.location = './';} </script>");
	}
	mysql_close($con);
?>
