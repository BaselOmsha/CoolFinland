<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['company_name', 'container_amount'],
        <?php
        include 'conn.php';




        $mysql = "SELECT * FROM deliveries where delivery_date = curdate()  ";
        $do = mysqli_query($conn, $mysql);


        while ($result = mysqli_fetch_assoc($do)) {

          echo "['" . $result['company_name'] . "'," . $result['container_amount'] . "],";
        }

        ?>



      ]);

      var options = {
        title: 'Daily capacity',
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>

</html>