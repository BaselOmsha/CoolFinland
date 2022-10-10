<?php
session_start();
if (!isset($_SESSION["name"])) { // if session is not set, go to the admin login page
    // $_SESSION["returnSite"] = "./main.php#first";
    header("Location:../index.html");
    exit();
} else
include "./header.php";
include "../conn/conn.php";

?>
	<div class="calander-container">
		<div class="about-left-column" id="about-left-column" style="visibility: visibale">
			<div class="left-columns-header2">
				<h3 style="color: #000000">
					<b onclick="changeColors()">Search By Date</b>
				</h3>
			</div>
			<!-- Get current date -->
			<!-- <?php 
			$date3 = isset($_POST["delivery_date"]) ? $_POST["delivery_date"] : "";
			$sql = "select delivery_date from deliveries where delivery_date=curdate()";
			$do = mysqli_query($connection, $sql);
			$row3 = mysqli_fetch_object($do) 
			?> -->
			
			
			<!-- <form id="myform"> -->
			<form id="myform" name="contact-form" action='searchBydate.php' method='post'style="background-color:#ffffff;margin-right:20px">

			<input type="text" onblur="this.focus()" autofocus id="delivery_date2" name="delivery_date" value="" 
			placeholder="" required style="visibility:visible; border:none; color:#ffffff;" />
					<!-- <input class="div1" type="date" id="delivery_date2" value='curdate()' name="delivery_date"> -->
				<div  id=delivery_date name="delivery_date" type="text" style="margin-bottom:10px;">
				
				</div>
			<button id="myBtn" class="date-search-button" type="submit">Search</button>
				<!-- <input type='button' name='submit' value='Select' id="myBtn" class="date-search-button"> -->
			</form>
			<div style="visibility: hidden">
			<p style="font-size:25px"
			id='result' >Checking Date...</p></div>
					<br>
		</div>
	</div>
	<div class="division">
	</div>
	<div class='about-container'>
		<div class="about-left-column1" id="about-left-column" style="visibility: visibale">
			<div class="left-columns-header">
				<h3 style="color: #000000">
					<b onclick="changeColors()">Deliveries</b>
				</h3>
			</div>
			
 <?php
// collect data from the form with $_POST
 $date = isset($_POST["delivery_date"]) ? $_POST["delivery_date"] : "";
// select from database 
$sql = "select delivery_id, company_name, company_id, delivery_status, delivery_date from deliveries where delivery_date=?";
try {
	$stmt = mysqli_prepare($connection, $sql);
	mysqli_stmt_bind_param($stmt, 's', $date);
	mysqli_stmt_execute($stmt);
	$print = mysqli_stmt_get_result($stmt);
	echo			"<div class='left-columns-header'>";
	echo				"<h4 style='color: #000000'>";
	echo					"<b onclick='blueBottom(); changeColors()'>Companies</b>";
	// echo	$print;
	echo				"</h4>";
	echo			"</div>";
echo	"<table style='width:100%'>";
echo		"<tr>";
echo "<th  style='color: #000000'><b><h7>Company Name&nbsp;</h7></b></th>";
echo	"<th style='color:#ffffff'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>";
echo "<th  style='color: #000000'><b><h7>Delivery Status</h7></b></th>";
echo		"</tr>";
$count=0;
			while($row = mysqli_fetch_object($print)) { //return the row of result as an object
$count++;				
echo		"<tr>";
// echo		"<div class='left-columns-buttons' href='#' id='overviewQ'>";
echo		 "<br>";
echo			"<form id='myform2' name='form2' action='searchBydate.php' method='post'>";
echo			"<td><input style='background-color:#dddddd' class='newInput' type='text' id='' name='company_name' value='$row->company_name'
						placeholder='' onclick='changeColors(); Form2()' required  readonly/></td>";
echo				"<td><input style='color:red' class='newInput' type='text' id='' name='delivery_id' value='$row->delivery_id'
						placeholder='' onclick='changeColors(); Form2()' required hidden readonly/></td>";
						echo 			"<td><h8>  $row->delivery_status</h8></td>&nbsp;&nbsp;";
	echo			"<td><input class='newInput' type='text' id='' name='delivery_date' value='$row->delivery_date'
						placeholder='' onclick='changeColors(); Form2()' required hidden readonly/></td>";
	echo			"<td><input class='newInput' type='text' id='' name='company_id' value='$row->company_id'
						placeholder='' onclick='changeColors(); Form2()' required hidden readonly/></td>";
	
	
	echo			"<td><button id='myBtn' class='comp-select-button' type='submit'>Select</button></td>";
	

echo			"</form>";
echo		"</div>";
						}  
echo		"</tr>";
echo	"</table>";

			if ($count==0){ 
				echo"</br>";
				echo "<h5 style='color:red'>No deliveries found on the selected date. Choose a different one form the calander!</h5>";
			}



} catch (Exception $e) {
	print "Error";
} 
echo		"</div>";
// echo 	"<form id='userForm'>";


?>
<?php
// collect data from the form with $_POST
 $date2 = isset($_POST["delivery_date"]) ? $_POST["delivery_date"] : "";
 $name = isset($_POST["company_name"]) ? $_POST["company_name"] : "";
 $comp_id = isset($_POST["company_id"]) ? $_POST["company_id"] : "";
 $delivery_id = isset($_POST["delivery_id"]) ? $_POST["delivery_id"] : "";
