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
	<h2 align="center" >Add a New Tests</h2>
	
<div class="jumbotron">
  
	<p>
	<?php
		if (isset($_SESSION['newtest'])) {
			?>
			<div class="alert alert-dismissible alert-warning">
			
    <p> 
			<?php
			echo $_SESSION['newtest'];
			unset($_SESSION['newtest']);
			echo "</p></div>";
		}
	?>
	<table class="table table-striped table-hover ">
	<form action='uploadtests.php' method=post enctype="multipart/form-data">
		<?php
			
			echo "<tr><td><b>Test Id: </b></td><td><input name = 'tid' class='form-control' id='inputDefault' type = 'text'></td></tr>";
			echo "<tr><td><b>Test Name: </b></td><td><input name = 'tname' class='form-control' id='inputDefault' type = 'text'></td></tr>";
			echo "<tr><td><b>Json File: </b></td><td><input name = 'json' class='form-control' id='inputDefault' type = 'file'></td></tr>";
			echo "<tr><td><b>Questions PDF: </b></td><td><input name = 'pdf' class='form-control' id='inputDefault' type = 'file', value = ''></td></tr>";
			echo "<tr><td><b>Solutions PDF: </b></td><td><input name = 'sol' class='form-control' id='inputDefault' type = 'file', value = ''></td></tr>";
			echo "<tr><td colspan=2><b>Please note that name of Json File, Question PDF should be same as test id and name of Solutions PDF should be in the format (test id)_solutions.pdf";
		?>
		</table>
		 <input type = "submit" class="btn btn-primary" value = "Add Test">
	</p>
	</form>
	</div>
	
	</p>
	

&copy; D.K. Physics<br>





</body>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</html>