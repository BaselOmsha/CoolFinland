<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION["returnSite"]);
unset($_SESSION["user"]);
unset($_SESSION["returnSite"]);
header("Location:../index.html");
?> 