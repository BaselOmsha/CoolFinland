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
        ['total_count', 'total_required', ],
        <?php
        #the chart code is in the header  thats how we get it in html body <div id="piechart" style="width: 900px; height: 500px;"></div>

        include 'conn.php';

        $mysql = "SELECT SUM(container_amount) as total_count, 50 total_required FROM deliveries where delivery_date = curdate()  ";

        $do = mysqli_query($conn, $mysql);


        while ($row = mysqli_fetch_assoc($do)) {


          echo "['Available', " . $row["total_required"] - $row["total_count"] . "],";
          echo "['Reserved', " . $row["total_count"] . "],";
        }
        ?>




      ]);

      var options = {
        title: 'Daily capacity',
        legend: {
          position: 'bottom',

        },

        pieHole: 0.4,
        pieStartAngle: 270,
        slices: [{}, {
          offset: 0.09
        }, ],
        'width': 400,
        'height': 400,
        colors: ['#74E29B', '#F36767'],





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