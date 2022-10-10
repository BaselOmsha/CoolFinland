<?php
session_start();
unset($_SESSION["user"]);
session_destroy();  
unset($_SESSION["returnSite"]);
session_destroy();  
header("Location:../index.html");
?> 