// select from database 
$sql2 = "select delivery_id, company_id, company_name, delivery_date, container_amount, delivery_weight, delivery_status, Transport_method, more_info from deliveries where delivery_id=?";
try {
	$stmt2 = mysqli_prepare($connection, $sql2);
	mysqli_stmt_bind_param($stmt2, 's', $delivery_id);
	mysqli_stmt_execute($stmt2);
	$print2 = mysqli_stmt_get_result($stmt2);
?>
			<div class="about-divider"></div>
				<div class="infoCool" id="overview1" style="visibility: visible">
				<?php $count2=0;?>
					<?php while($row2 = mysqli_fetch_object($print2)) {?>
						<?php $count2++;?>
						<div class="info-header">
							<h4 style="color: #000000; margin-left:50px">Delivery details </h4>
							<div class="circleDiv-base2 circletype2" id="editNappi" style="margin-left:500px">
								<a href="./updateForm.php?edit=<?php echo $row2->delivery_id?>">
									<img alt="add cover picture" src="../images/pen.png"
									Style="height: 20px; width: 20px">
								</a>		
							</div>
						</div>
						<div class= "rowContainer">
							<div class="contact-info-container">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/nameIcon.png"
										Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
									<p style="color: #000000"><?php echo $row2->delivery_id;?></p>
								</div>
								<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
									<img alt="add cover picture" src="../images/pen.png"
										Style="height: 20px; width: 20px">
								</div> -->
								<div class="info-tag">
								<p>Delivery ID</p>
							</div>
							</div>

							<div class="contact-info-container" style="margin-right:50px">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/nameIcon.png"
										Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
									<p style="color: #000000"><?php echo $row2->company_id;?></p>
								</div>
								<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
									<img alt="add cover picture" src="../images/pen.png"
										Style="height: 20px; width: 20px">
								</div> -->
								<div class="info-tag">
								<p>Company ID</p>
							</div>
							</div>

						<div>
						<br>
						<div class= "rowContainer">
							<div class="contact-info-container">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/nameIcon.png"
										Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
									<p style="color: #000000"><?php echo $row2->company_name;?></p>
								</div>
									<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
										<img alt="add cover picture" src="../images/pen.png"
											Style="height: 20px; width: 20px">
									</div> -->
									<div class="info-tag">
								<p>Company name</p>
							</div>
							</div>

							<div></div>
							<div class="contact-info-container">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/icons8-calendar-13-96.png"
										Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
									<p style="color: #000000"><?php echo $row2->delivery_date;?></p>
								</div>
									<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
										<img alt="add cover picture" src="../images/pen.png"
											Style="height: 20px; width: 20px">
									</div> -->
									<div class="info-tag">
								<p>Delivery date</p>
							</div>
							</div>

							<div></div>
						</div>
						<br>
						<div class= "rowContainer">
							<div class="contact-info-container">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/external-count-election-outline-wichaiwi.png"
									Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
								<p style="color: #000000"><?php echo $row2->container_amount;?></p>
								</div>
								<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
									<img alt="add cover picture" src="../images/pen.png"
										Style="height: 20px; width: 20px">
								</div> -->
								<div class="info-tag">
								<p>Amount of containers</p>
							</div>
							</div>

							<div></div>
							<div class="contact-info-container">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/icons8-weight-100.png"
										Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
									<p style="color: #000000"><?php echo $row2->delivery_weight;?></p>
								</div>
								<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
									<img alt="add cover picture" src="../images/pen.png"
										Style="height: 20px; width: 20px">
								</div> -->
								<div class="info-tag">
								<p>Delivery weight in tons</p>
							</div>
							</div>

							<div></div>
						</div>
						<br>
						<div class= "rowContainer">
							<div class="contact-info-container">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/external-status-computer-programming-icons-flaticons-lineal-color-flat-icons.png"
										Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
									<p style="color: #000000"><?php echo $row2->delivery_status;?></p>
								</div>
								<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
									<img alt="add cover picture" src="../images/pen.png"
										Style="height: 20px; width: 20px">
								</div> -->
								<div class="info-tag">
								<p>Delivery status</p>
							</div>
							</div>

							<div></div>
							<div class="contact-info-container">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/icons8-info-96.png"
										Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
									<p style="color: #000000"><?php echo $row2->more_info;?></p>
								</div>
								<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
									<img alt="add cover picture" src="../images/pen.png"
										Style="height: 20px; width: 20px">
								</div> -->
								<div class="info-tag">
								<p>More info</p>
							</div>
							</div>

							<div></div>
						</div>	
						<br>
						<div class= "rowContainer">
							<div class="contact-info-container">
								<div class="contact-info">
									<img alt="add cover picture" src="../images/icons8-transportation-96.png"
										Style="height: 25px; width: 25px"> &nbsp;&nbsp;&nbsp;
									<p style="color: #000000"><?php echo $row2->Transport_method;?></p>
								</div>
								<!-- <div class="circleDiv-base2 circletype2" onclick="editName()">
									<img alt="add cover picture" src="../images/pen.png"
										Style="height: 20px; width: 20px">
								</div> -->
								<div class="info-tag">
								<p>Transportation method</p>
							</div>
							</div>
						</div>	
					</div>
					<script type="text/javascript">
					document.getElementById("editNappi").onclick = function () {
						location.href = "#/<?php $row2->delivery_id;?>";
					};
				</script>
				
					<?php } 
						if ($count2==0){ 
							echo"</br>";
							echo "<h3 style='color:red'>Select a company from the list of deliveries on the left.</h3>";
						}
						} catch (Exception $e) {
							print "Error";
						} 	
						mysqli_close($connection);
					?>
				</div>
	
<?php
include "../html/footer.html";
?>
