<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$user=$_POST['user'];
$f_name=$_POST['f_name'];
$m_name=$_POST['m_name'];
$l_name=$_POST['l_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$bg=$_POST['bg'];
$pa=$_POST['pa'];
$ph=$_POST['ph'];
$em=$_POST['em'];
$fn=$_POST['fn'];
$fo=$_POST['fo'];
$fc=$_POST['fc'];
$fm=$_POST['fm'];
$mn=$_POST['mn'];
$mo=$_POST['mo'];
$rc=$_POST['rc'];


$s="UPDATE `personal_details_mdb` SET `first_name`='$f_name',`middle_name`='$m_name',`last_name`='$l_name',`gender`='$gender',`DOB`='$dob',`blood_group`='$bg',`permanent_address`='$pa',`phone_no`='$ph',`email_id`='$em',`father_name`='$fn',`father_occupation`='$fo',`father_contact_no`='$fc',`father_email_id`='$fm',`mother_name`='$mn',`mother_occupation`='$mo',`reservation_on_category`='$rc' WHERE user_id='$user'";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: uploads.php?msg='.$msg);
?>
