<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$user=$_POST['user'];
$pass=$_POST['password'];
$campus=$_POST['campid'];
$type=$_POST['type'];
$s="INSERT INTO `personal_details_mdb`(`user_id`, `first_name`, `middle_name`, `last_name`, `gender`, `DOB`, `blood_group`, `permanent_address`, `phone_no`, `email_id`, `father_name`, `father_occupation`, `father_contact_no`, `father_email_id`, `mother_name`, `mother_occupation`, `reservation_on_category`) VALUES ('$user',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";

$result = mysqli_query($con, $s);

$s="INSERT INTO `user`(`user_id`, `password`, `campus_id`, `type`) VALUES ('$user','$pass','$campus','$type')";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: uploads.php?msg='.$msg);
?>
