<?php require 'Adminheader.php'?>
<?php
if(isset($_GET["year"]))
  $year=$_GET["year"];
else
  $year=2020;
?>
<style type="text/css">
   tr.notice:nth-child(even) {background: #edf2f6; text-align: center;} 
   tr.notice {text-align: center;} 
   tr.notice-top {background-color: #2b3e4d; color: white;}
</style>
<body>
  <div class="row">
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3" style="background-color:#edf2f6;">
        <table class="col-xs-12 p-3" valign="center">            
            <tr>
                <td colspan="2" class="col-xs-6">
                    <div style="background-color: white; color: #868686;">
                        <div>&nbsp;</div>
                        <div align="center" style="color: black">Notice Board-Training&nbsp;<button><a style="color: #2B3E4D;" href="training-add.php" class="glyphicon glyphicon-plus p-2" name="Add"></a></button></div>
                        <div>&nbsp;</div>
                        <?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
                          <div name="message"><?php echo $_GET['msg']; ?> </div>
                        <?php } ?>
                        <div style="padding: 5px;">
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
          <td> <font face="Arial" class="p-4"><center>Options</center></font> </td>
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
                  <td class="p-4">
                    <button class="glyphicon glyphicon-pencil p-2" name="Edit" value="'.$row["SNo"].'"></button>
                    <button class="glyphicon glyphicon-trash p-2" name="Delete" value="'.$row["SNo"].'"></button>
                  </td>
                </form>
              </tr>';
    }
    $result->free();
}
                            ?>
                            </table> 
                        </div>
                        <div>&nbsp;</div>
                        <div align="right" class="p-3"><?php $url="Admindashboard.php?year=".$_GET["year"];?><button  style="background-color: #2B3E4D;" class="btn"><a href="<?php echo $url;?>" style="color: white; text-decoration: none;">Back</a></button></div>                     
                    </div>
                </td>
            </tr>
        </table>
    </div>
  </div>
</body>
<?php require 'Adminfooter.php'?>
