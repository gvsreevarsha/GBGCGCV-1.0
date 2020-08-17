<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'gcgc');

$sql="select * from ari where Unique_Id='$usn'";
                      $result=mysqli_query($con,$sql);
                      $resultCheck=mysqli_num_rows($result);
                      $row=mysqli_fetch_assoc($result);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
      var data = google.visualization.arrayToDataTable([
        ['Assesments', 'Score',{ role: 'style' }],
        ['AT1',  <?php echo $row['AT1_score']; ?> ,'blue' ],
        ['AT2',  <?php echo $row['AT2_score']; ?> ,'blue' ],
        ['AT3',  <?php echo $row['AT3_score']; ?> ,'blue' ],
        ['AT4',  <?php echo $row['AT4_score']; ?> ,'blue' ],
        ['AT5',  <?php echo $row['AT5_score']; ?> ,'blue' ],
        ['AT6',  <?php echo $row['AT6_score']; ?> ,'blue'],
        ['TT1',  <?php echo $row['TT1_percentage']; ?> ,'green'],
        ['TT2',  <?php echo $row['TT2_percentage']; ?> ,'green'],
        ['TT3',  <?php echo $row['TT3_percentage']; ?> ,'green' ],
        ['TT4',  <?php echo $row['TT4_percentage']; ?> ,'green' ],
        ['TT5',  <?php echo $row['TT5_percentage']; ?> ,'green' ],
        ['TT6',  <?php echo $row['TT6_percentage']; ?> ,'green'],
        ['TT7',  <?php echo $row['TT7_percentage']; ?> ,'green' ],
        ['TT8',  <?php echo $row['TT8_percentage']; ?> ,'green' ],
        ['DT1',  <?php echo $row['DT1_score']; ?> ,'orange' ],
        ['DT2',  <?php echo $row['DT2_score']; ?> ,'orange' ],
        ['DT3',  <?php echo $row['DT3_score']; ?> ,'orange' ],
        ['DT4',  <?php echo $row['DT4_score']; ?> ,'orange'],

      ]);

      var options = {
        title : 'ARI',
        vAxis: {title: 'Percentage'},
        hAxis: {title: 'Assesments'},
        seriesType: 'bars',
        legend: {position: 'none'},

    };

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
  <div align="center">
    <div style="background-color:#edf2f6;">



      <div class="col-sm-12 p-3" align="center" style="border-radius:10px; background-color:white; color: #868686;width:97%;">
        <div style="color: black;">
          <p><small>Assesment Report Internal (ARI)</small></p>
          <hr>
      <div id="chart_div" style="background-color:#edf2f6; width:100%; height: 60%;"></div>
  </div>
  </div>

    
  </div>
</div>
