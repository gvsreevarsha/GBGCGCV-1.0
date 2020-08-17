<?php
if(isset($_GET["year"]))
	$year2=$_GET["year"];
else
	$year2=2020;
$link = mysqli_connect("localhost", "root", "", "gcgc");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$ctc = mysqli_real_escape_string($link, $_REQUEST['ctc']);
if(isset($_POST["Add"]))
{
	$sql = "INSERT INTO `placements_dash`(`Date`, `Company_name`, `CTC`) VALUES ('$date','$company','$ctc')";
	if(mysqli_query($link, $sql)){
	    $msg="Records Added successfully.";
	} else{
	    $msg="ERROR: Unable to execute the add command.";
	}
}
mysqli_close($link);
header('Location: placements-display.php?year='.$year2."&msg=".$msg);
?>