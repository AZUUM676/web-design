<?php
require_once("db_connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $query = "UPDATE reg SET first_name =?, second_name =?, email=?, phone=? WHERE ID=?";
  $stmt= mysqli_prepare($connect, $query);
  $id=$_POST['id'];
  $fn=$_POST['fname'];
  $ln=$_POST['lname'];
  $e=$_POST['email'];
  $n=$_POST['number'];
  mysqli_stmt_bind_param($stmt, "ssssi",  $fn, $ln, $e, $n,$id);
  mysqli_stmt_execute($stmt);
  echo "data updated successfully";
  exit();

  

}

?>