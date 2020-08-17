
<style>



    tr.tablecss:nth-child(even) {
  background-color: #dddddd;
}
td.tablecss {

    /* border: aliceblue; */
    border-right-color: white;
    border-bottom-color: white;
}

#box1
{
	height:25px;
	width:1325px;
	color:white;
	background:#2B3E4D;
}

#s1
{
	font-size:20px;
}

#b1
{
	color:#00cc00;
}

#selectcolor
{
	background:#f1f1f1;
}

#divcolor
{
	color:blue;
	size:100px;
}



#row1
{
	size:20px;
}

.dropdown {
        position: relative;
        display: inline-block;
      }

 .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        z-index: 1;
		text-align:left;
      }
      .dropdown-content form {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropdown-content form:hover {background-color:#ddd;}
      .dropdown:hover .dropdown-content {display: block;}

</style>


<html>
	<head>
		<title>All Students</title>
	</head>
	<body>
		<div id="box1" align="center">Search Filter</div>
		 <form action="" method="post">
				<div id="s1">Education Filter</div>
						<hr>
						<table style="width: 500px">
							<tr>
									<div id="divcolor">
										<th id="row1" align="left">Degree</th>
										<th id="row1" align="center">Branch</th>
										<th id="row1" align="right">CGPA</th>
									</div>
							</tr>
							<tr>
								<td>
										<select name="category" id="selectcolor">
											<option value="B.Tech">B.Tech</option>
											<option value="MBA">MBA</option>
										</select>

								</td>
								<td align="center">
										<div class="dropdown">
											<button class="dropbtn"  >Select option</button>
												<div class="dropdown-content">
													<span id="label">All selected</span>
													<input type ="checkbox" onclick="checkAll()"   id="parent" checked>

																<input type="checkbox" id="child_chkbx" name="CSE"  checked>Computer Science Engineering<br>
																<input type="checkbox" id="child_chkbx" name="ECE"  checked>Electronics and Communication Engineering<br>
																<input type="checkbox" id="child_chkbx" name="EEE"  checked>Electrical and Electronics Engineering<br>
																<input type="checkbox" id="child_chkbx" name="Civil"  checked>Civil Engineering<br>
																<input type="checkbox" id="child_chkbx" name="Mech" checked>Mechanical Engineering<br>
												</div>

													<script>
														function checkAll()
														{
															var parent =document.getElementById("parent");
															var label= document.getElementById("label");
															var input =document.getElementsByTagName("input");

															if(parent.checked === true)
															{
																for(var i=0;i<input.length;i++)
																{
																	if(input[i].type=="checkbox" && input[i].id =="child_chkbx" && input[i].checked==false)
																	{
																		input[i].checked=true;
																		label.innerHTML="All Selected";
																	}
																}
															}

															else if(parent.checked === false)
															{
																for(var i=0;i<input.length;i++)
																{
																	if(input[i].type=="checkbox" && input[i].id =="child_chkbx" && input[i].checked==true)
																	{
																		input[i].checked=false;
																		label.innerHTML="Select All";
																	}
																}
															}

														}
													</script>




											</div>
									</td>
									<td align="right"  >
											  <label for="mincgpa"></label>
											  <input type="range" name="mincgpa" id="mincgpa" value="10" min="0" max="10" step="0.01">
											<br><br><br><br>
									</td>
								</tr>
							</table>
				<div id="s1">Other Filter</div>
						<hr>
						<br>
					<table style="width: 700px">
						<tr>
							<th id="row1">Batch</th>
									<td>
										<select name="Degree" id="selectcolor">
											<option value="nill">Any</option>
											<option value="2016" >2016</option>
											<option value="2017" >2017</option>
											<option value="2018" >2018</option>
											<option value="2019" >2019</option>
											<option value="2020" >2020</option>
											<option value="2021"  >2021</option>
										</select>
								</td>
							<th id="row1">SortBy</th>
								<td>
									<select name="Sortby" id="selectcolor">
										<option value="first_name"  style="color: black;">Name</option>
										<option value="Branch"  style="color: black;">Branch</option>
										<option value="user_id"  style="color: black;">Roll No</option>
										<option value="b_tech_gpa"  style="color: black;">Institute marks</option>
										<option value="SSC_percent"  style="color: black;">10th Marks</option>
										<option value="inter_percent"  style="color: black;">12th Marks</option>
										<option value="Last"  style="color: black;">Last Login</option>
										<option value="Gender"  style="color: black;">Gender</option>
									</select>
								</td>
						</tr>

						<tr>
						<th id="row1">Gender</th>
								<td>
									<select name="Gender" id="selectcolor">
										<option value="nill"  style="color: black;">No Preference</option>
										<option value="M"  style="color: black;">Male</option>
										<option value="F"  style="color: black;">Female</option>
									</select>
							</td>

						<th id="row1">Jobs In Hand</th>
							<td>
							 <select name="Eligible" id="selectcolor">
								<option value="nill" style="color: black;">No Preference</option>
								<option value="0"style="color: black;">0 jobs</option>
								<option value="1"style="color: black;"><=1 jobs</option>
								<option value="2"style="color: black;"><=2 jobs</option>
								<option value="3"style="color: black;"><=3 jobs</option>
								<option value="4"style="color: black;"><=4 jobs</option>
							</select>
							</td>
						</tr>
				</table>
				<br><br>
				<div id="s1" >Advance Filter</div>
					<hr>
					<table  style="width:50%">
					<tr>
						<th>10<sup>th</sup> %</th>
							<td>
								  <label for="min10" ></label>
								  0<input type="range" name="min10" id="min10" value="100" min="0"  max="100" step="0.01">100

							</td>
							<th>12<sup>th</sup>%</th>
							<td>
								  <label for="min12" ></label>
								  0<input type="range" name="min12" id="min12"   value="100" min="0" max="100" step="0.01">100
							</td>
					</tr>
					<tr>
						<th align="left">No of Backlogs</th>
							<td>
								<!--<h4>Upto<h4>-->
								0<input type="range" name="backlogs" value="60" min=0 max=60/>60
							</td>
					</tr>
			</table>
				<div align="center" id="b1"><input type="submit" name="button" value="Submit"  /></form></div>
		 </form>
	</body>
</html>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gcgc");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$category = isset($_POST['category']) ? $_POST['category'] : ' ';
$computer = isset($_POST['CSE']) ? $_POST['CSE'] : ' ';
$electronics = isset($_POST['ECE']) ? $_POST['ECE'] : ' ';
$electrical = isset($_POST['EEE']) ? $_POST['EEE'] : ' ';
$civil = isset($_POST['Civil']) ? $_POST['Civil'] : ' ';
$mech = isset($_POST['Mech']) ? $_POST['Mech'] : ' ';
$Degree = isset($_POST['Degree']) ? $_POST['Degree'] : ' ';
$Gender = isset($_POST['Gender']) ? $_POST['Gender'] : ' ';
$mincgpa = isset($_POST['mincgpa']) ? $_POST['mincgpa'] : ' ';
$Sortby = isset($_POST['Sortby']) ? $_POST['Sortby'] : ' ';
$Eligible = isset($_POST['Eligible']) ? $_POST['Eligible'] : ' ';
$min10 = isset($_POST['min10']) ? $_POST['min10'] : ' ';
$min12 = isset($_POST['min12']) ? $_POST['min12'] : ' ';
$backlogs = isset($_POST['backlogs']) ? $_POST['backlogs'] : ' ';

// Attempt select query execution

if(isset($_POST['button'])){
	if($Eligible=='nill'){
		if($Degree=='nill' && $Gender=='nill' )
		{
					$sql="SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.Program='$category'
									            INTERSECT
												SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.b_tech_gpa BETWEEN $mincgpa  and 10
												INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.SSC_percent BETWEEN $min10  and 100
										INTERSECT
										 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.inter_percent BETWEEN $min12  and 100
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.no_of_backlogs BETWEEN $backlogs  and 60
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id  order by $Sortby

										";
		}
			else if($Gender=='nill')
			{
							$sql=	"SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.Program='$category'
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.YOP='$Degree'
										INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.b_tech_gpa BETWEEN $mincgpa  and 10
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.SSC_percent BETWEEN $min10  and 100
									INTERSECT
									 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.inter_percent BETWEEN $min12  and 100
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.no_of_backlogs BETWEEN $backlogs  and 60
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id  order by $Sortby
								";
			}
			else if($Degree=='nill')
			{
									$sql="SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.Program='$category'
									            INTERSECT
												SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.b_tech_gpa BETWEEN $mincgpa  and 10
												INTERSECT
												SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND personal_details_mdb.gender='$Gender'
												INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.SSC_percent BETWEEN $min10  and 100
										INTERSECT
										 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.inter_percent BETWEEN $min12  and 100
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.no_of_backlogs BETWEEN $backlogs  and 60
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id  order by $Sortby

										";
			}
			else
			{
					$sql = "SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.Program='$category'
									 INTERSECT
									 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND personal_details_mdb.gender='$Gender'
									 INTERSECT
									 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.YOP='$Degree'
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.b_tech_gpa BETWEEN $mincgpa  and 10
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.SSC_percent BETWEEN $min10  and 100
									INTERSECT
									 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.inter_percent BETWEEN $min12  and 100
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.no_of_backlogs BETWEEN $backlogs  and 60
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id  order by $Sortby


									 ";
			}
	}
	else{

		if($Degree=='nill' && $Gender=='nill' )
		{
					$sql="SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.Program='$category'
									            INTERSECT
												SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.b_tech_gpa BETWEEN $mincgpa  and 10
												INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.SSC_percent BETWEEN $min10  and 100
										INTERSECT
										 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.inter_percent BETWEEN $min12  and 100
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.no_of_backlogs BETWEEN $backlogs  and 60
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.Branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb,academic_details,cdt2020 WHERE cdt2020.PIU='Y' and personal_details_mdb.user_id=academic_details.user_id and personal_details_mdb.user_id=cdt2020.userid group by personal_details_mdb.user_id HAVING COUNT(personal_details_mdb.user_id) <=2
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id  order by $Sortby
										";
		}
			else if($Gender=='nill')
			{
							$sql=	"SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.Program='$category'
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.YOP='$Degree'
										INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.b_tech_gpa BETWEEN $mincgpa  and 10
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.SSC_percent BETWEEN $min10  and 100
									INTERSECT
									 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.inter_percent BETWEEN $min12  and 100
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.no_of_backlogs BETWEEN $backlogs  and 60
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.Branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb,academic_details,cdt2020 WHERE cdt2020.PIU='Y' and personal_details_mdb.user_id=academic_details.user_id and personal_details_mdb.user_id=cdt2020.userid group by personal_details_mdb.user_id HAVING COUNT(personal_details_mdb.user_id) <=2
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id  order by $Sortby
								";
			}
			else if($Degree=='nill')
			{
									$sql="SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.Program='$category'
									            INTERSECT
												SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.b_tech_gpa BETWEEN $mincgpa  and 10
												INTERSECT
												SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND personal_details_mdb.gender='$Gender'
												INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.SSC_percent BETWEEN $min10  and 100
										INTERSECT
										 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.inter_percent BETWEEN $min12  and 100
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.no_of_backlogs BETWEEN $backlogs  and 60
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.Branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb,academic_details,cdt2020 WHERE cdt2020.PIU='Y' and personal_details_mdb.user_id=academic_details.user_id and personal_details_mdb.user_id=cdt2020.userid group by personal_details_mdb.user_id HAVING COUNT(personal_details_mdb.user_id) <=2
										INTERSECT
										SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id  order by $Sortby

										";
			}
			else
			{
					$sql = "SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.Program='$category'
									 INTERSECT
									 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND personal_details_mdb.gender='$Gender'
									 INTERSECT
									 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.YOP='$Degree'
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.b_tech_gpa BETWEEN $mincgpa  and 10
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.SSC_percent BETWEEN $min10  and 100
									INTERSECT
									 SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.inter_percent BETWEEN $min12  and 100
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id AND academic_details.no_of_backlogs BETWEEN $backlogs  and 60
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.Branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb,academic_details,cdt2020 WHERE cdt2020.PIU='Y' and personal_details_mdb.user_id=academic_details.user_id and personal_details_mdb.user_id=cdt2020.userid group by personal_details_mdb.user_id HAVING COUNT(personal_details_mdb.user_id) <=2
									INTERSECT
									SELECT personal_details_mdb.user_id,personal_details_mdb.first_name,personal_details_mdb.middle_name,personal_details_mdb.last_name,academic_details.branch,personal_details_mdb.phone_no,personal_details_mdb.email_id,academic_details.SSC_percent,academic_details.inter_percent,academic_details.b_tech_gpa,academic_details.pass_category FROM personal_details_mdb , academic_details WHERE personal_details_mdb.user_id=academic_details.user_id  order by $Sortby


									 ";
			}


	}

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		echo "<div class ='tablecss'>";
        echo "<table border=1 >";
            echo "<tr>";

                echo "<th>User id</th>";
                echo "<th>First_name</th>";
                echo "<th>Middle_name</th>";
                echo "<th>Last name</th>";
                echo "<th>Branch</th>";
                echo "<th>Phone</th>";
                echo "<th>Email ID</th>";
                echo "<th>SSC Percent</th>";
                echo "<th>Inter Percent</th>";
                echo "<th>B.Tech GPA</th>";
                echo "<th>Pass Category</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['middle_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['branch'] . "</td>";
                echo "<td>" . $row['phone_no'] . "</td>";
                echo "<td>" . $row['email_id'] . "</td>";
                echo "<td>" . $row['SSC_percent'] . "</td>";
                echo "<td>" . $row['inter_percent'] . "</td>";
                echo "<td>" . $row['b_tech_gpa'] . "</td>";
                echo "<td>" . $row['pass_category'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
		echo "</div>";
    }
	else{
        echo "No records matching !!!!!!!";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>
