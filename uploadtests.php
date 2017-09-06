<?php
include("adminsession.php");
if(isset($_FILES['json'])){
      $errors= array();
      $file_name = $_FILES['json']['name'];
      $file_tmp =$_FILES['json']['tmp_name'];
      $file_type=$_FILES['json']['type'];
      
      
            if(empty($errors)==true){
         move_uploaded_file($file_tmp,"tests/".$file_name);
         
      }
      else{
         print_r($errors);
      }
   }

if(isset($_FILES['pdf'])){
      $errors= array();
      $file_name = $_FILES['pdf']['name'];
      $file_tmp =$_FILES['pdf']['tmp_name'];
      $file_type=$_FILES['pdf']['type'];
      
      
            if(empty($errors)==true){
         move_uploaded_file($file_tmp,"tests/".$file_name);
         
      }
      else{
         print_r($errors);
      }
   }

if(isset($_FILES['sol'])){
      $errors= array();
      $file_name = $_FILES['sol']['name'];
      $file_tmp =$_FILES['sol']['tmp_name'];
      $file_type=$_FILES['sol']['type'];
      
      
            if(empty($errors)==true){
         move_uploaded_file($file_tmp,"tests/".$file_name);
         
      }
      else{
         print_r($errors);
      }
   }   

$testid = $_POST['tid'];
$testname = $_POST['tname'];
$addquery = "insert into tests (`id`, `name`) values ('{$testid}', '{$testname}')";
if (mysql_query($addquery))    {
    $_SESSION['newtest'] = "New test added successfully";
}
else{
    $_SESSION['newtest'] = "New test could not be added successfully";
}
header('Location:addtest.php');
?>