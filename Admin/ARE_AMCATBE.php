<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$user=$_POST['userid'];
$date=$_POST['date'];
$asid=$_POST['Assessment_id'];
$lbm=$_POST['logic900'];
$lbp=$_POST['logicP'];

$ecm=$_POST['English900'];
$ecp=$_POST['EnglishP'];
$qam=$_POST['quant900'];
$qap=$_POST['quantP'];
$am=$_POST['Auto900'];
$ap=$_POST['AutoP'];
$afm=$_POST['AutoF900'];
$afp=$_POST['AutoFP'];
$dom=$_POST['dom1900'];
$dop=$_POST['dom1P'];
$dtm=$_POST['dom2900'];
$dtp=$_POST['dom2P'];
$dfm=$_POST['domA900'];
$dfp=$_POST['domAP'];
$ovm=$_POST['overall'];
$ovp=$_POST['overP'];
$ovr=$_POST['overR'];
$remark=$_POST['remark'];


$s="INSERT INTO `are_amcat`(`Unique_Id`, `Date`, `Assement_ID`, `1_Logical_Ability_900M`, `LAP`, `2_English_Comprehension_900M`, `ECP`, `3_Quantitative_Ability_900M`, `QAP`, `4_Automata_100M`, `AP`, `5_Automata_Fix_100M`, `AFP`, `6a_domain_1_900M`, `d1p`, `6b_domain_2_900M`, `d2p`, `6_Domain_Average`, `DP`, `7_Overall_Score_3800`, `7_Overall_Score_Percentage`, `7_Overall_Rank`, `Remarks`) VALUES ('$user','$date','$asid','$lbm','$lbp','$ecm','$ecp','$qam','$qap','$am','$ap','$afm','$afp','$dom','$dop','$dtm','$dtp','$dfm','$dfp','$ovm','$ovp','$ovr','$remark')";

$result = mysqli_query($con, $s);
if($result)
	$msg="New user added";
else
	$msg="User already available";
header('Location: uploads.php?msg='.$msg);
?>
