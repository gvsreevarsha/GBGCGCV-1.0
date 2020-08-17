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
              Analyst<input type="text" size="1" name="analyst" value="<?php echo $analyst; ?>">
              </div>

					</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $customersalesexecutive ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        Customer Sales<input type="text" size="1" name="customersalesexecutive" value="<?php echo $customersalesexecutive ;?>">
        </div>
					</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $graduateengineerplant ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        Plant engineer<input type="text" size="1" name="graduateengineerplant" value="<?php echo $graduateengineerplant; ?>">
        </div>
					</td>
				</tr>
				<tr style="background-color:#edf2f6;">
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $graduateengineerrd ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        RRD engineer<input type="text" size="1" name="graduateengineerrd" value="<?php echo $graduateengineerrd ;?>">
        </div>
					</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $networkengineer ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        Network engineer<input type="text" size="1" name="networkengineer" value="<?php echo $networkengineer ?>">
        </div>
					</td>
					<td><div class="container chart" data-size="100" data-value="<?php echo $operationsandexecutive ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        operations engineer<input type="text" size="1" name="operationsandexecutive" value="<?php echo $operationsandexecutive ?>">
        </div>
         </td>
				</tr>
				<tr>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $softwaredeveloper ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        software Developer<input type="text" size="1" name="softwaredeveloper" value="<?php echo $softwaredeveloper ?>">
        </div>
					</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $softwareengineer ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        software engineer<input type="text" size="1" name="softwareengineer" value="<?php echo $softwareengineer ?>">
        </div>
				</td>
					<td>
					<div class="container chart" data-size="100" data-value="<?php echo $softwaretester ;?>" data-arrow="up">
				</div>
        <div align="center" style="padding-right:40px ">
        Software Tester<input type="text" size="1" name="softwaretester" value="<?php echo $softwaretester ?>">
        </div>
      </td>
				</tr>
			</table>











		</div>


  <script  src="./script.js"></script>
