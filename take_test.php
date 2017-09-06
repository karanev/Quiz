<?php
include("session.php");
?>
<link rel = "stylesheet" type = "text/css" href = "./css/default.css" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<script>
var seconds = 3600;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = "<a href ='#'>" + minutes + ":" + remainingSeconds+"</a>";
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('sb').click();
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);

</script>


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
      <a class="navbar-brand" href="#">D.K. PHYSICS TEST SERIES</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li id = "countdown"></li>
      </ul>
</div>
</nav>

<div class = "row">
<?php
	$test_id = $_GET['id'];
	$_SESSION["test_id"] = $test_id;
	$string = file_get_contents("tests/{$test_id}.json");
	$json_a = json_decode($string, true);
	echo "<center><div class='btn-group'>";
	$maxques = 0;
	do{
		$maxques++;
	}while(isset($json_a[$maxques]));
	$_SESSION['maxques'] = $maxques-1;
	for ($count=1; $count<=$_SESSION['maxques']; $count++) {
		echo "<a href='javascript:void(0);' onclick='change({$count});' id = '{$count}' class='btn btn-default'>{$count}</a>";
	}
	echo "</div></center><div class = 'container'><br><br>";
	echo "<form action='submit.php' method=post>";
	?>
	<div class = "row">
	<div class = "col-xs-8">
	<div class = "row">
	<?php
	for ($i=1; $i<=60; $i++) {//not working with $_SESSION['maxques']
		echo "<div id=ques{$i} class='jumbotron' style='display:none'><center></center>";
		echo "<h2>Question {$i}: {$json_a[$i]['q']}</h2>";
		for ($j=1; $j<=4; $j++) {
			echo "<p><input onclick = 'change_color();' type='radio' name='ques{$i}' value='{$j}'>&nbsp;{$json_a[$i][$j]}</input></p>";
		}
		echo "</div>";
	}
	?>
	</div>
	<div class = "row">
	<?php
	echo "<div class='jumbotron'>";
	?>
	<div class = "row">
	<div class = "col-xs-8">
	<?php
	echo "<input id = 'sb2' class='btn btn-primary btn-lg' onclick = 'prev();' type='button' value='Previous'>&nbsp;&nbsp;";
	echo "<input id = 'sb1' class='btn btn-primary btn-lg' onclick = 'next();' type='button' value='Next'>&nbsp;&nbsp;";
	?>
	</div>
	<div class = "col-xs-4">	
	<?php
	echo "<input id = 'sb1' class='btn btn-primary btn-lg' onclick = 'mark();' type='button' value='Mark for Review'>&nbsp;&nbsp;";
	?>
	</div>
    </div>
	</div>
	</div>
	</div>
	<div class = "col-md-4">
		<div class = "jumbotron">
			<h3>Instructions</h3>
			<p>Please keep in mind this colour coding</p>
			<table class = "table table-striped table-hover">
			    <tr><td><img src = "./images/na.png"></td><td>You have not attempted this question</td></tr>
				<tr><td><img src = "./images/at.png"></td><td>You have attempted this question</td></tr>
				<tr><td><img src = "./images/mr.png"></td><td>You have marked this question for review</td></tr>
				<tr><td colspan=2><?php
	echo "<br><center><input id = 'sb' class='btn btn-primary btn-lg' type='submit' value='Submit Test'></center>";
	?>	</td></tr>
			</table>
		</div>
	</div>
	</div>
	
		<?php
		
	echo "</form>";
	echo "</div>"
?>

</div>
<script type="text/javascript">
	var maxques = <?php echo $_SESSION['maxques'];?>;
	quest = 1;
	document.getElementById('ques1').style.display = 'block';
	function change(c){
		strin='ques'+c;
		quest = c;
		for(i=1;i<=60;i++){//Use $_SESSION['maxques'] here
			stri='ques'+i;
		    document.getElementById(stri).style.display = 'none';	
		}
		document.getElementById(strin).style.display = 'block';
	}

	function next(){
		if (quest==maxques)
			change(1);
		else
			change(quest+1);
	
	

	}

	function prev(){
		if (quest==1)
			change(maxques);
		else
			change(quest-1);
	}
	function change_color(){
		document.getElementById(quest).className="btn btn-success";
	}
	function mark(){
		document.getElementById(quest).className="btn btn-warning";
		change(quest+1);
	}
	function skipped(){

	}

	
   

</script>
</body>
  