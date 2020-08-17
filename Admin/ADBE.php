<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con,'gcgc');

$user=$_POST['userid'];
$yop=$_POST['ADYOP'];
$SS=$_POST['ADSS'];
$inter=$_POST['ADINTER'];
$branch=$_POST['Branch'];
$program=$_POST['Program'];
$gpa=$_POST['ADGPA'];
$passcat=$_POST['ADPG'];
$backlog=$_POST['ADBL'];
$section=$_POST['section'];
$resume=$_POST['ADRES'];



$s="INSERT INTO `academic_details`(`user_id`, `YOP`, `SSC_percent`, `inter_percent`, `Branch`, `Program`, `b_tech_gpa`, `pass_category`, `no_of_backlogs`, `section`, `resume`) VALUES ('$user','$yop','$SS','$inter','$branch','$program','$gpa','$passcat','$backlog','$section','$resume')";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: uploads.php?msg='.$msg);
?>
