<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$user=$_POST['userid'];
$ass_part=$_POST['Assessment_patner'];
$date=$_POST['Assessment_date'];
$ass_id=$_POST['Assessment_id'];
$Apti=$_POST['ARECAP'];
$english=$_POST['ARECE'];
$quants=$_POST['ARECQ'];
$analytic1=$_POST['ARECA'];
$Domain=$_POST['ARECD'];
$comfun=$_POST['ARECCF'];
$Coding=$_POST['ARECC'];
$WET=$_POST['ARECW'];
$Personality=$_POST['ARECP'];
$oas=$_POST['ARECTS'];
$oar=$_POST['ARECTR'];
$Analyst=$_POST['CANLP'];
$Customer_Service_Executive=$_POST['Customer_Service_Executive'];
$Graduate_Engineer_Plant=$_POST['Graduate_Engineer_Plant'];
$Graduate_Engineer_RD=$_POST['Graduate_Engineer_RD'];
$Network_Engineer=$_POST['Network_Engineer'];
$Operations_Executive=$_POST['Operations_Executive'];
$Sales_Executive=$_POST['Sales_Executive'];
$Software_Developer=$_POST['Software_Developer'];
$Software_Engineer=$_POST['Software_Engineer'];
$Software_Tester=$_POST['Software_Tester'];


$s="INSERT INTO `are_cocubes`(`Unique_Id`, `Assesement_Partner`, `Date`, `Assement_ID`, `Overall_Aptitude`, `English`, `Quantitative`, `Analytical`, `Domain`, `Computer_Fundamentals`, `Coding`, `WET`, `Personality`, `Over_all_Score`, `Overall_Rank`, `Analyst`, `Customer_Service_Executive`, `Graduate_Engineer_Plant`, `Graduate_Engineer_RD`, `Network_Engineer`, `Operations_Executive`, `Sales_Executive`, `Software_Developer`, `Software_Engineer`, `Software_Tester`) VALUES ('$user','$ass_part','$date','$ass_id','$Apti','$english','$quants','$analytic1','$Domain','$comfun','$Coding','$WET','$Personality','$oas','$oar','$Analyst','$Customer_Service_Executive','$Graduate_Engineer_Plant','$Graduate_Engineer_RD','$Network_Engineer','$Operations_Executive','$Sales_Executive','$Software_Developer','$Software_Engineer','$Software_Tester')";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: uploads.php?msg='.$msg);
?>
