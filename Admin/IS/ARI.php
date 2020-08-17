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
        ['DT1',  <?php echo $row['DT1_score']; ?> ,'red' ],
        ['DT2',  <?php echo $row['DT2_score']; ?> ,'red' ],
        ['DT3',  <?php echo $row['DT3_score']; ?> ,'red' ],
        ['DT4',  <?php echo $row['DT4_score']; ?> ,'red'],

      ]);

      var options = {
        title : 'ARI',
        vAxis: {title: 'Score'},
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
      <table border="1">
        <tr>
    			<td> </td>
    			<td>1</td>
    			<td>2</td>
    			<td>3</td>
    			<td>4</td>
    			<td>5</td>
    			<td>6</td>
    			<td>7</td>
    			<td>8</td>
    		</tr>
		<tr style="background-color:#ffffff;">
			<td>AT</td>
			<td><input type="text" size="2" name="at1" value="<?php echo $row['AT1_score']; ?>"</td>
			<td><input type="text" size="2" name="at2" value="<?php echo $row['AT2_score']; ?>"</td>
			<td><input type="text" size="2" name="at3" value="<?php echo $row['AT3_score']; ?>"</td>
			<td><input type="text" size="2" name="at4" value="<?php echo $row['AT4_score']; ?>"</td>
			<td><input type="text" size="2" name="at5" value="<?php echo $row['AT5_score']; ?>"</td>
			<td><input type="text" size="2" name="at6" value="<?php echo $row['AT6_score']; ?>"</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>TT</td>
			<td><input type="text" size="2" name="tt1" value="<?php echo $row['TT1_percentage']; ?>"</td>
			<td><input type="text" size="2" name="tt2" value="<?php echo $row['TT2_percentage']; ?>"</td>
			<td><input type="text" size="2" name="tt3" value="<?php echo $row['TT3_percentage']; ?>"</td>
			<td><input type="text" size="2" name="tt4" value="<?php echo $row['TT4_percentage']; ?>"</td>
			<td><input type="text" size="2" name="tt5" value="<?php echo $row['TT5_percentage']; ?>"</td>
			<td><input type="text" size="2" name="tt6" value="<?php echo $row['TT6_percentage']; ?>"</td>
			<td><input type="text" size="2" name="tt7" value="<?php echo $row['TT7_percentage']; ?>"</td>
			<td><input type="text" size="2" name="tt8" value="<?php echo $row['TT8_percentage']; ?>"</td>
		</tr>
		<tr style="background-color:#ffffff;" >
			<td>DT</td>
			<td><input type="text" size="2" name="dt1" value="<?php echo $row['DT1_score']; ?>"</td>
			<td><input type="text" size="2" name="dt2" value="<?php echo $row['DT2_score']; ?>"</td>
			<td><input type="text" size="2" name="dt3" value="<?php echo $row['DT3_score']; ?>"</td>
			<td><input type="text" size="2" name="dt4" value="<?php echo $row['DT4_score']; ?>"</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
  </div>
  </div>


  </div>
</div>
