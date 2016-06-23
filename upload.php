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
	#初始化日期时间
	$today = date("Y-m-d");
	$now = date("H:i:s");
	$datetime = $today.' '.$now;
	$letter = $_POST['text'];
	$sql = "INSERT INTO `letters` (`number`, `time`, `letter`) VALUES (NULL, '{$datetime}', '{$letter}');";
	if(mysql_query($sql))
	{
		echo ("<script type='text/javascript'>{alert('你的心意已经发送出去了哟~谢谢，除了谢谢还是谢谢！');window.location = './';}</script>");
	}
	else
	{
		echo mysql_error();
	}

	mysql_close($con);
?>