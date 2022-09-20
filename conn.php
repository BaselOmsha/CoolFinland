<?php
$servername="db";
$username="root";
$password="password";
$dbname="coolFinland";


$conn = new mysqli($servername,$username,$password,$dbname);
if($conn ->connect_error)
die("conection failed:".$conn->connect_error);
