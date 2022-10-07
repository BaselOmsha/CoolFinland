
<?php

  include "../conn/conn.php";

  $delivery_id = isset($_POST["delivery_id"]) ? $_POST["delivery_id"] : "";
  $company_id = isset($_POST["company_id"]) ? $_POST["company_id"] : "";
  $company_name = isset($_POST["company_name"]) ? $_POST["company_name"] : "";
  $delivery_date = isset($_POST["delivery_date"]) ? $_POST["delivery_date"] : "";
  $container_amount = isset($_POST["container_amount"]) ? $_POST["container_amount"] : "";
  $delivery_weight = isset($_POST["delivery_weight"]) ? $_POST["delivery_weight"] : "";
  $Transport_method = isset($_POST["Transport_method"]) ? $_POST["Transport_method"] : "";
  $delivery_status = isset($_POST["delivery_status"]) ? $_POST["delivery_status"] : "";
  $site_maximum_capacity_t = isset($_POST["site_maximum_capacity_t"]) ? $_POST["site_maximum_capacity_t"] : "";
  $more_info = isset($_POST["more_info"]) ? $_POST["more_info"] : "";
  // if one of the mandatory data is empty go to noData page
if (empty($delivery_id) || empty($company_id) || empty($company_name) || empty($delivery_date) || empty($container_amount) || empty($Transport_method) || empty($delivery_status)) {
  // echo "Something is missing!!!";
 echo "Something is missing!";
 exit();
}

$sql2 =  "update deliveries set delivery_date=?, container_amount=?, delivery_weight=?, Transport_method=?, delivery_status=?, site_maximum_capacity_t=?, more_info=?  where delivery_id=?";
$stmt = mysqli_prepare($con, $sql2);
    // assign the variables to their right place
    mysqli_stmt_bind_param($stmt, 'siissisi', $delivery_date, $container_amount, $delivery_weight, $Transport_method, $delivery_status, $site_maximum_capacity_t, $more_info, $delivery_id);
    // execute the sql phrase above
    echo "test1";
    mysqli_stmt_execute($stmt);
    // closing the connection
    echo "test2";
    mysqli_close($con);
    echo "test3";
  
?>