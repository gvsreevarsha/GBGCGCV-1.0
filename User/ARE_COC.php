<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'gcgc');


$sql="select * from are_cocubes where Unique_Id='$usn'";
  $result=mysqli_query($con,$sql);
  $resultCheck=mysqli_num_rows($result);
  $rows=mysqli_fetch_assoc($result);
?>


          <div id="myCh" class="chart--container">
          </div>
          
