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
?>

<!-- partial:index.partial.html -->

		<div class="wrapper col-xs-6">
      			<table id="dashboard" style="background-color:#edf2f6; width:100%; height: 100%;">
				<tr>
					<td>
					      <div class="container chart" data-size="100" data-value="<?php echo $analyst ;?>" data-arrow="up">
							</div>

              <div align="center" style="padding-right:40px ">
              Analyst
              </div>

					</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $customersalesexecutive ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        Customer Sales
        </div>
					</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $graduateengineerplant ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        Plant engineer
        </div>
					</td>
				</tr>
				<tr>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $graduateengineerrd ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        RRD engineer
        </div>
					</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $networkengineer ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        Network engineer
        </div>
					</td>
					<td><div class="container chart" data-size="100" data-value="<?php echo $operationsandexecutive ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        operations engineer
        </div>
         </td>
				</tr>
				<tr>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $softwaredeveloper ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        software Developer
        </div>
					</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $softwareengineer ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        software engineer
        </div>
				</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $softwaretester ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        Software Tester
        </div>
      </td>
				</tr>
			</table>











		</div>


  <script  src="./script.js"></script>
