<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo  $_SESSION['name']; ?> | Cool Finland</title>
<link rel="stylesheet" href="../css/profile.css" />
<link rel="shortcut icon" href="./images/Logo2.png" />
<link
	href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
	rel="stylesheet" />
    <script src="../js/scripts.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
	<script type="text/javascript">
			$(function(){
				$("#delivery_date2").datepicker({
				
				inline: true,
				sideBySide: true,
				keepOpen: true,
				dateFormat: "yy-mm-dd",
				debug:true,
			// 	onSelect : function (dateText, inst) {
			// $('#myform').submit();
    		// }
		});
		});

		function displayResult() {
			document.getElementById("#delivery_date").innerHTML =document.getElementById("#delivery_date2").value;
		}

		$(function(){
				$("#delivery_date").datepicker({
				
				inline: true,
				sideBySide: true,
				keepOpen: true,
				dateFormat: "yy-mm-dd",
				debug:true,
			// 	onSelect : function (dateText, inst) {
			// $('#myform').submit();
    		// }
		});
		});

		$(function(){
				$("#delivery_date").datepicker({
				
				inline: true,
				sideBySide: true,
				keepOpen: true,
				dateFormat: "yy-mm-dd",
				debug:true,
			// 	onSelect : function (dateText, inst) {
			// $('#myform').submit();
    		// }
		});
		});
		
		function Form2() {
  			document.getElementById("myform2").submit();
		}


	</script>
	<style>
	input:focus {
    outline: none !important;
    border:1px solid #ffffff;
    box-shadow: 0 0 10px #ffffff;
  }
	</style>
<!-- <%
session.getAttribute("LoggedUser");
%> -->
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
    <main>
		
		<div class="container">
		<div class="char-container">
		<?php include "./gaugechart.php"; ?>
		<h1 style="color: white; margin-left:-150px; margin-right:50px">Daily Capacity Dash Board</h1><br>
		<?php include "./gaugechart2.php"; ?>
		</div>
			<div class="content-container">
				<!-- <script src="../js/scripts.js"></script> -->
				