<?php require ("userheader.php");?>
<div style="background-color: #edf2f6">
  <h3 align="middle"><b>Personal Details<b></h3>
<?php
$dbhost="localhost:3307";
  $conn=new mysqli("localhost","root","","GCGC");
?>
<div class="row" >


<br>
<h4><b>
<?php

  $sql1="SELECT * FROM personal_details_mdb WHERE user_id='$usn'";
  $result1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_array($result1);
  $sql2="SELECT * FROM academic_details WHERE user_id='$usn'";
  $result2=mysqli_query($conn,$sql2);
  $row2=mysqli_fetch_array($result2);


?>
</b></h4>


<br></br>





          <div class="form-group col-md-4">

            <label for="" style="color: black">Roll No</label>

     <input type="text" id="MainContent_lblgetregistrationnumber" name="id" placeholder="Roll No" class="form-control" style="color:#303030" value="<?php echo $usn; ?>" readonly="true">

          </div>

          <div class="form-group col-md-4">

            <label for="" style="color: black">Campus</label>

     <input type="text" id="MainContent_lblstudentfullname" name="sph" placeholder="Student Phone Number" class="form-control" style="color:#303030" value="<?php
                      echo "Bengaluru"; ?>" readonly="true">

          </div>
          <div class="form-group col-md-4">

            <label for="" style="color: black">College</label>

       <input type="text" id="MainContent_lblemail" name="semail" placeholder="Student Email ID" class="form-control" style="color:#303030" value="<?php
                      echo "GST"; ?>" readonly="true">

            <!--          <span id="MainContent_RequiredFieldValidator6" style="color:Red;display:none;">* Select date</span>-->

               </div>

               <div class="form-group col-md-4">
            <label for="" style="color: black">Batch</label>
        <!--   <span id="MainContent_lblstudentfullname" class="form-control" style="color:black"  readonly="true"> -->

 <input type="text" id="MainContent_lblstudentfullname" name="pemail" placeholder="Parent Mail ID" class="form-control" style="color: #303030"value="<?php
                      echo $row2['YOP'] ?>" readonly="true">
          </div>

          <div class="form-group col-md-4">

            <label for="" style="color: black">Degree</label>

  <input type="text" name="pph" placeholder="Parent Mobile Number" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php
                       echo "UG"; ?>" readonly="true">
          </div>

		   <div class="form-group col-md-4">

            <label for="" style="color: black">Program</label>

          <input type="text" name="land" placeholder="Land Mark" id="MainContent_lblemail" class="form-control" style="color:#303030" value="<?php
                      echo $row2['Program']; ?>" readonly="true">

          </div>



           <div class="form-group col-md-4">

            <label for="" style="color: black">Branch</label>

              <input type="text" name="dist" placeholder="District" id="MainContent_lblemail" class="form-control" style="color:#303030" value="<?php
                      echo  $row2['Branch'] ?>" readonly="true">
          </div>

      <div class="form-group col-md-4">

            <label for="" style="color: black">Semester</label>

       <input type="text" name="city" placeholder="City" id="MainContent_lblemail" class="form-control" style="color:#303030" value="<?php
                      echo "UG"; ?>" readonly="true">
          </div>
          <div class="form-group col-md-4">

            <label for="" style="color: black">Section</label>
 <input type="text" name="state" placeholder="State" id="MainContent_lblemail" class="form-control" style="color:#303030" value="<?php
                      echo $row2['section'] ?>" readonly="true">

          </div>


          <div class="form-group col-md-4">

            <label for="" style="color: black">First Name</label>
 <input type="text" name="state" placeholder="State" id="MainContent_lblemail" class="form-control" style="color:#303030" value="<?php
                      echo $row1['first_name'] ?>" readonly="true">

          </div>

              <div class="form-group col-md-4">

            <label for="" style="color: black">Middle Name</label>

    <input type="text" name="coun" placeholder="Middle Name" id="MainContent_lblfathername" class="form-control" style="color:#303030" value="<?php
                      echo $row1['middle_name'] ?>" readonly="true">

          </div>

               <div class="form-group col-md-4" readonly="true">

            <label for="" style="color: black">Last Name</label>

             <input type="text" name="pin" placeholder="Last Name" id="MainContent_lblmothername" class="form-control" style="color:#303030" value="<?php
                      echo $row1['last_name'] ?>" readonly="true">

          </div>
          <div class="form-group col-md-4">

            <label for="" style="color: black">DOB</label>

             <input type="text" name="pin" placeholder="Last Name" id="MainContent_lblmothername" class="form-control" style="color:#303030" value="<?php
                      echo $row1['DOB'] ?>" readonly="true">

          </div>
          <div class="form-group col-md-4">
            <b>Gender</b>
            <label for="" style="color: black">Gender</label>

             <input type="text" name="pin" placeholder="Last Name" id="MainContent_lblmothername" class="form-control" style="color:#303030" value="<?php
                      echo $row1['gender'] ?>" readonly="true" >

          </div>
          <div class="form-group col-md-4">

            <label for="" style="color: black">Blood Group</label>

             <input type="text" name="pin" placeholder="Last Name" id="MainContent_lblmothername" class="form-control" style="color:#303030" value="<?php
                      echo  $row1['blood_group'] ?>" readonly="true">

          </div>
          <div class="form-group col-md-4">

            <label for="" style="color: black">Fathers Name</label>

             <input type="text" name="pin" placeholder="Last Name" id="MainContent_lblmothername" class="form-control" style="color:#303030" value="<?php
                      echo $row1['father_name'] ?>" readonly="true">

          </div>
           <div class="form-group col-md-4">

            <label for="" style="color: black">Mothers Name</label>

             <input type="text" name="pin" placeholder="Last Name" id="MainContent_lblmothername" class="form-control" style="color:#303030" value="<?php
                       echo $row1['mother_name'] ?>" readonly="true">

          </div>
          <div class="form-group col-md-4">

            <label for="" style="color: black">Reservation</label>
             <input type="text" name="pin" placeholder="Last Name" id="MainContent_lblmothername" class="form-control" style="color:#303030" value="<?php
                       echo $row1['reservation_on_category'] ?>" readonly="true">

          </div>





</div>


</div>

  </div>
<?php require ("userfooter.php");?>
