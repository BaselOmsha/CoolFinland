<?php 
session_start();
if (!isset($_SESSION["name"])) { // if session is not set, go to the admin login page
    // $_SESSION["returnSite"] = "/php/searchBydate.php";
    header("Location:../index.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $_SESSION['name']; ?> | Cool Finland</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="./scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<script>
  function expandWindow() {
    var x = document.getElementById("profile-info-container");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
//When user clicks somewhere else info box disapears
document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('profile-info-container');
    if (!container.contains(e.target)) {
        container.style.display = 'none';
    }
});
</script>
<style>
@charset "UTF-8";

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
  background-color: var(--lightgrey2);
  color: var(--darkgrey);
  direction: ltr;
  line-height: 1.34;
  margin: 0;
  font-family: Helvetica;
}

input {
  width: 200px;
  height: 50px;
}

table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: rgb(199, 199, 199);

}

.table td,
th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: rgb(199, 199, 199);
}

tr:hover {
  background-color: #ddd;
}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.div1 {
    
    display: flex;
    align-items: center;
  justify-content: center; 
  margin-top: 5px;
  /* background-color: rgb(239, 239, 239); */
}


    #navbar {
  display: flex;
  justify-content: center;
  flex-grow: 1;
  align-items: flex-end;
  font-size: 20px;
  font-weight: bold;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-right: 110px;
  padding-left: 110px;
  width: 100%;
  background: var(--white);
  -webkit-box-shadow: 0 8px 6px -6px var(--lightgrey);
  -moz-box-shadow: 0 8px 6px -6px var(--lightgrey);
  box-shadow: 0 8px 6px -6px var(--lightgrey);
}
.logo-left-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width:50px;
  margin-left: -110px;
}
.center-topnav {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-grow: 1;
  align-items: flex-end;
}
.wrap {
  display: flex;
  justify-content: center;
  align-items: center;
  Width: 130px;
  height: 37px;
}

.wrap2 {
  display: flex;
  justify-content: center;
  align-items: center;
  background: var(--white);
  Width: 110px;
  height: 37px;
}

.wrap2:hover {
  cursor: pointer;
  background: var(--lightgrey);
  border: solid var(--lightgrey);
  border-radius: 5px;
}
.logo-right-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width:50px;
  margin-right: -110px;

}
#profile-info-text-positioning {
  height: 0;
  position: absolute;
  z-index: 302;
  width: 75px;
  right: 275px;
  top: 40px;
  opacity: 1;

}

#profile-info-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 0 0 1px rgb(0 0 0/ 10%), 0 1px 10px rgb(0 0 0/ 35%);
  background: #FFFFFF;
  position: relative;
  box-sizing: border-box;
  font-size: 13px;
  line-height: 16px;
  right: 60px;
  top: 10px !important;
  width: 356px;
  padding: 12px;
  color: #000000;
  display: none;
  border-radius: 10px;
  width: 400px;
  height: 180px;
  font-size: 15px;
}

.prof-container {
  display: flex;
  justify-content: left;
  align-items: center;
  width: 100%;
  height: 80px;
  box-shadow: 0 0 0 1px rgb(0 0 0/ 10%), 0 1px 10px rgb(0 0 0/ 35%);
  border-radius: 10px;
  padding: 10px;
}

.prof-container:hover {
  cursor: pointer;
  background: #f2f2f2;
}
.main-profile-picture1 {
  margin: 80px 0px 0px 30px;
}

.profile-button-main1 {
  border-radius: 50%;
  behavior: url(PIE.htc);
  display: flex;
  justify-content: Left;
  align-items: center;
}

.profile-button-main-pic1 {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 35px;
  height: 35px;
  background: #e4e6eb;
  margin-bottom: 75px;
  margin-right: 10px;
  margin-left: -1px;
}

.prof-nav-item {
  display: flex;
  justify-content: left;
  align-items: center;
  width: 100%;
  height: 60px;
  padding: 10px;
  font-size: 15px;
  margin-top: 15px;
  margin-bottom: 15px;
}

.prof-nav-item:hover {
  cursor: pointer;
  background: #f2f2f2;
  border-radius: 10px;
}

:root {
  --white: #ffffff;
  --darkgrey: #1c1e21;
  --lightgrey: #d3d5d7;
  --lightgrey2: #f0f2f5;
}
</style>

