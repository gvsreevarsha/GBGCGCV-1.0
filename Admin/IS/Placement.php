<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'gcgc');

    $sql1="SELECT count(company_id) AS total1 FROM companies";
    $result1 = mysqli_query($con,$sql1);
    $value1 = mysqli_fetch_assoc($result1);
    $num_rows1 = $value1['total1'];


    $sql2="SELECT count(attendance) AS total2 FROM cdt2020 WHERE attendance='P' AND userid='$usn'";
    $result2 = mysqli_query($con,$sql2);
    $value2 = mysqli_fetch_assoc($result2);
    $num_rows2 = $value2['total2'];


    $sql3="SELECT count(WTS) AS total3 FROM cdt2020 WHERE WTS='Y' AND userid='$usn'";
    $result3 = mysqli_query($con,$sql3);
    $value3 = mysqli_fetch_assoc($result3);
    $num_rows3 = $value3['total3'];

    $sql4="SELECT count(GDS) AS total4 FROM cdt2020 WHERE GDS='Y' AND userid='$usn'";
    $result4 = mysqli_query($con,$sql4);
    $value4 = mysqli_fetch_assoc($result4);
    $num_rows4 = $value4['total4'];

    $sql5="SELECT count(TIS) AS total5 FROM cdt2020 WHERE TIS='Y' AND userid='$usn'";
    $result5 = mysqli_query($con,$sql5);
    $value5 = mysqli_fetch_assoc($result5);
    $num_rows5 = $value5['total5'];

    $sql6="SELECT count(offer_letter) AS total6 FROM cdt2020 WHERE offer_letter='!NULL' AND userid='$usn'";
    $result6 = mysqli_query($con,$sql6);
    $value6 = mysqli_fetch_assoc($result6);
    $num_rows6 = $value6['total6'];

?>
<div align="center">
  <div style="background-color:#edf2f6;">

  <div class="col-sm-12 p-3" align="center" style="border-radius:10px; background-color:white; color: #868686;width:97%;">
      <div style="color: black;">
        <br>
        <p><small>Placement Analysis</small></p>
        <hr>
    <table  width=95% style="background-color:#ffffff;" align="center">



                        <tr>
                            <td style="text-align:center"><label>Total Number of Companies : </label>

                            <?php
                                  echo $num_rows1;
                            ?>

                            <br></td>
<td style="text-align:center"><label>Number of written test cleared : </label><?php echo $num_rows3;?><br></td>

                        </tr><tr>
                            <td style="text-align:center"><label>Number of Companies Attended : </label><?php echo "$num_rows2";?><br></td>
<td style="text-align:center"><label>Number of GD's cleared : </label><?php echo $num_rows4;?><br></td>
                        </tr>
                            <tr>
                            <td style="text-align:center"><label>Number of Companies Eligible:</label> <?php echo "$num_rows1";?><br></td>
<td style="text-align:center"><label>Number of Technical Tests cleared : </label><?php echo $num_rows5;?><br></td>
                        </tr>
                        <tr>



                            <td colspan="4" style="text-align:center"><label>Number of Offerletters : </label><?php echo "$num_rows6";?><br></td>
                        </tr>



    </table>
  </div>
  </div>


  </div>
  </div>


    <style>

    tr:nth-child(even) {
  background-color: #dddddd;
}
td {

    /* border: aliceblue; */
    border-right-color: white;
    border-bottom-color: white;
}
    </style>
<div align="center">
  <div style="background-color:#edf2f6;">
    <br>
  <div class="col-sm-12 p-3" align="center" style="border-radius:10px; background-color:white; color: #868686;width:97%;">
      <div style="color: black;">
        <p><small>Placement Analysis</small></p>
        <hr>

    <table style="border:1px solid black; background-color:white;"   width="90%">

        <tr>
            <th>Date</th>
            <th>Company logo</th>
            <th>Company Name</th>
            <th>Attendance</th>
            <th>Written Test</th>
            <th>Group Discussion</th>
            <th>Techical Test</th>
            <th>Personal Interview</th>
        </tr>


<?php
              $query = "select * from cdt2020 c,companies p where p.company_id=c.cid and c.userid='$usn' and `attendance`='P'" ;
              $result=mysqli_query($con,$query);



                 while($row = mysqli_fetch_array($result))
                     {

 ?>

                    <tr>


                        <td style= "text-align:center" ><?php echo $row["date_of_recruitment"] ; ?></td>
                        <td style= "text-align:center" ><img src="<?php echo $row['company_logo'];?>" alt ="Image" style="width: 100px; height: 100px"></td>
                        <td style= "text-align:center" ><?php echo $row["company_name"]; ?></td>
                        <td style= "text-align:center" ><?php echo $row["attendance"]  ;  ?></td>
                        <td style= "text-align:center" ><?php echo $row["WTS"]   ;  ?></td>
                        <td style= "text-align:center" ><?php echo $row["GDS"];  ?></td>
                        <td style= "text-align:center" ><?php echo $row["TIS"] ;  ?></td>
                        <td style= "text-align:center" ><?php echo $row["PIU"] ;?></td>


                     </tr>


<?php

                      }
?>
   </table>
   <br>
   <br>
 </div>
 </div>
 </div>
 </div>
