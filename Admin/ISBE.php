<?php
session_start();
if($_POST['Submit']){
$_SESSION['IS'] = $_POST["user"];
header('Location: IS\\ISindex.php');
}

 ?>