<body onload="blueBottom(); changeColors(); submitform()">

    <header>
        <div id="navbar">
        <div class="logo-left-wrapper">
				<a href="#ty"> <img class="home-button" alt="home button"
					src="../images/coolFinLogo.png" Style="height: 35px; width: 35px"></a>
			</div>
			<div class="center-topnav">
				<div class="wrap">
					<div class="wrap2">
						<img class="home-button" alt="home button"
							src="../images/homeIcon.png" Style="height: 20px; width: 20px"
							onclick="window.location.href='main.php'">
													
					</div>
                    <div class="wrap2">
						<img class="home-button" alt="calendar button"
							src="../images/calendar.png" Style="height: 28px; width: 28px"
							onclick="window.location.href='searchBydate.php'">
													
					</div>
				</div>
			</div>
			<div class="logo-right-wrapper">
				<img class="profile-button" alt="Profile button"
					src="../images/account.png" Style="height: 35px; width: 35px"
					onclick="expandWindow()">
			</div>
			<div id="profile-info-text-positioning">
				<div id="profile-info-container">
					<div class="prof-container" onclick="window.location.href='#ty'">
						<div
							class="main-profile-picture1 profile-button-main1 
							profile-button-main-pic1"
							onclick="">
							<img alt="Profile picture" src="../images/avatar.png"
								Style="height: 25px; width: 36px" onclick="">
						</div>
						<h5><b>Welcome&nbsp;&nbsp; </b></h5>
                        <h4 style="color:green"><?php echo  $_SESSION['name']; ?></h4>
					</div>
					<div class="prof-nav-item" onclick="window.location.href='./logout.php'">
						<div
							class="main-profile-picture1 profile-button-main1 
							profile-button-main-pic1"
							onclick="">
							<img alt="Profile picture" src="../images/logout.png"
								Style="height: 35px; width: 36px" onclick="">
						</div>
						<h5><b>Log out</b></h5>
					</div>
				</div>
			</div>
		</div>
    </header>

    <?php
    
    include "../conn/conn.php";
    $edit = isset($_GET["edit"]) ? $_GET["edit"] : "";
    if (empty($edit)) {
        echo"No data found";
        exit();
    }
    $sql = "select * from deliveries where delivery_id=?";
    $stmt = mysqli_prepare($connection, $sql); //Prepare statment prevent sql injection. Highly recommended!
    mysqli_stmt_bind_param($stmt, 'i', $edit);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
   if (!$output = mysqli_fetch_object($result)) {
        echo "Something is wrong!!!";
        exit();
    }
    ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="card mt-5">
            <div class="card-header">
                <h4>Update Delivery details</h4>
            </div>
            <div class="card-body">

                <form action="./updateApp.php" method="POST" enctype="multipart/form-data">
                   <!-- <select class= "" name="">
                       <option value= "delivery_id" disabled> SELECT A Value</option>
                       <option value= '</option>
                    </select>     -->
                       <div class= delivery_id>
                        <label for="">Delivery Id</label>
                        <input type="number" name="delivery_id" class="form-control" value='<?php echo $output->delivery_id;?>' readonly>
                        </div>
                   
                        <div class= company_id>
                        <label for="">Company Id</label>
                        <input type="number" name="company_id" class="form-control" value='<?php echo $output->company_id;?>' readonly>
                        </div>
                        <div class= company_name>
                        <label for="">Company name</label>
                        <input type="text" name="company_name" class="form-control" value='<?php echo $output->company_name;?>' readonly>
                        </div>
                        <div class= delivery_date>
                        <label for="">Delivery date</label>
                        <input type="date" name="delivery_date" class="form-control" value='<?php echo $output->delivery_date;?>' >
                        </div>
                        <div class= container_amount>
                        <label for="">Container amount</label>
                        <input type="number" name="container_amount" class="form-control" value='<?php echo $output->container_amount;?>' >
                        </div>
                        <div class= delivery_weight>
                        <label for="">Delivery weight</label>
                        <input type="number" step="any" min="0" max="50" name="delivery_weight" class="form-control" value='<?php echo $output->delivery_weight;?>' >
                        </div>
                        <div class= Transport_method>
                        <label for="">Trasporation Method</label>
                        <input type="text" name="Transport_method" class="form-control" value='<?php echo $output->Transport_method;?>' >
                        </div>
                        <div class= delivery_status>
                        <label for="">Delivery status</label>
                        <input type="text" name="delivery_status" class="form-control" value='<?php echo $output->delivery_status;?>' >
                        </div>
                        <div class= site_maximum_capacity_t>
                        <label for="">Max capacity</label>
                        <input type="number" name="site_maximum_capacity_t" class="form-control" value='<?php echo $output->site_maximum_capacity_t;?>' >
                        </div>
                        <div class= more_info>
                        <label for="">More Info</label>
                        <input type="text" name="more_info" class="form-control" value='<?php echo $output->more_info;?>' >
                        </div>
                        <br>
                        <div class="form-group mb-3">
                        <input type='submit' name='submit' value='Update Data' class="btn btn-primary">
                        <a href="./searchBydate.php"> 
                        <input type='button' name='submit' value='Back' class="btn btn-primary"></a>
                    </div> 
                    </form>
                    <?php
                    mysqli_close($connection);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>