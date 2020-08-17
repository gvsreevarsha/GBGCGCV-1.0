<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$user=$_POST['userid'];
$date1=$_POST['AT1date'];
$AT1S=$_POST['AT1_score'];
$AT1R=$_POST['AT1_ranks'];
$date2=$_POST['AT2date'];
$AT2S=$_POST['AT2_score'];
$AT2R=$_POST['AT2_score'];

$s="INSERT INTO `ari`(`Unique_Id`, `AT1_Exam_Date`, `AT1_score`, `AT1_rank`, `AT2_Exam_Date`, `AT2_score`, `AT2_rank`) VALUES ('$user','$date1','$AT1S','$AT1R','$date2','$AT2S','$AT2R')";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: uploads.php?msg='.$msg);
?>
