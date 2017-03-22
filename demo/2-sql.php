<?php
	$host="localhost";
	$user="";
	$pw="";
	$link=mysql_connect($host,$user,$pw);
	if (!$link) {
		die("连接数据库失败".mysql_error());
	}
	else{
		echo "MySQL服务器：$host <br> 用户名称：$user <br>";
		echo "成功连接";
	}
?>