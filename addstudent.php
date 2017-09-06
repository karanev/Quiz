<?php
	include("adminsession.php");
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Profile | D.K. Physics</title>
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
	<h2 align="center" >Add a New Student</h2>
	
<div class="jumbotron">
  
	<p>
	<?php
		if (isset($_SESSION['newstudent'])) {
			?>
			<div class="alert alert-dismissible alert-warning">
			
    <p> 
			<?php
			echo $_SESSION['newstudent'];
			unset($_SESSION['newstudent']);
			echo "</p></div>";
		}
	?>
	<table class="table table-striped table-hover ">
	<form action='newstudent.php' method=post>
		<?php
			
			echo "<tr><td><b>Username: </b></td><td><input name = 'susername' class='form-control' id='inputDefault' type = 'text'></td></tr>";
			echo "<tr><td><b>Password: </b></td><td><input name = 'spassword' class='form-control' id='inputDefault' type = 'password'></td></tr>";
			echo "<tr><td><b>Name: </b></td><td><input name = 'sname' class='form-control' id='inputDefault' type = 'text'></td></tr>";
			echo "<tr><td><b>Phone: </b></td><td><input name = 'phone' class='form-control' id='inputDefault' type = 'text', value = ''></td></tr>";
			echo "<tr><td><b>Email: </b></td><td><input name = 'email' class='form-control' id='inputDefault' type = 'text', value = ''></td></tr>";
			
		?>
		</table>
		 <input type = "submit" class="btn btn-primary" value = "Add Student">
	</p>
	</form>
	</div>
	
	</p>
	

&copy; D.K. Physics<br>





</body>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</html>