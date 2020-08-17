<?php
if(isset($_GET["year"]))
	$year2=$_GET["year"];
else
	$year2=2020;
$link = mysqli_connect("localhost", "root", "", "gcgc");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	if(isset($_POST["Delete"]))
	{
		$sql = "DELETE FROM `placements_dash` WHERE `Sno`=".$_POST["Delete"];
		$result=mysqli_query($link, $sql);
		if($result){
		    $msg="Records Deleted successfully.";
		}
		else{
		    $msg="ERROR: Unable to execute the delete command.";
		}
		header('Location: placements-display.php?year='.$year2."&msg=".$msg);
	}
	if(isset($_POST["Edit"]))
	{
		header('Location: placements-update.php?year='.$year2."&SNo=".$_POST["Edit"]);
	}
}
mysqli_close($link);
?>
