<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'gcgc');

$usn=$_POST["userid"];
$ssc=$_POST["SSC_percent"];
$inter=$_POST["inter_percent"];
$GPA=$_POST["b_tech_gpa"];
$branch=$_POST["Branch"];
$CAT=$_POST["pass_category"];
$sec=$_POST["section"];
$query="UPDATE `academic_details` SET `SSC_percent`='$ssc',`inter_percent`='$inter',`Branch`='$branch',`b_tech_gpa`='$GPA',`pass_category`='$CAT',`section`='$sec' WHERE `user_id`=$usn";
mysqli_query($con, $query);

$analyst=$_POST["analyst"];
$customersalesexecutive =$_POST["customersalesexecutive"];
$graduateengineerplant =$_POST["graduateengineerplant"];
$graduateengineerrd =$_POST["graduateengineerrd"];
$networkengineer =$_POST["networkengineer"];
$operationsandexecutive =$_POST["operationsandexecutive"];
$softwaredeveloper =$_POST["softwaredeveloper"];
$softwareengineer =$_POST["softwareengineer"];
$softwaretester =$_POST["softwaretester"];

$query="UPDATE `job_fit_curve` SET `Analyst`='$analyst',`Customer_Sales_Executive`='$customersalesexecutive',`Graduate_Engineer_Plant`='$graduateengineerplant',`Graduate_Engineer_RD`='$graduateengineerrd',`Network_Engineer`='$networkengineer',`Operations_and_Executive`='$operationsandexecutive',`Software_Developer`='$softwaredeveloper',`Software_Engineer`='$softwareengineer',`Software_Tester`='$softwaretester' WHERE `unique_id`=$usn";
mysqli_query($con, $query);



$at1=$_POST["at1"];
$at2=$_POST["at2"];
$at3=$_POST["at3"];
$at4=$_POST["at4"];
$at5=$_POST["at5"];
$at6=$_POST["at6"];
$tt1=$_POST["tt1"];
$tt2=$_POST["tt2"];
$tt3=$_POST["tt3"];
$tt4=$_POST["tt4"];
$tt5=$_POST["tt5"];
$tt6=$_POST["tt6"];
$tt7=$_POST["tt7"];
$tt8=$_POST["tt8"];
$dt1=$_POST["dt1"];
$dt2=$_POST["dt2"];
$dt3=$_POST["dt3"];
$dt4=$_POST["dt4"];
 $query="UPDATE `ari` SET `AT1_score`='$at1',`AT2_score`='$at2',`AT3_score`='$at3',`AT4_score`='$at4',`AT5_score`='$at5',`AT6_score`='$at6',`TT1_percentage`='$tt1',`TT2_percentage`='$tt2',`TT3_percentage`='$tt3',`TT4_percentage`='$tt4',`TT5_percentage`='$tt5',`TT6_percentage`='$tt6',`TT7_percentage`='$tt7',`TT8_percentage`='$tt8',`DT1_score`='$dt1',`DT2_score`='$dt2',`DT3_score`='$dt3',`DT4_score`='$dt4' WHERE `Unique_Id`='$usn'";
 mysqli_query($con, $query);

$english=$_POST["english"];
$quantitative=$_POST["quantitative"];
$domain=$_POST["domain"];
$analytical=$_POST["analytical"];
$cf=$_POST["cf"];
$coding=$_POST["coding"];
$wet=$_POST["wet"];

$query="UPDATE `are_cocubes` SET `English`='$english',`Quantitative`='$quantitative',`Analytical`='$analytical',`Domain`='$domain',`Computer_Fundamentals`='$cf',`Coding`='$coding',`WET`='$wet' WHERE `Unique_Id`='$usn'";
mysqli_query($con, $query);


$alogical =$_POST["alogical"];
$aenglish =$_POST["aenglish"];
$aquants =$_POST["aquants"];
$aautomata =$_POST["aautomata"];
$aautomatafix =$_POST["aautomatafix"];
$adomain1 =$_POST["adomain1"];
$adomain2 =$_POST["adomain2"];

$query="UPDATE `are_amcat` SET `1_Logical_Ability_900M`='$alogical',`2_English_Comprehension_900M`='$aenglish',`3_Quantitative_Ability_900M`='$aquants' ,`4_Automata_100M`='$aautomata', `5_Automata_Fix_100M`='$aautomatafix', `6a_domain_1_900M`='$adomain1', `6b_domain_2_900M`='$adomain2' WHERE `Unique_Id`='$usn'";
mysqli_query($con, $query);


$asst1=$_POST["asst1"];
$query="UPDATE `ita` SET `att`='$asst1' WHERE `unique_id`='$usn'  AND`Program`='SST1'";
mysqli_query($con, $query);

$asst2=$_POST["asst2"];
$query="UPDATE `ita` SET `att`='$asst2' WHERE `unique_id`='$usn'  AND`Program`='SST2'";
mysqli_query($con, $query);

$att1=$_POST["att1"];
$query="UPDATE `ita` SET `att`='$att1' WHERE `unique_id`='$usn'  AND`Program`='TT1'";
mysqli_query($con, $query);
$att2=$_POST["att2"];
$query="UPDATE `ita` SET `att`='$att2' WHERE `unique_id`='$usn'  AND`Program`='TT2'";
mysqli_query($con, $query);
$att3=$_POST["att3"];
$query="UPDATE `ita` SET `att`='$att3' WHERE `unique_id`='$usn'  AND`Program`='TT3'";
mysqli_query($con, $query);
$att4=$_POST["att4"];
$query="UPDATE `ita` SET `att`='$att4' WHERE `unique_id`='$usn'  AND`Program`='TT4'";
mysqli_query($con, $query);
$att5=$_POST["att5"];
$query="UPDATE `ita` SET `att`='$att5' WHERE `unique_id`='$usn'  AND`Program`='TT5'";
mysqli_query($con, $query);

$acrt1=$_POST["acrt1"];
$query="UPDATE `ita` SET `att`='$acrt1' WHERE `unique_id`='$usn'  AND`Program`='CRT1'";
mysqli_query($con, $query);
$acrt2=$_POST["acrt2"];
$query="UPDATE `ita` SET `att`='$acrt2' WHERE `unique_id`='$usn'  AND`Program`='CRT2'";
mysqli_query($con, $query);
$acrt3=$_POST["acrt3"];
$query="UPDATE `ita` SET `att`='$acrt3' WHERE `unique_id`='$usn'  AND`Program`='CRT3'";
mysqli_query($con, $query);












header('Location: ISindex.php');

?>
