
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php
    include "../conn/conn.php";
    // $con = mysqli_connect("db", "root", "password", "coolFinland") or die ("Connection failed!");
    // $sql = "SELECT * from deliveries";
    // $result = mysqli_query($con,$sql) or die("Record failed to save");
    // $output = mysqli_fetch_assoc($result);
    $delivery = 1;
    $sql = "select * from deliveries where delivery_id=?";
    $stmt = mysqli_prepare($connection, $sql); //Prepare statment prevent sql injection. Highly recommended!
    mysqli_stmt_bind_param($stmt, 'i', $delivery);
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

                <form action="./submit.php" method="POST" enctype="multipart/form-data">
                   <!-- <select class= "" name="">
                       <option value= "delivery_id" disabled> SELECT A Value</option>
                       <option value= '</option>
                    </select>     -->
                       <div class= delivery_id>
                        <label for="">Delivery Id</label>
                        <input type="number" name="delivery_id" class="form-control" value='<?php print $output->delivery_id;?>' readonly>
                        </div>
                   
                        <div class= company_id>
                        <label for="">Company Id</label>
                        <input type="number" name="company_id" class="form-control" value='<?php print $output->company_id;?>' readonly>
                        </div>
                        <div class= company_name>
                        <label for="">Company name</label>
                        <input type="text" name="company_name" class="form-control" value='<?php print $output->company_name;?>' readonly>
                        </div>
                        <div class= delivery_date>
                        <label for="">Delivery date</label>
                        <input type="date" name="delivery_date" class="form-control" value='<?php print $output->delivery_date;?>' >
                        </div>
                        <div class= container_amount>
                        <label for="">Container amount</label>
                        <input type="number" name="container_amount" class="form-control" value='<?php print $output->container_amount;?>' >
                        </div>
                        <div class= delivery_weight>
                        <label for="">Delivery weight</label>
                        <input type="number" step="0,01" name="delivery_weight" class="form-control" value='<?php print $output->delivery_weight;?>' >
                        </div>
                        <div class= Transport_method>
                        <label for="">Trasporation Method</label>
                        <input type="text" name="Transport_method" class="form-control" value='<?php print $output->Transport_method;?>' >
                        </div>
                        <div class= delivery_status>
                        <label for="">Delivery status</label>
                        <input type="text" name="delivery_status" class="form-control" value='<?php print $output->delivery_status;?>' >
                        </div>
                        <div class= site_maximum_capacity_t>
                        <label for="">Max capacity</label>
                        <input type="number" name="site_maximum_capacity_t" class="form-control" value='<?php print $output->site_maximum_capacity_t;?>' >
                        </div>
                        <div class= more_info>
                        <label for="">More Info</label>
                        <input type="text" name="more_info" class="form-control" value='<?php print $output->more_info;?>' >
                        </div>
                        <div class="form-group mb-3">
                        <input type='submit' name='submit' value='Update Data' class="btn btn-primary">
                    </div> 
                    </form>
                    <?php
                    mysqli_close($con);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>