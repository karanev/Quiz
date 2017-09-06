<?php
  include("session.php");
?>
<?php
  $test_id = $_GET['id'];
  $_SESSION["test_id"] = $test_id;
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
      <a class="navbar-brand" href="#">D.K. PHYSICS TEST SERIES</a>
    </div>
</div>
</nav>
<div class = "container">
<div class="jumbotron">
<p>
<h2>General Instructions</h2>
<ol>
<li>The total duration of the exam is 60 minutes</li>
<li>The clock will be set by the server and displayed at the top right corner of your screen. Once the timer is over, the test will submit automatically.</li>
<li>Every correct answer will earn you 4 marks and every wrong answer will be penalised by 1 mark</li>
</ol>
<h2>Other Instructions</h2>
<ol>
<li>At the end of the test, you call download a pdf file of the questions with the solutions</li>
<li>Please keep in mind this colour coding:<br><br>
      <table class = "table table-striped table-hover">
          <tr><td><img src = "./images/na.png"></td><td>You have not attempted this question</td></tr>
        <tr><td><img src = "./images/at.png"></td><td>You have attempted this question</td></tr>
        <tr><td><img src = "./images/mr.png"></td><td>You have marked this question for review</td></tr>
        </table>
        </li>
</ol><br>
</p>
<?php
  echo "<center><a class='btn btn-primary btn-lg' href='take_test.php?id=" . $test_id . "'>Take test</a></center>";
  ?>
</div>
