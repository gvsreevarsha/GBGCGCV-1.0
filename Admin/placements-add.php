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
                        <div style="padding: 5px;">
                            <table align="center">
                                <?php $url="placements-edit_operations.php?year=".$year;?>
                                <form method="post"  action="<?php echo "$url";?>">
                                  <h2 class="col-xs-12"> Editing Event for Placement Dashboard </h2>
                                  <div class="col-xs-12"><hr class="bg-success text-white" style="border: 0;border-top: 2px solid #868686; margin: 20px 0;visibility:visible;"></div>
                                  <label  class="col-xs-12"><div class="col-xs-6">Date: </div><input class="col-xs-6" type="date" name="date" required/></label>
                                  <label  class="col-xs-12"><div class="col-xs-6">Name of the Company: </div><input class="col-xs-6" type="text" placeholder="Name of the company" name="company" required/></label>
                                  <label  class="col-xs-12"><div class="col-xs-6">CTC: </div><input class="col-xs-6" type="text" placeholder="Package" name="ctc" required/></label>
                                  <div class="col-xs-12 p-5">
                                    <input class="col-xs-2 col-xs-offset-5 p-2" type="submit" name="Add" value="Add" style="color: white; background-color: #2b3e4d;" />
                                  </div>                                  <div align="right" class="p-3">
                                    <?php $url="placements-display.php?year=".$year;?>
                                    <button  style="background-color: #2B3E4D;" class="btn"><a href="<?php echo $url;?>" style="color: white; text-decoration: none;">Back</a></button></div> 
                                  <div>&nbsp;</div>
                              </form>
                            </table> 
                        </div>
                        <div>&nbsp;</div>                     
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

