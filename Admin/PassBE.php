<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');
$usn=$_POST['usn'];
$OL=$_POST['oldpass'];
$N2=$_POST['newpass1'];
$N1=$_POST['newpass2'];
if($N1!=$N2)
{
	$msg="New password and confirm password does not match";
	header('Location: settings.php?msg='.$msg);
}
else {
$sql = mysqli_query($con,"SELECT * FROM user WHERE user_id = '$usn'");
//$row = mysqli_num_rows($sql);
$rows=mysqli_fetch_assoc($sql);
$field1name = $rows["user_id"];
$field2name = $rows["password"];
$field4name = $rows["type"];
if($field2name!=$OL)
{
	$msg="Invalid Old password";
	header('Location: settings.php?msg='.$msg);
}
else {
$s="UPDATE `user` SET `password`='$N1' WHERE `user_id`='$usn'";
$result = mysqli_query($con, $s);
$msg="Password changed";
header('Location: settings.php?msg='.$msg);
}
}


?>
