<?php
session_start();
if(!($_SESSION["IS"]))
{
  header('Location: ../login.php?messege=login failed!');
}
$usn = $_SESSION['IS'];
$con = new mysqli("localhost", "root", "", "gcgc");
$sql = mysqli_query($con, "SELECT * FROM `personal_details_mdb` where user_id='$usn'");
$row=mysqli_fetch_assoc($sql);
?>
<html>
 <head>
    <title>Gitam Career Guidance Centre Student Dashboard</title>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 </head>
 <header>
  <div class="container-fluid" style="background-color:#303030;">
    <div class="row" style="background-color">
      <div class="col-sm-1 p-4" background="white" height="200px">
          <img  src="gitam_logo.jpg" width="100px" height="100px" style="padding: 5px; background-color:#303030;">
      </div>
      <div class="col-sm-2">
      	<div>&nbsp;</div>
      	<div>&nbsp;</div>
        <div style="color: #ffffff; padding:5px; font-weight: lighter; font-size: 150%"><div>GITAM,Bengaluru</div></div>
      </div>
      <div class="col-sm-6 col-sm-offset-1" align="right">
      	<div>&nbsp;</div>
      	<div>&nbsp;</div>
      	<div>&nbsp;</div>
      	<nav align="right">
      		<div class="container2">
      			<ul class="nav">
              <li class="col-sm-3">&nbsp;</li>
              <li class="col-sm-1"><a href="userindex.php" style="color: lightgreen;">Dashboard</a></li>
              <li class="col-sm-4"><a href="PDU.php" style="color: lightgreen;">Personal Details</a></li>
              <li class="col-sm-2"><a href="calendar.php" style="color: lightgreen;">Calendar</a></li>
              <li class="col-sm-2"><a href="logout.php" style="color: lightgreen;">Logout</a></li>
            </ul>
      		</div>
      	</nav>
      </div>
      <div class="col-sm-3 p-2" align="right">
        <div>&nbsp;</div>
        <img src="https://doeresults.gitam.edu/gitamhallticket/img.aspx?id=<?php echo $usn ?>" width="100" align="right">
        <div align="right" style="color: white; padding-top: 13px; font-weight: lighter; font-size: 125%"><big><b>WELCOME<br></big><?php echo $row["first_name"]." ",$row["middle_name"]." ".$row["last_name"];?></b></div>
      </div>
    </div>
  </div>
</header>
