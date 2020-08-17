<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'gcgc');
$sql = mysqli_query($con,"SELECT * FROM `academic_details` WHERE `user_id`='$usn'");
$rows=mysqli_fetch_assoc($sql);
$yop=$rows["YOP"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='SST1' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$s1=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='SST2' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$s2=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='CRT1' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$c1=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='CRT2' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$c2=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='CRT3' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$c3=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT1' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$t1=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT2' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$t2=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT3' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$t3=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT4' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$t4=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT5' AND unique_id='$usn'");
$rows=mysqli_fetch_assoc($sql);
$t5=$rows["att"];
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='SST2' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$as2=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $as2+=$rows["att"];
$as2=$as2/$row;
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='SST1' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$as1=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $as1+=$rows["att"];
$as1=$as1/$row;
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='CRT1' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$ac1=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $ac1+=$rows["att"];
$ac1=$ac1/$row;
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='CRT2' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$ac2=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $ac2+=$rows["att"];
$ac2=$ac2/$row;
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='CRT3' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$ac3=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $ac3+=$rows["att"];
$ac3=$ac3/$row;
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT1' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$at1=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $at1+=$rows["att"];
$at1=$at1/$row;
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT2' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$at2=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $at2+=$rows["att"];
$at2=$at2/$row;

$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT3' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$at3=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $at3+=$rows["att"];
$at3=$at3/$row;
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT4' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$at4=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $at4+=$rows["att"];
$at4=$at4/$row;
$sql = mysqli_query($con,"SELECT * FROM `ita` WHERE `Program`='TT5' AND `YOP`='$yop'");
$row = mysqli_num_rows($sql);
$at5=0.0;
while($rows=mysqli_fetch_assoc($sql))
    $at5+=$rows["att"];
$at5=$at5/$row;

?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
          ['Assessments', 'Attendance', 'Average Attendance'],
          ['SST1',  <?php echo $s1; ?>,    <?php echo $as1; ?> ],
          ['SST2',  <?php echo $s2; ?>,   <?php echo $as2; ?> ],
          ['TT1',   <?php echo $t1; ?>,     <?php echo $at1; ?>  ],
          ['TT2',   <?php echo $t2; ?>,     <?php echo $at2; ?>  ],
          ['TT3',   <?php echo $t3; ?>,     <?php echo $at3; ?>  ],
          ['TT4',   <?php echo $t4; ?>,     <?php echo $at4; ?>  ],
          ['TT5',   <?php echo $t5; ?>,     <?php echo $at5; ?>  ],
          ['CRT1',  <?php echo $c1; ?>,   <?php echo $ac1; ?>  ],
          ['CRT2',  <?php echo $c2; ?>,    <?php echo $ac2; ?>  ],
          ['CRT3',  <?php echo $c3; ?>,     <?php echo $ac3; ?>  ]

        ]);

        var options = {


          vAxis: {title: 'Attendance'},
          hAxis: {title: 'Program'},
          seriesType: 'bars',
          colors: ['red','green']
          };

        var chart = new google.visualization.ComboChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
    </script>

<div align="center">
  <div style="background-color:#edf2f6;">
  <div class="col-sm-12 p-3" align="center" style="border-radius:10px; background-color:white; color: #868686;width:97%;">
      <div style="color: black;">
        <p><small>Integrated training attendance(ITA)</small></p>
        <hr>
    <div id="chart" style="background-color:#edf2f6; width:100%; height: 60%;"></div>
</div>
</div>


</div>
</div>
