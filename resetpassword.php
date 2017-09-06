<?php
	include("adminsession.php");
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reset Password | D.K. Physics</title>
	<link rel = "stylesheet" type = "text/css" href = "./css/default.css" />

</head>
<body>
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
        <li><a href="dashboard.php">Back to Dashboard</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    
</div>
</nav>
<div class = "container">
	<h2 align="center" >Reset Password</h2>
	
<div class="jumbotron">
  
	<p>
	<?php
		if (isset($_SESSION['resetpassword'])) {
			?>
			<div class="alert alert-dismissible alert-warning">
			
    <p> 
			<?php
			echo $_SESSION['resetpassword'];
			unset($_SESSION['resetpassword']);
			echo "</p></div>";
		}
	?>
	<table class="table table-striped table-hover ">
	<form action='resetstudentpassword.php' method=post>
		<?php
			
			echo "<tr><td><b>Username: </b></td><td><input name = 'susername' class='form-control' id='inputDefault' type = 'text'></td></tr>";
			echo "<tr><td><b>New Password: </b></td><td><input name = 'snewpassword' class='form-control' id='inputDefault' type = 'password'></td></tr>";
		?>
		</table>
		 <input type = "submit" class="btn btn-primary" value = "Reset Password">
	</p>
	</form>
	</div>
	
	</p>
	

&copy; D.K. Physics<br>





</body>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</html>