<?php
include("session.php");
?>
<link rel = "stylesheet" type = "text/css" href = "./css/default.css" />

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">D.K. PHYSICS TEST SERIES</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php">Home</a></li>
      </ul>
    
</div>
</nav>
<div class = "container">
<div class="jumbotron">
<h2>Your Result</h2>
<?php
	

	$right = 0;
	$wrong = 0;
	$marks = 0;
	$test_id = $_SESSION['test_id'];
	$string = file_get_contents("tests/{$test_id}.json");
	$json_a = json_decode($string, true);
	$maxques = 0;
	do{
		$maxques++;
	}while(isset($json_a[$maxques]));
	echo "<table class = 'table table-striped table-hover'><tr><th>Question Number</th><th>Your Answer</th><th>Right Answer</th></tr>";
	for ($i=1; $i<=$maxques-1; $i++) {
		if (isset($_POST["ques{$i}"])) {
			if ($json_a[$i]["a"] == $_POST["ques{$i}"]) {
				$right++;
			}
			else {
				$wrong++;
			}
		}
	if(isset($_POST["ques{$i}"])){
	$response = $_POST["ques{$i}"];
	echo "<tr><td>{$i}</td><td>{$response}</td><td>{$json_a[$i]['a']}</td></tr>";
    }
    else{
    echo "<tr><td>{$i}</td><td>No Response</td><td>{$json_a[$i]['a']}</td></tr>";	
    }
	}
	echo "</table>";
	$marks = $right*4 - $wrong;
	echo "<h3>Number of correct answers: ", $right, "</h3>";
	echo "<h3>Number of wrong answers: ", $wrong, "</h3>";
	echo "<h3>Marks Obtained: ", $marks, "</h3>";
	$fetch = mysql_query("select name from tests where id='{$test_id}'");
	$row = mysql_fetch_array($fetch);
	$test_name = $row['name'];
	mysql_query("insert into past_record_{$login_session} (id, name, marks)" .
		"values ('{$test_id}', '{$test_name}', {$marks})");
	echo "<h3><a href='tests/{$test_id}.pdf' target = '_blank'>Download Questions PDF</a></h3>";
	echo "<h3><a href='tests/{$test_id}_solutions.pdf' target = '_blank'>Download Solutions PDF</a></h3>";
?>

