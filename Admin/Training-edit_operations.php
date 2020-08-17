<?php
if(isset($_GET["year"]))
	$year2=$_GET["year"];
else
	$year2=2020;
$link = mysqli_connect("localhost", "root", "", "gcgc");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$year = mysqli_real_escape_string($link, $_REQUEST['year']);
$from_date = mysqli_real_escape_string($link, $_REQUEST['from-date']);
$to_date = mysqli_real_escape_string($link, $_REQUEST['to-date']);
$programme = mysqli_real_escape_string($link, $_REQUEST['programme']);
if($from_date>$to_date)
	$msg="Wrong Details";
else{
	$sql = "INSERT INTO `training_dash`(`YOP`, `from_date`, `to_date`, `name_of_the_program`) VALUES ('$year','$from_date','$to_date','$programme')";
	if(mysqli_query($link, $sql)){
	    $msg="Records Added successfully.";
	} else{
	    $msg="ERROR: Unable to execute the add command.";
	}
}
mysqli_close($link);
header('Location: training-display.php?year='.$year2."&msg=".$msg);
?>