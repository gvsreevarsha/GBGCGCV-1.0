<?php require 'Adminheader.php'?>
<?php
if(isset($_GET["year"]))
  $year=$_GET["year"];
else
  $year=2020;
?>
<body>
  <div class="row">
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3 back">
        <table class="col-xs-12 p-3" valign="center">            
            <tr>
                <td colspan="2" class="col-xs-6">
                    <div class="runningtext">
                        <div>&nbsp;</div>
                        <div align="center" class="subheading">Notice Board-Training&nbsp;<button class="btn btn-blue"><?php $url="training-display_edit.php?year=".$_GET["year"];?><a href="<?php echo "$url";?>" class="nodec">Edit</a></button></div>
                        <div>&nbsp;</div>
                        <?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
                          <div name="message"><?php echo $_GET['msg']; ?> </div>
                        <?php } ?>
                        <div>
                            <table align="center">
                                <?php
$mysqli = new mysqli("localhost", "root", "", "gcgc");
$year=$_GET["year"];
$query = "SELECT * FROM `training_dash` where `YOP`='$year'";
echo '<table width="100%"" align="center">
      <tr class="notice-top">
          <td> <font face="Arial" class="p-4"><center>From</center></font> </td>
          <td> <font face="Arial" class="p-4"><center>To</center></font> </td>
          <td> <font face="Arial" class="p-4" align="left">&emsp;Name of the Programme</font> </td>
          <td> <font face="Arial" class="p-4" align="left">&emsp;Status</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $date=date("Y-m-d");
        if($row["from_date"]>$date)
          $status="To Be Scheduled";
        else if($row["from_date"]<$date && $row["to_date"]>$date)
          $status="On-Going";
        else
          $status="Completed";
        echo '<tr class="notice">
                <form method="POST" action="training_op.php">
                  <td class="p-4">'.$row["from_date"].'</td>
                  <td class="p-4">'.$row["to_date"].'</td>
                  <td class="p-4" align="left">'.$row["name_of_the_program"].'</td>
                  <td class="p-4" align="left">'.$status.'</td>
                </form>
              </tr>';
    }
    $result->free();
}
                            ?>
                            </table> 
                        </div>
                        <div>&nbsp;</div>
                        <div align="right" class="p-3"><?php $url="Admindashboard.php?year=".$_GET["year"];?><button  class="btn btn-blue"><a href="<?php echo $url;?>" class="nodec">Back</a></button></div>                     
                    </div>
                </td>
            </tr>
        </table>
    </div>
  </div>
  <script type="text/javascript">
      function changebut(element) {
          document.getElementById("dropdownMenuButton").innerText=element;
          document.getElementById("dropdownMenuButton").value=element;
      }
  </script>
</body>
<?php require 'Adminfooter.php'?>
