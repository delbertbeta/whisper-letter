<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="./css/navigate.css" />
	<link rel="stylesheet" type="text/css" href="./css/body.css" />
	<link rel="stylesheet" type="text/css" href="./css/data.css" />
</head>

<body>
<?php
	session_start();
	if (isset($_SESSION['flag']))
	{
		//NULL
	}
	else 
	{
		echo ("<script type='text/javascript'>{window.location = './';} </script>");
	}
?>
<!--navigate bar-->
<div class="navigate">
	<img id="logo" src="../image/logo.png" />
	<p id="text">这张同学录真厉害~</p>
	<a href="../"><img id="home" src="../image/home.png"></a>
	<a href="./logout.php" id="logout">退出</a>
</div>
<div id="someData">
	<?php
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
		$result = mysql_query("SELECT * FROM letters ORDER BY number");
		while( $aData = mysql_fetch_array($result) )
		{
			echo ('<textarea class="data" readonly="readonly">');
			echo ($aData['letter']."         于".$aData['time']);
			echo('</textarea>');
		}
	?>
</div>
</body>
</html>
