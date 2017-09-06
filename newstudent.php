<?php
	include("adminsession.php");

	$susername = $_POST['susername'];
	$spassword = $_POST['spassword'];
	$sname = $_POST['sname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	// Make Table and Create table for student to keep record past_record_{$susername}
	// Also check if username already exists
	$usernameexist = "select username from login where username = {$susername}";
	$result = mysql_query($username);
	$count = mysql_num_rows($fetch);
	if ($count != "") {
		$_SESSION['newstudent'] = "Username already exists";
		header("Location:addstudent.php");
	} else {
		$addloginquery = "insert into login (`username`, `password`, `name`, `phone`, `email`) values ('{$susername}', '{$spassword}', '{$sname}', '{$phone}', '{$email}')";
		$createtablequery = "create table past_record_{$susername} (
			id varchar(16),
			name varchar(32),
			marks int(11)
			)";
		if (mysql_query($addloginquery) && mysql_query($createtablequery)) {
			$_SESSION['newstudent'] = "New student added successfully";
		} else {
			$_SESSION['newstudent'] = "Error: New student not added";
		}
	    header('Location:addstudent.php');
	}
?>