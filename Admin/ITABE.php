<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$user=$_POST['userid'];
$name=$_POST['name_trg'];
$date=$_POST['date_of_trg'];
$session=$_POST['FN_AF'];
$Attend=$_POST['Attend'];

$s="INSERT INTO `ita`(`Roll_No`, `program`, `Date`, `FN_AN`, `Attendance`) VALUES ('$user','$name','$date','$session','$Attend')";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: uploads.php?msg='.$msg);
?>
