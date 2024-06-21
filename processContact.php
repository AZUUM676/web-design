<?php
// connecting to the database
require_once("db_connect.php");
//creating the query for indertion
$query ="INSERT INTO   reg(first_name, second_name, email, phone) VALUES(?,?,?,?)";
// prepared statement
$stmt= mysqli_prepare($connect, $query);
// validating if connection and preapred statemnets are correct
if(!$stmt){
    echo "prepared statement failed" .mysqli_error($connect);
}
// get form items when the form is submitted
$f=$_POST['fname'];
$l=$_POST['lname'];
$e=$_POST['email'];
$t=$_POST['number'];
// binding variable with database names or colums
mysqli_stmt_bind_param($stmt,"sssi", $f, $l,$e,$t);
if(mysqli_stmt_execute($stmt)){
    echo "data inserted successfully";
}
else{
    echo"you have errors in your form";
}