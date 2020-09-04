<?php
include('session.php');
include('connect.php');

$groupname=mysqli_real_escape_string($connection, $_POST['groupname']);	
//$gender=mysqli_real_escape_string($connection, $_POST['gender']);	
$sql = "CREATE TABLE $groupname
(
ID int NOT NULL AUTO_INCREMENT,
userid varchar(50),
name varchar(50),
PRIMARY KEY (ID)
)"; 


$connection->close();