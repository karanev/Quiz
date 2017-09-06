<?php
	include("adminsession.php");
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin | D.K. Physics</title>
	<link rel = "stylesheet" type = "text/css" href = "./css/default.css" />

</head>
<body>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">D.K. PHYSICS</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
        
        <li><a href="logout.php">Logout</a></li>
      </ul>
    
</div>
</nav>
<div class = "container">
	<h2 align="center" >Welcome to DK Physics Test Series Admin Panel</h2>
	
<div class="jumbotron">
  		<h3>Here is what you can do here: </h3>
	<p>
		<table class="table table-striped table-hover ">
		<tr>
		<td><a href = "addstudent.php">Add New Students</a></td>
		</tr>
		<tr>
		<td><a href = "addtest.php">Add New Tests</a></td>
		</tr>
		<tr>
		<td><a href = "resetpassword.php">Reset a Student Password</a></td>
		</tr>
</table>
	</p>
	</div>
&copy; D.K. Physics<br>

</div>



</body>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</html>