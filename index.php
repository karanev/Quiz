<?php
	include ('db.php');
	session_start();
?>
<!DOCTYPE html>
<head>
<title>D.K. Physics</title>
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
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Test Series <span class="sr-only">(current)</span></a></li>
               
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.dkphysics.in">Home</a></li>
         <li><a href="admin.php">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class = "container">
<div class="jumbotron">
  <div class="row">
  	<div class="col-xs-6">
  <p>

 <center>
 	<img src = "./images/logo.png" height = "100px" width = "100px"/>
 </center>
 </p> 
    <p><form method="post" name="login" action="login.php">
    <?php
		if (isset($_SESSION['login_error'])) {
			?>
			<div class="alert alert-dismissible alert-warning">
			
    <p> 
			<?php
			echo $_SESSION['login_error'];
			unset($_SESSION['login_error']);
			echo "</p></div>";
		}
		?>

	<div class="form-group">
  	<label class="control-label" for="inputDefault">Username</label>
  	<input type="text" required class="form-control" name="username" id="inputDefault">
	</div>
	<div class="form-group">
  	<label class="control-label" for="1inputDefault">Password</label>
  	<input type="password" required class="form-control" name="password" id="1inputDefault">
	</div>
	<input class="btn btn-primary btn-lg" type="submit" value="Login">
 <!--<a href = "#">Forgot Password?</a>-->
	
  
	
	

</form></p>

</div>
<div class="col-xs-6">
<center>
<h2>D.K. Singla</h2>
<p>
<div><img src = "./images/dk.png" width="120px" height="120px"><p></center>D.K. Singla has been teaching Physics for the last 15 years. D.K. Singla is known to make the subject very interesting and yet take the concepts to the most level starting from very basic level so that students of all levels feel comfortable in classroom and yet gain. Difficult concepts also with ease. It is because of all these qualities that many students with very less scores in class 10 have been scoring exceptionally well in physics competitive exams.</p>
</p>
</div>
</div>
</div>
&copy; D.K. Physics
</div>






</body>
</html>