<?php
// new session to save users' info on the server
session_start();
$json = isset($_POST["user"]) ? $_POST["user"] : "";
if (!($user = checkJson($json))) { // if checkjason function returns false print the below
    print "Fill up all the fields";
    exit();
}
// connecting to the database
include "../conn/conn.php";

// select from database user's email and passowrd
$sql = "select * from employees where email=? and paswd=md5(?)";
try {
    //prepare statement used to prevent sql injection!
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $user->email, $user->paswd);
    mysqli_stmt_execute($stmt);
    $print = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_object($print)) { //return the row of result as an object
        $_SESSION["name"] = "$row->name"; //show user's username when logged in
        print "ok";
        exit();
    } else
    echo"<div class='alert1 success1'>";
        echo"<span class='closebtn'>&times;</span> <strong>Wrong email or password!</strong> 
					Check your login information and try agian
				</div>";
        // print "Invalid username or password!";
    mysqli_close($connection);
    // print $json;
} catch (Exception $e) {
    print "Error";
}

?>

<?php
// if username and/or password are not provided return false
function checkJson($json)
{
    if (empty($json)) {
        return false;
    }
    $user = json_decode($json, false);
    if (empty($user->email) || empty($user->paswd)
        ) {
        return false;
    }
    return $user;
}
?>
