<?php
#curdate() to show today date only

include 'conn.php';
include 'chart.php';


$mysql = "select * from deliveries where delivery_date = curdate() ";

$result = $conn->query($mysql);
if ($result->num_rows > 0) {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $_SESSION['user']; ?> | Cool Finland</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="./scripts.js"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

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


.chart1 {
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

<body>

    <header>
        <div id="navbar">
			<div class="logo-left-wrapper">
				<a href="#ty"> <img class="home-button" alt="home button"
					#src="../images/Logo2.png" Style="height: 35px; width: 35px"></a>
			</div>
			<div class="center-topnav">
				<div class="wrap">
					<div class="wrap2">
						<img class="home-button" alt="home button"
							src="../images/homeIcon.png" Style="height: 20px; width: 20px"
							onclick="window.location.href='#ty'">
													
					</div>
                    <div class="wrap2">
						<img class="home-button" alt="calendar button"
							src="../images/calendar.png" Style="height: 28px; width: 28px"
							onclick="window.location.href='#ty'">
													
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
                        <h4 style="color:green"><?php echo  $_SESSION['user']; ?></h4>
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

    <div class="div1">

        
        <div
            id="piechart">
        </div>
    </div>

        <div>

            <input type="text" class="input" id="myInput" onkeyup='tableSearch()' placeholder="Search by name..">

            <table class="table  " id="myTable">
                <tr style="border:solid; ">
                    <th>Delivery_ID</th>
                    <th>Company_ID</th>
                    <th>Company_name</th>
                    <th>Delivery_date</th>
                    <th>Container_amount</th>
                    <th>Delivery_weight</th>
                    <th>Delivery_status</th>
                    <th>Site_max_capacity(tons)</th>
                    <th>More_info</th>
                </tr>

                <?php
                #start of while loop
                while ($row = mysqli_fetch_assoc($result)) {

                    $delivery_id = $row['delivery_id'];
                    $company_id = $row['company_id'];
                    $company_name = $row['company_name'];
                    $delivery_date = $row['delivery_date'];
                    $container_amount = $row['container_amount'];
                    $delivery_weight = $row['delivery_weight'];
                    $delivery_status = $row['delivery_status'];
                    $site_maximum_capacity_t = $row['site_maximum_capacity_t'];
                    $more_info = $row['more_info'];

                ?>

                    <tr>

                        <td><?php echo $row['delivery_id'];  ?></td>
                        <td><?php echo $row['company_id'];   ?></td>
                        <td><?php echo $row['company_name']; ?></td>
                        <td><?php echo $row['delivery_date']; ?></td>
                        <td><?php echo $row['container_amount']; ?></td>
                        <td><?php echo $row['delivery_weight']; ?></td>
                        <td><?php echo $row['delivery_status']; ?></td>

                        </td>

                    </tr>

                <?php
                    # end of while loop
                }
                ?>
            </table>
        </div>
    
    <?php
    $result = mysqli_query($conn, 'SELECT SUM(container_amount) AS value_sum FROM deliveries where delivery_date = curdate()   ');
    $row = mysqli_fetch_assoc($result);
    $sum = $row['value_sum'];
    echo 'Capacity: ', $sum = $row['value_sum'];
    ?>

    <script type="application/javascript">
        //this is javascript for searchtable
        function tableSearch() {
            let input, filter, table, tr, td, txtValue;
            //init variables
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";

                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>