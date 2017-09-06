<?php
	include('db.php');
	session_start();
	$check = $_SESSION['admin_username'];
	$session = mysql_query("select username from admin where username='{$check}'");
	$row = mysql_fetch_array($session);
	$login_session = $row['username'];
	if(!isset($login_session)) {
		header("Location:admin.php");
	}
?>