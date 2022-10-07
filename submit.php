
<?php

//include "connection.php";

/*echo $delivery_id = $_POST['delivery_id'];
echo $company_id = $_POST['company_id'];
echo $company_name = $_POST['company_name'];
echo $delivery_date = $_POST['delivery_date'];
echo $container_amount = $_POST['container_amount'];
echo $delivery_weight = $_POST['delivery_weight'];
echo $delivery_status = $_POST['delivery_status'];
echo $site_maximum_capacity_t	 = $_POST['site_maximum_capacity_t'];
echo $more_info = $_POST['more_info'];
*/
$con = mysqli_connect("db", "root", "password", "coolFinland") or die ("Connection failed!");
//$sql = "SELECT * from deliveries";
 

  $delivery_id = isset($_POST["delivery_id"]) ? $_POST["delivery_id"] : "";
  $company_id = isset($_POST["company_id"]) ? $_POST["company_id"] : "";
  $company_name = isset($_POST["company_name"]) ? $_POST["company_name"] : "";
  $delivery_date = isset($_POST["delivery_date"]) ? $_POST["delivery_date"] : "";
  $container_amount = isset($_POST["container_amount"]) ? $_POST["container_amount"] : "";
  $delivery_weight = isset($_POST["delivery_weight"]) ? $_POST["delivery_weight"] : "";
  $delivery_status = isset($_POST["delivery_status"]) ? $_POST["delivery_status"] : "";
  $site_maximum_capacity_t = isset($_POST["site_maximum_capacity_t"]) ? $_POST["site_maximum_capacity_t"] : "";
  $more_info = isset($_POST["more_info"]) ? $_POST["more_info"] : "";

//$con = mysqli_connect("localhost","root","","coolFinland") or die("Connection failed!");
//$sql = "INSERT into deliveries(delivery_id,company_id,company_name,delivery_date,container_amount,delivery_weight,delivery_status,site_maximum_capacity_t,more_info)            
//Values('{$delivery_id}','{$company_id}','{$company_name}','{$delivery_date}','{$container_amount}','{$delivery_weight}',' {$delivery_status}', '{$site_maximum_capacity_t}', '{$more_info}')";

//$sql = "UPDATE 'deliveries' SET 'delivery_id'='[value-1]','company_id'='[value-2]','company_name'='[value-3]','delivery_date'='[value-4]','container_amount'='[value-5]','delivery_weight'='[value-6]','delivery_status'='[value-7]','site_maximum_capacity_t'='[value-8]','more_info'='[value-9]' WHERE 1";

//$sql = "SELECT * from deliveries";
//$sql2 = "UPDATE deliveries SET company_id= $company_id, company_name='$company_name', delivery_date='$delivery_date', container_amount= $container_amount, delivery_weight= $delivery_weight, delivery_status='$delivery_status', site_maximum_capacity_t= $site_maximum_capacity_t, more_info='$more_info'  WHERE delivery_id= {$delivery_id}";
$sql2 =  "update deliveries set company_name=?, delivery_date=?, container_amount=? delivery_weight=?, delivery_status=?, site_maximum_capacity_t=?, more_info=?,  where delivery_id=?";
$stmt = mysqli_prepare($con, $sql2);
    // assign the variables to their right place
    //mysqli_stmt_bind_param($stmt, 'ssiisisi', $company_name, $delivery_date, $container_amount, $delivery_weight, $delivery_status, $site_maximum_capacity_t, $more_info, $delivery_id);
    mysqli_stmt_bind_param($stmt, 's', $delivery_id);

    // execute the sql phrase above
    mysqli_stmt_execute($stmt);
    // closing the connection
    mysqli_close($con);

// echo $sql;
/*$result = mysqli_query($con,$sql2) or die("Record failed to save");
$output = mysqli_fetch_assoc($result);

if($result){
  print_r($output);
}else{
  echo "Record failed to save";
}
*/
?>
