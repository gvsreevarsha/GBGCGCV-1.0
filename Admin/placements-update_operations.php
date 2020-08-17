<?php
if(isset($_GET["year"]))
	$year2=$_GET["year"];
else
	$year2=2020;
$link = mysqli_connect("localhost", "root", "", "gcgc");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$s=$_GET["SNo"];
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$ctc = mysqli_real_escape_string($link, $_REQUEST['ctc']);
if(isset($_POST["Edit"]))
{
	$sql = "UPDATE `placements_dash` SET `Date`='$date',`Company_name`='$company',`CTC`='$ctc' WHERE `SNo`='$s'";
	if(mysqli_query($link, $sql)){
	    $msg="Records Updated successfully.";
	} else{
	    $msg="ERROR: Unable to execute the delete command.";
	}
}
mysqli_close($link);
header('Location: placements-display.php?year='.$year2."&msg=".$msg);
?>