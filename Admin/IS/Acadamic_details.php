<?php
  $username = "root";
  $password = "";
  $database = "gcgc";
  $con = new mysqli("localhost", $username, $password, $database);
  $sql = mysqli_query($con, "SELECT * FROM academic_details WHERE user_id = '$usn'");
  //$row = mysqli_num_rows($sql);
  $rows=mysqli_fetch_assoc($sql);
?>
<style type="text/css">
     .content {
          padding: 0 18px;
          display: none;
          overflow: hidden;
          background-color: #ffffff;
        }
</style>

<div style="background-color:#edf2f6;">
    <div class="row" style="background-color:#edf2f6;">
      <div  class="container-fluid">
        <input type="text" name="userid" value="<?php echo $usn?>" style="visibility:hidden">
        <table class="col-sm-12" valign="center" borderColor="#edf2f6" cellpadding="20px;">
            <tr class="col-sm-12">
                <td width="33.33%">
                    <div class="btn-success col-sm-12" style="border-radius:10px; padding: 10px;">
                      <div style="color: black; ">
                        <h3><input type="text" size="5" name="SSC_percent" value="<?php echo $rows['SSC_percent'] ?>">%</h3>
                        <p>Tenth Percentage</p>
                      </div>
                    </div>
                </td>
                <td width="33.33%">
                    <div class="btn-warning col-sm-12" style="border-radius:10px; padding: 10px;">
                      <div style="color: black;">
                        <h3><input type="text" size="5" name="inter_percent" value="<?php echo $rows['inter_percent'] ?>">%</h3>
                        <p>Intermediate Percentage</p>
                      </div>
                    </div>
                </td>
                <td width="33.33%">
                    <div class=" btn-danger col-sm-12" style="border-radius:10px; padding: 10px;">
                      <div style="color: black;">
                        <h3><input type="text" size="5" name="b_tech_gpa" value="<?php echo $rows['b_tech_gpa'] ?>">GPA</h3>
                        <p>B.Tech Percentage</p>

                      </div>
                    </div>
                </td>
            </tr>
</table>
</div>
</div>
<a href="#" class="small-box-footer collapsible" >More info <i class="fas fa-arrow-circle-right"></i></a>
 <div class="content">
   <div class="row" style="background-color:#edf2f6;">
     <div  class="container-fluid">
    <table class="col-sm-12" valign="center" borderColor="#edf2f6" cellpadding="20px;">
            <tr class="col-sm-12">
                <td width="33.33%">
                    <div class=" btn-success col-sm-12" style="border-radius:10px; padding: 10px;">
                      <div style="color: black; ">
                        <h3><input type="text" name="Branch" value="<?php echo $rows['Branch'] ?>"></h3>
                        <p>Branch</p>
                      </div>
                    </div>
                </td>
                <td width="33.33%">
                    <div class=" btn-warning col-sm-12" style="border-radius:10px; padding: 10px;">
                      <div style="color: black;">
                        <h3><input type="text" name="pass_category" value="<?php echo $rows['pass_category'] ?>"></h3>
                        <p>pass category</p>
                      </div>
                    </div>
                </td>
                <td width="33.33%">
                    <div class=" btn-danger col-sm-12" style="border-radius:10px; padding: 10px;">
                      <div style="color: black;">
                        <h3><input type="text" name="section" value="<?php echo $rows['section'] ?>"></h3>
                        <p>section</p>
                      </div>
                    </div>
                </td>
            </tr>
        </table>
      </div>
      </div>
    </div>
  </div>

    <script>
  		var coll = document.getElementsByClassName("collapsible");
  		var i;

  		for (i = 0; i < coll.length; i++) {
    			coll[i].addEventListener("click", function() {
      		this.classList.toggle("active");
      		var content = this.nextElementSibling;
      		if (content.style.display === "block") {
        			content.style.display = "none";
      		} else {
      		  content.style.display = "block";
      		}
    			});
  		}
  	</script>
