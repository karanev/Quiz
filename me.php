<?php
	include("session.php");
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
        <li><a href="profile.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    
</div>
</nav>
<div class = "container">
	<h2 align="center" >My Profile</h2>
	
<div class="jumbotron">
  
	<p>
	<?php
		if (isset($_SESSION['update'])) {
			?>
			<div class="alert alert-dismissible alert-warning">
			
    <p> 
			<?php
			echo $_SESSION['update'];
			unset($_SESSION['update']);
			echo "</p></div>";
		}
	?>
	<table class="table table-striped table-hover ">
	<form action='updateprofile.php' method=post>
		<?php
			$fetch = mysql_query("select username, name, email, phone from login where username = '{$login_session}';");
			$row = mysql_fetch_array($fetch);
			echo "<tr><td><b>Username: </b></td><td>".$row["username"]."</td></tr>";
			echo "<tr><td><b>Name: </b></td><td><input name = 'sname' class='form-control' id='inputDefault' type = 'text', value = '".$row["name"]."'></td></tr>";
			echo "<tr><td><b>Phone: </b></td><td><input name = 'phone' class='form-control' id='inputDefault' type = 'text', value = '".$row["phone"]."'></td></tr>";
			echo "<tr><td><b>Email: </b></td><td><input name = 'email' class='form-control' id='inputDefault' type = 'text', value = '".$row["email"]."'></td></tr>";
			
		?>
		</table>
		 <input type = "submit" class="btn btn-primary" value = "Update Changes">
	</p>
	</form>
	</div>
	
	</p>
	

&copy; D.K. Physics<br>





</body>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</html>