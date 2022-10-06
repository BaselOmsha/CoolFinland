<?php
include "../conn/conn.php";
?>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['gauge']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {

            var data = google.visualization.arrayToDataTable([
            ['total_weight', 'total_required'],

            <?php
            #the chart code is in the header  thats how we get it in html body <div id="piechart" style="width: 900px; height: 500px;"></div>
            $date = isset($_POST["delivery_date"]) ? $_POST["delivery_date"] : "";
            $mysql = "SELECT SUM(delivery_weight) as total_weight, 50 as total_required FROM deliveries where delivery_date = ?";

            try {
            $stmt = mysqli_prepare($connection, $mysql);
            mysqli_stmt_bind_param($stmt, 's', $date);
            mysqli_stmt_execute($stmt);
            $print = mysqli_stmt_get_result($stmt);

            } catch (Exception $e) {
            print "Error";
            } 

            while($row = mysqli_fetch_assoc($print)) {
            // echo "['Available capacity out of 50T', " . $row["total_required"] - $row["total_count"] . "],";
            echo "['Reserved by clients. in tons', " . $row["total_weight"] . "],";
            } 

            ?>
            ]);

            var options = {
            width: 500, height: 320,
            redFrom: 45, redTo: 50,
            yellowFrom:35, yellowTo: 45,
            greenFrom: 0, greenTo:10,
            minorTicks: 10,
            max:50
            };
   
            var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
            chart.draw(data, options);

            }
</script>
            <div id="chart_div"></div>