<?php 
    include('db.php');
    session_start();
    {
    	$user = $_POST['username'];
    	$pass = $_POST['password'];
        $fetch = mysql_query("select id from login where username='$user' and password='$pass'");
        $count=  mysql_num_rows($fetch);
        if($count != "") {
            $_SESSION['login_username'] = $user;
        	header("Location:profile.php");
        } else {
            $_SESSION['login_error'] = "Invalid username or password";
    	    header('Location:index.php');
        }
    }
?>