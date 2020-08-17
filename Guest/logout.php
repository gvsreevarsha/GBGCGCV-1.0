<?php
session_start();
unset($_SESSION["Guestid"]);
session_destroy();
header('Location: ../login.php');


 ?>
