<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'gcgc');

$sql="select * from are_amcat where Unique_Id='$usn'";
                      $result=mysqli_query($con,$sql);
                      $resultCheck=mysqli_num_rows($result);
                      $row=mysqli_fetch_assoc($result);

?>

  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <style>
    .zc-body {
      background-color: #fff;
    }

    .chart--container {
      width: 100%;
      height: 100%;
      min-height: 530px;
    }

    .zc-ref {
      display: none;
    }
  </style>



  <div id="myChar" class="chart--container">
  </div>
  <script>
    var myConfig = {
      type: 'radar',
      plot: {
        aspect: 'area',
        animation: {
          effect: 3,
          sequence: 1,
          speed: 700
        }
      },
      scaleV: {
        visible: false
      },
      scaleK: {
        values: '0:6:1',
        labels: ['Logical Ability','English Comprehension','Quantitative Ability','Automata', 'Automata Fix', 'Domain_1', 'Domain_2'],
        item: {
          fontColor: '#607D8B',
          backgroundColor: "white",
          borderColor: "#aeaeae",
          borderWidth: 1,
          padding: '5 10',
          borderRadius: 10
        },
        refLine: {
          lineColor: '#c10000'
        },
        tick: {
          lineColor: '#59869c',
          lineWidth: 2,
          lineStyle: 'dotted',
          size: 20
        },
        guide: {
          lineColor: "#607D8B",
          lineStyle: 'solid',
          alpha: 0.3,
          backgroundColor: "#c5c5c5 #718eb4"
        }
      },
      series: [{
          values: [<?php echo $row['1_Logical_Ability_900M']; ?>, <?php echo $row['2_English_Comprehension_900M']; ?>, <?php echo $row['3_Quantitative_Ability_900M']; ?>, <?php echo $row['4_Automata_100M']; ?>, <?php echo $row['5_Automata_Fix_100M']; ?>, <?php echo $row['6a_domain_1_900M']; ?>,<?php echo $row['6b_domain_2_900M']; ?>],
          text: 'farm'
        }
      ]
    };

    zingchart.render({
      id: 'myChar',
      data: myConfig,
      height: '100%',
      width: '100%'
    });
  </script>
