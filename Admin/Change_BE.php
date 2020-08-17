<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');
$usn=$_POST['usn'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];

$s="UPDATE `personal_details_mdb` SET `first_name`='$fname',`middle_name`='$mname',`last_name`='$lname' WHERE `user_id`='$usn'";

$result = mysqli_query($con, $s);
if($result)
	$msg="Details changed";
else
	$msg="fail";
header('Location: settings.php?msg='.$msg);
?>
