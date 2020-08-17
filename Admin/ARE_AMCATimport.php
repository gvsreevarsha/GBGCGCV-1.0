<?php
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
         INTO TABLE are_amcat
         FIELDS TERMINATED BY ','
         LINES TERMINATED BY '\n'
         IGNORE 1 LINES
         (Unique_Id,Date,Assement_ID, 1_Logical_Ability_900M, LAP, 2_English_Comprehension_900M, ECP, 3_Quantitative_Ability_900M, QAP, 4_Automata_100M, AP, 5_Automata_Fix_100M, AFP, 6a_domain_1_900M, d1p, 6b_domain_2_900M, d2p, 6_Domain_Average, DP, 7_Overall_Score_3800, 7_Overall_Score_Percentage,7_Overall_Rank,Remarks)
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
