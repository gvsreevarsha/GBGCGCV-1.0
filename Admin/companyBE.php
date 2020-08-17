<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$cid=$_POST['cid'];
$companyname=$_POST['companyname'];
$logo=$_POST['logo'];
$website=$_POST['website'];
$emp_str=$_POST['emp_str'];
$turnover=$_POST['turnover'];
$about=$_POST['about'];
$HRname=$_POST['HRname'];
$techname=$_POST['techname'];
$date=$_POST['date'];

$s="INSERT INTO `companies`(`company_id`, `company_name`, `company_logo`, `website_company`, `employee_strength`, `annual_turnover`, `about_the_company`, `HR_name`, `Technical_interviwer_name`, `date_of_recruitment`) VALUES ('$cid','$companyname','$logo','$website','$emp_str','$turnover','$about','$HRname','$techname','$date')";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: AD.php?msg='.$msg);
?>
