<?php
	include("adminsession.php");

	$susername = $_POST['susername'];
	$snewpassword = $_POST['snewpassword'];
	
	// Check if username and password are correct
	$check = "select id from login where username='$susername'";
	$result = mysql_query($check);
	$count = mysql_num_rows($result);
	if ($count == "") {
		$_SESSION['resetpassword'] = "Username or password is incorrect";
		header("Location:resetpassword.php");
	} else {
		$updatepassquery = "update login set password='$snewpassword' where username='$susername'";
		if (mysql_query($updatepassquery)) {
			$_SESSION['resetpassword'] = "Password updated successfully";
		} else {
			$_SESSION['resetpassword'] = "Error: Password not updated";
		}
	    header('Location:resetpassword.php');
	}
?>