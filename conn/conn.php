<?php
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
$initials = parse_ini_file("../.ht.settings.ini");
try {
    $connection = mysqli_connect($initials["databaseserver"], $initials["username"], $initials["password"], $initials["database"]);
    // if connection doesn't work load error page
} catch (Exception $e) {
    header("Location:../html/connectionError.html");
    exit();
}
?>