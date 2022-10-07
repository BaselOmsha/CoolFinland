<?php
// $servername="db";
// $username="root";
// $password="password";
// $dbname="coolFinland";


// $con = new mysqli($servername,$username,$password,$dbname);

// // Check database connection
// if($con ->connect_error)
// die("Conection failed:".$con->connect_error);

mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
$initials = parse_ini_file("./.ht.asetukset.ini");
try {
    $con = mysqli_connect($initials["databaseserver"], $initials["username"], $initials["password"], $initials["database"]);
    // if connection doesn't work load error page
} catch (Exception $e) {
    header("Location:../html/connectionError.html");
    exit();
}

?>

