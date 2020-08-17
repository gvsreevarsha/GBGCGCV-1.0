<?php require 'Adminheader.php'?>
<?php
if(isset($_POST["Submit"]))
{
  $mysqli = new mysqli("localhost", "root", "", "gcgc");
  $degree=$_POST["degree"];
  if($degree=="Any")
    $sql1="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students";
  else
    $sql1="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students where Program='BTech'";
  $branch=$_POST["branch"];
  if($branch="selectall")
    $sql2="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students";
  else
    $sql2="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students where Branch LIKE '$branch%'";
  $cgpa=$_POST["CGPA"];
    $sql3="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students where b_tech_gpa>'$cgpa'";
  $batch=$_POST["batch"];
  if($batch=='nill')
    $sql4="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students";
  else
    $sql4="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students where YOP='$batch'";
  $sortby=$_POST["sortby"];
  $gender=$_POST["gender"];
  if($gender=="nill")
    $sql5="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students";
  else
    $sql5="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students where gender='$gender'";
  $jobeligible=$_POST["jobeligible"];
  if($jobeligible=="yes")
    $sql6="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students where b_tech_gpa>0";
  else
    $sql6="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students where b_tech_gpa=0";
  $jobsinhand=$_POST["jobsinhand"];  
  if($jobsinhand=="nill")
  {
      $sql10="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students";
  }
  else{    
    $sql10="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students,cdt2020 WHERE cdt2020.PIU='Y' and display_filtered_students.user_id=cdt2020.userid group by display_filtered_students.user_id HAVING COUNT(display_filtered_students.user_id)<".$jobsinhand;
  }
  $ten=$_POST["10th"];
    $sql7="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students WHERE `SSC_percent`>='$ten'";
  $twelve=$_POST["12th"];
    $sql8="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students WHERE `inter_percent`>='$twelve'";
  $backlogs=$_POST["backlogs"];
  if($backlogs=-1)
    $sql9="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students WHERE `pass_category`='A'";
  else if($backlogs<11)
    $sql9="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students WHERE `no_of_backlogs`<='$backlogs'";
  else
    $sql9="SELECT user_id, first_name, middle_name, last_name, Branch, SSC_percent, inter_percent, b_tech_gpa ,YOP from display_filtered_students WHERE `no_of_backlogs`>11";
  $query=$sql1." INTERSECT ".$sql2." INTERSECT ".$sql3." INTERSECT ".$sql4." INTERSECT ".$sql5." INTERSECT ".$sql6." INTERSECT ".$sql7." INTERSECT ".$sql8." INTERSECT ".$sql9." INTERSECT ".$sql10." ORDER BY ".$sortby;
  $result = $mysqli->query($query);
  $numberofrows=mysqli_num_rows($result);
}
?>
<body>
  <div class="container2">
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3 back">
        <div class="col-xs-12 p-2 Heading">&emsp;Manage Students</div>
        <div class=" col-xs-12 btn btn-blue subheading" style="font-size: 20px;"><span class="col-xs-1">Search Filter</span><span class="col-xs-3 col-xs-offset-8">Total Students:<?php echo $numberofrows;?></span></div>
        <div class="col-xs-12 p-3 backwhite">
          <div class="col-xs-12" style="padding: 5px;">
            <b class="col-xs-8">Result</b>
            <div class="col-xs-4">
              <span><button class="btn btn-blue">Generate Excel</button></span>
              <span><button class="btn btn-blue"><a class="codec" href='AdminMessage.php'>Send SMS</a></button></span>
              <span><button class="btn btn-blue"><a class="codec" href='AdminMessage.php'>Send Email</a></button></span>
            </div>
          </div>
          <div class="col-xs-12"></div>
          <div class="col-xs-12 p-0"><hr class="text-white" style="margin: 0px;"></div>
          <table align="center"><?php
echo '<table width="100%"" align="center">
      <tr class="notice-top">
          <td> <font face="Arial" class="p-4"><center>Roll No</center></font> </td>
          <td> <font face="Arial" class="p-4" align="left">Name</font> </td>
          <td> <font face="Arial" class="p-4" align="left">Branch</font> </td>
          <td> <font face="Arial" class="p-4" align="left">X marks</font> </td>
          <td> <font face="Arial" class="p-4" align="left">XII marks</font> </td>
          <td> <font face="Arial" class="p-4" align="left">College marks</font> </td>
          <td> <font face="Arial" class="p-4" align="left">Batch</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr class="notice"> 
                <form method="POST" action="placements_op.php">
                  <td class="p-4" align="left">'.$row["user_id"].'</td> 
                  <td class="p-4" align="left">'.$row["first_name"].'</td> 
                  <td class="p-4" align="left">'.$row["Branch"].'</td> 
                  <td class="p-4" align="left">'.$row["SSC_percent"].'</td> 
                  <td class="p-4" align="left">'.$row["inter_percent"].'</td> 
                  <td class="p-4" align="left">'.$row["b_tech_gpa"].'</td> 
                  <td class="p-4" align="left">'.$row["YOP"].'</td>
                </form>
              </tr>';
    }
    $result->free();
}
                            ?>
          </table> 
        </div>
    </div>
  </div>
</body>
<?php require 'Adminfooter.php'?>
