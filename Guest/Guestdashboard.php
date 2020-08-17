<?php require 'Guestheader.php'?>
<?php
if(isset($_POST['year']))
{
$year=$_POST['year'];
}
else
{
  $year=$_GET["year"];
}
$con = new mysqli("localhost", "root", "", "gcgc");
$sql = mysqli_query($con, "SELECT * FROM `academic_details` WHERE `pass_category`='A' AND `YOP`='$year' UNION SELECT * FROM `academic_details` WHERE `pass_category` LIKE 'B%' AND `YOP`='$year'");
$row1 = mysqli_num_rows($sql);
if($year==2020)
{
$sql=mysqli_query($con, "SELECT * FROM `cdt2020`,`academic_details` WHERE PIU='Y' and `YOP`='$year' GROUP BY `userid`");
$row2 = mysqli_num_rows($sql);
$sql=mysqli_query($con, "SELECT * FROM `companies`");
$row4 = mysqli_num_rows($sql);
$sql=mysqli_query($con, "SELECT * FROM `cdt2020` WHERE PIU='Y'");
$row8 = mysqli_num_rows($sql);
$sql = mysqli_query($con, "SELECT * FROM `index_status`");
$row5=mysqli_fetch_assoc($sql);
}
else {
  $row2=0;
  $row4=0;
  $row8=0;
$row5["highest package"]=$row5["least_package"]=$row5["average_package"]="0LPA";
}
$row3=$row1-$row2;
?>
<body>
  <script type="text/javascript">
  function submitform()
{
document.forms["myform"].submit();

}
</script>
  <div class="row">
    <?php require "Guestleft.php"?>
    <div class="col-xs-6 col-md-10 p-3 back" >
        <form id="myform" class="dropdown" method="post" action="Guestdashboard.php" onchange="submitform()">
            <label for="year"><h2>Glimpse-</h2></label>
            <select name="year" id="year">
                <option value="2020" class="hidden"><?php echo $year;?></option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
        </select>
        </form>

        <hr class="bg-success text-white">
        <br>
        <table class="col-xs-12 p-3" valign="center">
            <tr>
                <td class="col-xs-3">
                    <div class="runningtext">
                        <div><small>Eligible</small></div>
                        <br>
                        <div align="right" class="spltext">
                            <?php echo $row1;?>
                        </div>
                    </div>
                </td>
                <td class="col-xs-3">
                    <div  class="runningtext">
                        <div><small>Placed</small></div>
                        <br>
                        <div align="right" class="spltext">
                            <?php echo $row2;?>
                        </div>
                    </div>
                </td>
                <td class="col-xs-3">
                    <div  class="runningtext">
                        <div><small>Not Placed</small></div>
                        <br>
                        <div align="right" class="spltext">
                            <?php echo $row3;?>
                        </div>
                    </div>
                </td>
                <td class="col-xs-3">
                    <div  class="runningtext">
                        <div><small>Total Drives</small></div>
                        <br>
                        <div align="right" class="spltext">
                            <?php echo $row4;?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="col-xs-3">
                    <div  class="runningtext">
                        <div><small>Highest Package</small></div>
                        <br>
                        <div align="right" class="spltext">
                            <?php echo $row5["highest package"];?>
                        </div>
                    </div>
                </td>
                <td class="col-xs-3">
                    <div class="runningtext">
                        <div><small>Average Package</small></div>
                        <br>
                        <div align="right" class="spltext">
                            <?php echo $row5["average_package"];?>
                        </div>
                    </div>
                </td>
                <td class="col-xs-3">
                    <div class="runningtext">
                        <div><small>Least Package</small></div>
                        <br>
                        <div align="right" class="spltext">
                            <?php echo $row5["least_package"];?>
                        </div>
                    </div>
                </td>
                <td class="col-xs-3">
                    <div  class="runningtext">
                        <div><small>Total Number of Offers</small></div>
                        <br>
                        <div align="right" class="spltext">
                            <?php echo $row8;?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" class="col-xs-6">
                    <div class="runningtext">
                        <div>&nbsp;</div>
                        <div align="center" class="subheading">Notice Board-Training&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>
                            <table align="center">
                                <?php
$mysqli = new mysqli("localhost", "root", "", "gcgc");
$query = "SELECT * FROM `training_dash` WHERE `YOP`='$year' LIMIT 5";
echo '<table width="100%"" align="center">
      <tr class="notice-top">
          <td> <font face="Arial"><center>From</center></font> </td>
          <td> <font face="Arial"><center>To</center></font> </td>
          <td> <font face="Arial"><center>Name of the Programme</center></font> </td>
          <td> <font face="Arial"><center>Status</center></font> </td>
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
                  <td>'.$row["from_date"].'</td>
                  <td>'.$row["to_date"].'</td>
                  <td>'.$row["name_of_the_program"].'</td>
                  <td>'.$status.'</td>
              </tr>';
    }
    $result->free();
}
                            ?>
                            </table>
                        </div>
                        <div>&nbsp;</div>
                        <div align="right"><?php $url="training-display.php?year=".$year;?><a href="<?php echo $url?>"  class="next">More...&emsp;</a></div>
                    </div>
                </td>
                <td colspan="2" class="col-xs-6">
                    <div class="runningtext">
                        <div>&nbsp;</div>
                        <div align="center" class="subheading">Notice Board-Placement&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>
                            <table align="center">
                                <?php
$query = "SELECT * FROM placements_dash LIMIT 5";
$sno=1;
echo '<table width="100%" align="center">
      <tr class="notice-top">
          <td> <font face="Arial"><center>SNo</center></font> </td>
          <td> <font face="Arial"><center>Date</center></font> </td>
          <td> <font face="Arial"><center>Company Name</center></font> </td>
          <td> <font face="Arial"><center>CTC</center></font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $sno;
        $field2name = $row["Date"];
        $field3name = $row["Company_name"];
        $field4name = $row["CTC"];
        echo '<tr class="notice">
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
              </tr>';
        $sno+=1;
    }
    $result->free();
}
                                ?>
                            </table>
                        </div>
                        <div>&nbsp;</div>
                        <div align="right"><?php $url="placements-display.php?year=".$year;?><a href="<?php echo $url?>" class="next">More...&emsp;</a></div>
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
<?php require 'Guestfooter.php'?>
