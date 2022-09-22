<?php
#curdate() to show today date only

include 'conn.php';

$mysql = "select * from deliveries ";

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
    <title>Document</title>
    <style>
        body {
            margin-top: 100px;
        }

        input {
            width: 200px;
            height: 50px;
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .table td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
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
    </style>
</head>

<body>
    <div>

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
                <th>site_maximum_capacity_t</th>
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

                    <td><?php echo $row['site_maximum_capacity_t']; ?></td>
                    <td><button type="button" style="text-decoration:none; "><a href="deleterecord.php?delivery_id=<?php echo $row['delivery_id'];  ?>" style="text-decoration:none;">delete</a></button></td>







                </tr>

            <?php
                # end of while loop
            }
            ?>
        </table>
        <?php
        $result = mysqli_query($conn, 'SELECT SUM(container_amount) AS value_sum FROM deliveries  where delivery_date = curdate()  ');
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