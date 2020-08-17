<?php
session_start();
if(!($_SESSION["adminid"]))
{
  header('Location: ../login.php?messege=login failed!');
}
$adminid=$_SESSION["adminid"];
$con = new mysqli("localhost", "root", "", "gcgc");
$sql = mysqli_query($con, "SELECT * FROM `personal_details_mdb` where user_id='$adminid'");
$row=mysqli_fetch_assoc($sql);
?>
<html>
 <head>
    <title>This is admin </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="CSS/Admincss.css">
 </head>
 <header class="Ash">
  <div class="container-fluid" width="!00%">
    <div class="row">
      <div class="col-sm-2" background="white" height="200px">
          <img  src="../AdminImages/gitam.jpeg" width="111%" height="100%" class="gitimg">
      </div>
      <div class="col-sm-offset-2 col-sm-4">
        <div class="Title" align="center"><big class="Title Up"><b>GCGC</b></big><br><b>GITAM Career Guidance Center</b></div>
      </div>
      <div class="col-sm-4">
        <img src="../AdminImages/10110.jpg" width="100" align="right">
        <div align="right" class="welcomemsg"><big><b>WELCOME<br><?php echo $row["first_name"]." ",$row["middle_name"]." ".$row["last_name"];?></b></big></div>
      </div>
    </div>
  </div>
</header>
