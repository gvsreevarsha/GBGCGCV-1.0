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
$year = mysqli_real_escape_string($link, $_REQUEST['year']);
$from_date = mysqli_real_escape_string($link, $_REQUEST['from-date']);
$to_date = mysqli_real_escape_string($link, $_REQUEST['to-date']);
$programme = mysqli_real_escape_string($link, $_REQUEST['programme']);
if($from_date>$to_date)
	$msg="Wrong Details";
else{
	$sql = "UPDATE `training_dash` SET `YOP`='$year',`from_date`='$from_date',`to_date`='$to_date',`name_of_the_program`='$programme' WHERE `SNo`='$s'";
	if(mysqli_query($link, $sql)){
	    $msg="Records updated successfully.";
	} else{
	    $msg="ERROR: Unable to execute the update command.";
	}
}
mysqli_close($link);
header('Location: training-display.php?year='.$year2."&msg=".$msg);
?>