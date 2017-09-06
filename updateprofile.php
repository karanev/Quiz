<?php
include("session.php");
		$name = $_POST['sname'];
    	$phone = $_POST['phone'];
    	$email = $_POST['email'];
    	$query = "Update login set name = '{$name}' where username = '{$login_session}'";
    	$query1 = "Update login set phone = '{$phone}' where username = '{$login_session}'";
    	$query2 = "Update login set email = '{$email}' where username = '{$login_session}'";
    	if (mysql_query($query) && mysql_query($query1) && mysql_query($query2)) {
    		$_SESSION['update'] = "Updated successfully";
        } else {
        	$_SESSION['update'] = "Couldn't Update";
        }

        header('Location:me.php');
?>