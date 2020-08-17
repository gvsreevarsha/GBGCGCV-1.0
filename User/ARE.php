<div>
  <div class="row" style="background-color:#edf2f6;">
    <div  class="container-fluid">
      <table class="col-sm-12" valign="center" cellpadding="20px;">
        <tr class="col-sm-12">
          <td width="50%">
            <div class="col-sm-12" style="border-radius:10px; background-color:white; color: #868686; padding: 20px;">
              <div style="color: black;">
                <p><small>Cocubes-Analysis</small></p>
                <hr>
                 <?php  require ("ARE_COC.php");?>
              </div>
            </div>
          </td>
          <td width="50%">
            <div class="col-sm-12" style="border-radius:10px; background-color:white; color: #868686; padding: 20px;">
              <div style="color: black;">
                <p><small>Amcat-Analysis</small></p>
                <hr>
                <?php require "ARE_AMCAT.php"?>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
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
      labels: ['English','Quantitative','Analytical','Domain', 'Computer_Fundamentals', 'Coding', 'WET'],
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
        values: [<?php echo $rows['English']; ?>, <?php echo $rows['Quantitative']; ?>, <?php echo $rows['Domain']; ?>, <?php echo $rows['Computer_Fundamentals']; ?>, <?php echo $rows['Coding']; ?>, <?php echo $rows['WET']; ?>],
        text: 'farm'
      }
    ]
  };

  zingchart.render({
    id: 'myCh',
    data: myConfig,
    height: '100%',
    width: '100%'
  });
</script>
