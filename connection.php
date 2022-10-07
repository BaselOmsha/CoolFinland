<?php
$servername="db";
$username="root";
$password="password";
$dbname="coolFinland";


$con = new mysqli($servername,$username,$password,$dbname);

// Check database connection
if($con ->connect_error)
die("Conection failed:".$con->connect_error);

?>

