<?php 
    include('db.php');
    session_start();
    {
    	$user = $_POST['username'];
    	$pass = $_POST['password'];
        $fetch = mysql_query("select username from admin where username='$user' and password='$pass'");
        $count=  mysql_num_rows($fetch);
        if($count != "") {
            $_SESSION['admin_username'] = $user;
        	header("Location:dashboard.php");
        } else {
            $_SESSION['login_error'] = "Invalid username or password";
    	    header('Location:admin.php');
        }
    }
?>