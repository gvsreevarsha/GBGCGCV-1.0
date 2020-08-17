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


     $sql = "CREATE TABLE temp SELECT * FROM personal_details_mdb LIMIT 0";



     mysqli_query($con, $sql);


        $query = <<<eof
        LOAD DATA INFILE '$file'
         INTO TABLE temp
         FIELDS TERMINATED BY ','
         LINES TERMINATED BY '\n'
         IGNORE 1 LINES
         (user_id, first_name, middle_name, last_name, gender, DOB, blood_group, permanent_address, phone_no, email_id, father_name, father_occupation, father_contact_no, father_email_id, mother_name, mother_occupation, reservation_on_category)
eof;
 mysqli_query($con, $query);
// $sql="CREATE"

   $sql = "INSERT INTO personal_details_mdb SELECT * FROM temp ON DUPLICATE KEY UPDATE user_id=VALUES(user_id),first_name=VALUES(first_name), middle_name=VALUES(middle_name), last_name=VALUES(last_name), gender=VALUES(gender), DOB=VALUES(DOB), blood_group=VALUES(blood_group), permanent_address=VALUES(permanent_address), phone_no=VALUES(phone_no), email_id=VALUES(email_id), father_name=VALUES(father_name), father_occupation=VALUES(father_occupation), father_contact_no=VALUES(father_contact_no), father_email_id=VALUES(father_email_id), mother_name=VALUES(mother_name), mother_occupation=VALUES(mother_occupation), reservation_on_category=VALUES(reservation_on_category)";

   mysqli_query($con, $sql);
   $sql = "DROP table temp";
   mysqli_query($con, $sql);

   $msg = "CSV file successfully imported!";

     header('Location: uploads.php?msg='.$msg);
}
}
?>
