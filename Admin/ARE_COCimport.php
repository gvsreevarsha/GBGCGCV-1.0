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
         INTO TABLE are_cocubes
         FIELDS TERMINATED BY ','
         LINES TERMINATED BY '\n'
         IGNORE 1 LINES
         (Unique_Id, Assesement_Partner ,Date, Assement_ID,Overall_Aptitude,English, Quantitative, Analytical, Domain, Computer_Fundamentals, Coding, WET, Personality, Over_all_Score, Overall_Rank, Analyst, Customer_Service_Executive, Graduate_Engineer_Plant, Graduate_Engineer_RD, Network_Engineer, Operations_Executive, Sales_Executive, Software_Developer, Software_Engineer, Software_Tester)
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
