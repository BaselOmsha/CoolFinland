<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Document</title>
  <style>
    div{
      margin:10px 0px;
    }
  </style>
</head>
<body>

<?php
include "./connection.php";

// $con = mysqli_connect("db","root","password","coolFinland") or die("Connection failed!");
$sql = "SELECT * from deliveries";

//$sql = "select delivery_id, company_id, company_name, delivery_date, container_amount, delivery_weight, delivery_status, site_maximum_capacity_t, more_info from deliveries where delivery_id=?";

//$sql = "UPDATE deliveries SET delivery_id= '$delivery_id', company_id='$company_id', company_name='$company_name', delivery_date='$delivery_date', container_amount='$container_amount', delivery_weight='$delivery_weight', delivery_status='$delivery_status',site_maximum_capacity_t='$site_maximum_capacity_t', more_info='$more_info',  WHERE 1";

// $sql = "UPDATE 'deliveries' SET 'delivery_id'='[value-1]','company_id'='[value-2]','company_name'='[value-3]','delivery_date'='[value-4]','container_amount'='[value-5]','delivery_weight'='[value-6]','delivery_status'='[value-7]','site_maximum_capacity_t'='[value-8]','more_info'='[value-9]' WHERE 1";

$result = mysqli_query($con,$sql) or die("Record failed to save");

$output = mysqli_fetch_assoc($result);

?>

  <div text-align="center">
      <label for="">Company name:</label>
      <span><?php echo $output['company_name']?></span><br>

      <label for="">Delivery data:</label>
      <span><?php echo $output['delivery_date']?></span><br><br>

      <label for="">Amount:</label>
      <span><?php echo $output['container_amount']?></span><br>

      <label for="">Weight:</label>
      <span><?php echo $output['delivery_weight']?></span><br>

      <label for="">Trasportation method:</label>
      <span><?php echo $output['Transport_method']?></span><br>

      <label for="">Status:</label>
      <span><?php echo $output['delivery_status']?></span><br>

      <label for="">Max capacity:</label>
      <span><?php echo $output['site_maximum_capacity_t']?></span><br>

      <label for="">More info:</label>
      <span><?php echo $output['more_info']?></span><br>

  </div>
</body>
</html>