
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
    $con = mysqli_connect("db", "root", "password", "coolFinland") or die ("Connection failed!");
    $sql = "SELECT * from deliveries";
    $result = mysqli_query($con,$sql) or die("Record failed to save");
    $output = mysqli_fetch_assoc($result);

    ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="card mt-5">
            <div class="card-header">
                <h4>Update Delivery details</h4>
            </div>
            <div class="card-body">

                <form action="submit.php" method="POST" enctype="multipart/form-data">
                   <select class= "" name="">
                       <option value= "delivery_id" disabled> SELECT A Value</option>
                       <option value= '<?php echo $output['delivery_id']?>'>1 </option>
                   </select>
                        <div class= company_id>
                        <label for="">Company Id</label>
                        <input type="number" name="company_id" class="form-control" value='<?php echo $output['company_id']?>' >
                        </div>
                        <div class= company_name>
                        <label for="">Company name</label>
                        <input type="text" name="company_name" class="form-control" value='<?php echo $output['company_name']?>' >
                        </div>
                        <div class= delivery_date>
                        <label for="">Delivery date</label>
                        <input type="date" name="delivery_date" class="form-control" value='<?php echo $output['delivery_date']?>' >
                        </div>
                        <div class= container_amount>
                        <label for="">Container amount</label>
                        <input type="number" name="container_amount" class="form-control" value='<?php echo $output['container_amount']?>' >
                        </div>
                        <div class= delivery_weight>
                        <label for="">Delivery weight</label>
                        <input type="number" name="delivery_weight" class="form-control" value='<?php echo $output['delivery_weight']?>' >
                        </div>
                        <div class= delivery_status>
                        <label for="">Delivery status</label>
                        <input type="text" name="delivery_status" class="form-control" value='<?php echo $output['delivery_status']?>' >
                        </div>
                        <div class= site_maximum_capacity_t>
                        <label for="">Max capacity</label>
                        <input type="number" name="site_maximum_capacity_t" class="form-control" value='<?php echo $output['site_maximum_capacity_t']?>' >
                        </div>
                        <div class= more_info>
                        <label for="">More Info</label>
                        <input type="text" name="more_info" class="form-control" value='<?php echo $output['more_info']?>' >
                        </div>
                        <div class="form-group mb-3">
                        <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                    </div> 

 <!--                   <div class="company_id">
                       <option value= "" disabled> SELECT A Value</option>
                       <option value= '<#?php echo $output['company_id']?>'> </option>
                   </div>
                   <div class="company_name">
                       <option value= "" disabled> SELECT A Value</option>
                       <option value= '<#?php echo $output['company_name']?>'> </option>
                   </div>
                   <div class="delivery_date">
                       <option value= "" disabled> SELECT A Value</option>
                       <option value= '<#?php echo $output['delivery_date']?>'> </option>
                   </div>
                   <div class="container_amount">
                       <option value= "" disabled> SELECT A Value</option>
                       <option value= '<#?php echo $output['container_amount']?>'> </option>
                   </div>
                   <div class="delivery_weight">
                       <option value= "" disabled> SELECT A Value</option>
                       <option value= '<#?php echo $output['delivery_weight']?>'> </option>
                   </div>
                   <div class="delivery_status">
                       <option value= "" disabled> SELECT A Value</option>
                       <option value= '<#?php echo $output['delivery_status']?>'> </option>
                   </div>
                   <div class="site_maximum_capacity_t">
                       <option value= "" disabled> SELECT A Value</option>
                       <option value= '<#?php echo $output['site_maximum_capacity_t']?>'> </option>
                   </div>
                   <div class="form-control">
                       <option value= "" disabled> SELECT A Value</option>
                       <option value= '<#?php echo $output['form-control']?>'> </option>
                   </div>
                   <div class="form-group mb-3">
                        <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                    </div> 
                    -->
                   

                   
                   <!--  <div class="form-group mb-3">
                        <label for="">Delivery ID</label>
                        <input type="number" name="delivery_id" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Comapany Id</label>
                        <input type="number" name="company_id" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Company name</label>
                        <input type="text" name="company_name" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Delivery date</label>
                        <input type="date" name="delivery_date" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Container amount</label>
                        <input type="number" name="container_amount" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Delivery weight</label>
                        <input type="number" name="delivery_weight" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Delivery status</label>
                        <input type="text" name="delivery_status" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Max capacity</label>
                        <input type="number" name="site_maximum_capacity_t" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">More info</label>
                        <input type="text" name="more_info" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                    </div> -->
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
