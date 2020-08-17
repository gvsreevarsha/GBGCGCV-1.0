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
                <td colspan="2" class="col-xs-12">
                    <div style="background-color: white; color: #868686;">
                        <div>&nbsp;</div>
                        <div align="center" style="color: black">Notice Board-Placement&nbsp;<button class="btn" style="background-color: #2B3E4D;"><?php $url="placements-display_edit.php?year=".$year;?><a href="<?php echo "$url";?>" style="color: white;">Edit</a></button></div>
                        <div>&nbsp;</div>
                        <?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
                          <div name="message"><?php echo $_GET['msg']; ?> </div>
                        <?php } ?>
                        <div style="padding: 5px;">
                            <table align="center">
                              <?php
$mysqli = new mysqli("localhost", "root", "", "gcgc");
$query = "SELECT * FROM placements_dash";
$sno=1;
echo '<table width="100%" align="center"> 
      <tr class="notice-top"> 
          <td> <font face="Arial" class="p-4"><center>SNo</center></font> </td> 
          <td> <font face="Arial" class="p-4"><center>Date</center></font> </td> 
          <td> <font face="Arial" class="p-4"> Company Name</font> </td> 
          <td> <font face="Arial" class="p-4"> CTC</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $sno;
        $field2name = $row["Date"];
        $field3name = $row["Company_name"];
        $field4name = $row["CTC"];
        echo '<tr class="notice"> 
                <form method="POST" action="placements_op.php">
                  <td class="p-4">'.$field1name.'</td> 
                  <td class="p-4">'.$field2name.'</td> 
                  <td class="p-4" align="left"> '.$field3name.'</td> 
                  <td class="p-4" align="left"> '.$field4name.'</td> 
                </form>
              </tr>';
        $sno+=1;
    }
    $result->free();
}
                            ?>
                            </table> 
                        </div>
                        <div>&nbsp;</div> 
                        <div align="right" class="p-3"><?php $url="Admindashboard.php?year=".$year;?><button  style="background-color: #2B3E4D;" class="btn"><a href="<?php echo $url;?>" style="color: white; text-decoration: none;">Back</a></button></div>                  
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
