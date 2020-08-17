<?php

$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gcgc');

$sql="select * from job_fit_curve where unique_id='$usn'";
                      $result=mysqli_query($con,$sql);
                      $resultCheck=mysqli_num_rows($result);
                      $row=mysqli_fetch_assoc($result);
$analyst=$row['Analyst'];
$customersalesexecutive=$row['Customer_Sales_Executive'];
$graduateengineerplant=$row['Graduate_Engineer_Plant'];
$graduateengineerrd=$row['Graduate_Engineer_RD'];
$networkengineer=$row['Network_Engineer'];
$operationsandexecutive=$row['Operations_and_Executive'];
$softwaredeveloper=$row['Software_Developer'];
$softwareengineer=$row['Software_Engineer'];
$softwaretester=$row['Software_Tester'];
$result=(int)(($analyst+$customersalesexecutive+$graduateengineerplant+$graduateengineerrd+$networkengineer+$operationsandexecutive+$softwaredeveloper+
$softwareengineer+$softwaretester)/9);
?>


  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <div id='tet' style="width:100%;" align="center" ></div>
 <script>ZC.LICENSE=["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];var myConfig7 = {
"type":"gauge",
"scale-r":{
  "aperture":200,
  "values":"0:100:20",
  "center":{
    "size":5,
    "background-color":"#66CCFF #FFCCFF",
    "border-color":"none"
  },
  "ring":{
    "size":10,
    "rules":[
      {
        "rule":"%v >= 0 && %v <= 20",
        "background-color":"red"
      },
      {
        "rule":"%v >= 20 && %v <= 40",
        "background-color":"orange"
      },
      {
        "rule":"%v >= 40 && %v <= 60",
        "background-color":"yellow"
      },
      {
        "rule":"%v >= 60 && %v <= 80",
        "background-color":"green"
      },
      {
        "rule":"%v >= 80 && %v <=100",
        "background-color":"blue"
      }
    ]
  },
  "labels":["0","20","40","60","80","100"]  //Scale Labels
},
"plot":{
  "csize":"5%",
  "size":"100%",
  "background-color":"#000000"
},
"series":[
  {"values":[<?php echo "$result"; ?>]}
]
};

zingchart.render({
id : 'tet',
data : myConfig7,
height : 270,
width: 250
});</script>


 <?php
   echo "<p align='center' >Description : You are  $result % suitable <br/>to the industry with
   your current performance <br/>in all the tests
  conducted by T&P</p>."
?>
