<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'gcgc');


$sql="select * from are_cocubes where Unique_Id='$usn'";
  $result=mysqli_query($con,$sql);
  $resultCheck=mysqli_num_rows($result);
  $rows=mysqli_fetch_assoc($result);
?>


          <div id="myCh" class="chart--container">
          </div>
  <table border="1">
		<tr>
			<th>English</th>
			<th>Quants</th>
			<th>Domain</th>
			<th>Analytical</th>
			<th>CF</th>
			<th>Coding</th>
			<th>WET</th>
		</tr>
		<tr style="background-color:white;">
			<td><input type="text" size="2" name="english" value="<?php echo $rows['English']; ?>"></td>
			<td><input type="text" size="2" name="quantitative" value="<?php echo $rows['Quantitative']; ?>"></td>
			<td><input type="text" size="3" name="domain" value="<?php echo $rows['Domain']; ?>"></td>
			<td><input type="text" size="5" name="analytical" value="<?php echo $rows['Analytical']; ?>"></td>
			<td><input type="text" size="2" name="cf" value="<?php echo $rows['Computer_Fundamentals']; ?>"></td>
			<td><input type="text" size="2" name="coding" value="<?php echo $rows['Coding']; ?>"></td>
			<td><input type="text" size="2" name="wet" value="<?php echo $rows['WET']; ?>"></td>
		</tr>
	</table>
