<?php
session_start();
if (!isset($_SESSION["name"])) { // if session is not set, go to the admin login page
    // $_SESSION["returnSite"] = "./main.php#first";
    header("Location:../index.html");
    exit();
}
?>

<?php
#curdate() to show today date only

include '../conn/conn.php';

$mysql = "select * from deliveries  where delivery_date = curdate() ";

$result = $connection->query($mysql);
if ($result->num_rows > 0) {
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  


  <title><?php echo  $_SESSION['name']; ?> | Cool Finland</title>
  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {

--contrast-color: #F2E527;
--light-color: #D2A9D9;
--primary-color: #D96AA7;
--secondary-color: #422C73;
--complimentary-color: #88BFB5;
--contrast-color: #F2E527;

}

.container {
  min-height: 100vh;
  font-family: Montserrat, sans-serif;
}

nav a {
    font-size: 40px;
    color: black;
    text-decoration: none;
    padding: 20px;
    text-align: center;
}

nav {
    position: fixed;
    left: 0;
    z-index: 50;
    display: flex;
    justify-content: space-around;
    flex-direction: column;
    height: 100vh;
    background-color: #AAFFA7 ;
}

section {
    position: absolute;
    top: 0;
    height: 100vh;
    width: 0;
    opacity: 0;
    transition: all ease-in .5s;
    display: flex;
    justify-content: center;
    align-items: center;
} 

section h1 {
    color: #fff;
    font-size: 50px;
    text-transform: uppercase;
    opacity: 0;
}

/* Styles applied on trigger */
section:target {
    opacity: 1;
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
}

section:target h1 {
    opacity: 0;
    animation: 2s fadeIn forwards .5s;
}

#first {
  background:#EBFFD4  ;
}
#second {
    background: #EBFFD4   ;
}

#third {
    background: var(--contrast-color);
}

#fourth {
    background: var(--light-color);
}

@keyframes fadeIn {
    100% { opacity:1 }
}

  </style>
</head>
<body>
<nav>
   <a href="#first"><i class="fa fa-home fa-fw"></i></a>
   <a href="#second"><i class="fa fa-search" aria-hidden="true" onclick="window.location.href='searchBydate.php'"></i></a>
   <a href="#third"><i class="fa fa-sign-out" aria-hidden="true"onclick="window.location.href='./logout.php'"></i></a>

 </nav>
  
<div class= 'container'> 
  <section id= 'first'>
    <h1>First</h1>

    <div class="container">
    <div class="tnt">
        <h5><b>Welcome&nbsp;&nbsp; </b></h5>
		<h4 style="color:green"><?php echo  $_SESSION['name']; ?></h4>
        <div class="col1">

        <input type="text" class="input" id="myInput" onkeyup='tableSearch()' placeholder="Search by name..">

        <table class="table  " id="myTable">
            <tr style="border:solid; ">
                <th>delivery_id</th>
                <th>company_id</th>
                <th>company_name</th>
                <th>delivery_date</th>
                <th>container_amount</th>
                <th>delivery_weight</th>
                <th>delivery_status</th>
                <th>delete</th>




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
                    

                    <td><button type="button" style="text-decoration:none; "><a href="deleterecord.php?delivery_id=<?php echo $row['delivery_id'];  ?>" style="text-decoration:none;">delete</a></button></td>







                </tr>

            <?php
                # end of while loop
            }
            ?>
        </table>
        <?php
        $result = mysqli_query($connection, 'SELECT SUM(container_amount) AS value_sum FROM deliveries where delivery_date = curdate()  ');
        $row = mysqli_fetch_assoc($result);
        $sum = $row['value_sum'];
        echo 'Capacity: ', $sum = $row['value_sum'];




        ?>
        </div>
        <div class="col2">
            <?php

            include 'chart.php';
            ?>

        </div>
        </div>
        </div>

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
    
  </section>
  
  <section id= 'second'>
  </section>
  
 <section id= 'third'>
            <?php require '../main.php#first'; ?>
  </section>
  
 <section id= 'fourth'>
   <h1>Fourth</h1>
  </section>
</div>

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