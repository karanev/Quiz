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
        <li><a href="me.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    
</div>
</nav>
<div class = "container">
	<h2 align="center" >Welcome to DK Physics Test Series</h2>
	
<div class="jumbotron">
  
	<p>
		<?php
			$fetch = mysql_query("select id, name, marks from past_record_{$login_session}");
			echo "<h2>Past Tests</h2><br>";
			echo "<table class='table table-striped table-hover'>";
			echo "<thead><td>Name</td><td>Marks</td><td>Download Questions PDF</td><td>Download Solutions PDF</td></thead>";
			while ($row = mysql_fetch_array($fetch)) {
				echo "<tr>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["marks"] . "</td>";
				echo "<td><a href='tests/". $row["id"] .".pdf'>Click Here</a></td>";
				echo "<td><a href='tests/". $row["id"] ."_solutions.pdf'>Click Here</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		?>
	</p>
	</div>
	<div class = "jumbotron">
	<p>
		<?php
			$fetch = mysql_query("select id, name from tests where id not in (select id from past_record_{$login_session})");
			echo "<h2>New Tests</h2>";
			echo "<table class='table table-striped table-hover' >";
			echo "<thead><td>Name</td><td>Action</td></thead>";
			while ($row = mysql_fetch_array($fetch)) {
				echo "<tr>";
				
				echo "<td><b>" . $row["name"] . "</b></td>";
				echo "<td><a href='instructions.php?id=" . $row["id"] . "'>Take test</a></td>";
			}
			echo "</table>"
		?>
	</p>
	</div>
&copy; D.K. Physics<br>

</div>



</body>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</html>