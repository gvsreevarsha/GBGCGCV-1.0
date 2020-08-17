<?php
/*
* iTech Empires:  How to Import Data from CSV File to MySQL Using PHP Script
* Version: 1.0.0
* Page: Impo*/

// Database Connection
require 'db_connection.php';

$message = "";
if (isset($_POST['submit'])) {
    $allowed = array('csv');
    $filename = $_FILES['file']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        // show error message
        $message = 'Invalid file type, please use .CSV file!';
        echo $message;
    } else {

        move_uploaded_file($_FILES["file"]["tmp_name"], "C:\\xampp\\mysql\\data\\files\\" . $_FILES['file']['name']);

       $file = "files/" . $_FILES['file']['name'];

        $query = <<<eof
        LOAD DATA INFILE '$file'
         INTO TABLE academic_details
         FIELDS TERMINATED BY ','
         LINES TERMINATED BY '\n'
         IGNORE 1 LINES
         (user_id, YOP, SSC_percent, inter_percent, Branch, Program, b_tech_gpa, pass_category, no_of_backlogs, section, resume)
eof;

if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
    $msg ="failed";
   }
   else
   $msg = "CSV file successfully imported!";
  }
     header('Location: uploads.php?msg='.$msg);
}

?>
