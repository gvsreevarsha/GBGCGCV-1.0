<?php
$con = new mysqli("localhost", "root","","gcgc");
$usn=$_POST['usn'];
$pas=$_POST['pass'];

$sql = mysqli_query($con,"SELECT * FROM user WHERE user_id = '$usn'");
//$row = mysqli_num_rows($sql);
$rows=mysqli_fetch_assoc($sql);
$field1name = $rows["user_id"];
$field2name = $rows["password"];
$field4name = $rows["type"];
$val='user';

if($pas==$field2name){
 if($field4name==$val)
 {
   session_start();
   $_SESSION['varname'] = $field1name;
 header('Location: User\\Userindex.php');
}
 else if($field4name=="Admin")
 {
    session_start();
   $_SESSION['adminid'] = $field1name;
  	header('Location: Admin\\Admindashboard.php?year=2020');
 }
 else{
 	session_start();
 	$_SESSION['guestid'] = $field1name;
 	header('Location: Guest\\Guestdashboard.php?year=2020');
 }
}
  else {
    echo "error";
  }

?>
