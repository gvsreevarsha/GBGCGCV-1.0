<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$uid=$_POST['userid'];
$cid=$_POST['cid'];
$Attendance=$_POST['Attendance'];
$WT=$_POST['WT'];
$GD=$_POST['GD'];
$TI=$_POST['TI'];
$PIU=$_POST['PIU'];
$OL=$_POST['OL'];


$s="INSERT INTO `cdt2020`(`userid`, `cid`, `attendance`, `WTS`, `GDS`, `TIS`, `PIU`, `offer_letter`) VALUES ('$uid','$cid','$Attendance','$WT','$GD','$TI','$PIU','$OL')";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: uploads.php?msg='.$msg);
?>
