<?php
$db_user="root";
$db_host="localhost";
$db_pass="";
$db_name="student-registration";
$db_port="3306";

$connect= mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);
if(!$connect){
  die("couldnt connect to the database".mysqli_connect_error());
}

?>