<?php
/*
* iTech Empires:  How to Import Data from CSV File to MySQL Using PHP Script
* Version: 1.0.0
* Page: Import.PHP
*/

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
    }
    else
    {

      move_uploaded_file($_FILES["file"]["tmp_name"], "C:\\xampp\\mysql\\data\\files\\" . $_FILES['file']['name']);

        $file = "files/" . $_FILES['file']['name'];

        $query = <<<eof
        LOAD DATA INFILE '$file'
         INTO TABLE personal_details_mdb
         FIELDS TERMINATED BY ','
         LINES TERMINATED BY '\n'
         IGNORE 1 LINES
         (user_id, first_name, middle_name, last_name, gender, DOB, blood_group, permanent_address, phone_no, email_id, father_name, father_occupation, father_contact_no, father_email_id, mother_name, mother_occupation, reservation_on_category)
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
