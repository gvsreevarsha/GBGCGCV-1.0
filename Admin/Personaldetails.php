<?php require 'Adminheader.php'?>
<style type="text/css">
   a:hover{background-color: #264c59;}
  .collapsible {
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: 1px white;
          outline: none;
          font-size: 15px;
        }

  .active, .collapsible:hover {
          background-color: white;
        }

    .content {
          padding: 0 18px;
          display: none;
          overflow: hidden;
          background-color: #ffffff;
        }
</style>
<body>
  <div class="row">
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3" style="background-color:#edf2f6;">
		<?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
				<div name="message"><?php echo $_GET['msg']; ?> </div>
		<?php } ?>
		<button type="button" class="collapsible btn col-xs-12" style="background-color:#2B3E4D; color:white; " align="center">Set Data Manually</button>
		<div class="content">
			<form method="POST" action="PDBE.php" style="color:#868686;">
				<div class="col-xs-12">&nbsp</div>
				<label class="col-xs-12"><div class="col-xs-3">User Id:</div><input type="text" name="user" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">First Name:</div><input type="text" name="f_name" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Middle Name:</div><input type="text" name="m_name" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Last Name:</div><input type="text" name="l_name" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Gender:</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" id="male" name="gender" value="male" class="col-xs-3"><label for="male">Male</label></div>
					<div class="col-xs-2"><input type="radio" id="female" name="gender" value="female" class="col-xs-3"><label for="female">Female</label></div>
					</div>
			</label>
			<label class="col-xs-12"><div class="col-xs-3">DOB:</div><input type="date" id="dob" name="dob"></label>
			<label class="col-xs-12"><div class="col-xs-3">Blood Group:</div><input type="text" name="bg" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Permanent address:</div><input type="text" name="pa" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Phone Number:</div><input type="text" name="ph" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Email Id:</div><input type="text" name="em" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Father name:</div><input type="text" name="fn" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Father Occupation:</div><input type="text" name="fo" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Father Contact Number:</div><input type="text" name="fc" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Father Mail Id:</div><input type="text" name="fm" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Mother Name:</div><input type="text" name="mn" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Mother Occupation:</div><input type="text" name="mo" class="col-xs-9"></label>
			<label class="col-xs-12"><div class="col-xs-3">Reservation Category:</div><input type="text" name="rc" class="col-xs-9"></label>
			<div class="col-xs-12">&nbsp</div>
			<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn btn-primary" type="Submit" style="background-color:#2B3E4D; color:white; ">Submit</button></div>
			<div class="col-xs-12">&nbsp</div>
			</form>
		</div>
		<button type="button" class="collapsible btn col-xs-12" style="background-color:#2B3E4D; color:white; " align="center">Upload File</button>
		<div class="content"><br>
			<form action="PDimort2.php" method="post" enctype="multipart/form-data"style="color:#868686;">
					<div class="form-group">
							<label for="file">Upload an excel file<br>To download template click <a href="personal_details_mdb.csv" download>HERE</a></label>
							<input type="file" name="file" id="file">
							<p class="help-block">Only Excel/CSV File Import.</p>
					</div>
					<button type="submit" class="btn btn-default" name="submit" value="submit" style="background-color:#2B3E4D; color:white; "> Upload </button>
			</form>

			</div>
    </div>
  </div>
  <script>
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
  			coll[i].addEventListener("click", function() {
    		this.classList.toggle("active");
    		var content = this.nextElementSibling;
    		if (content.style.display === "block") {
      			content.style.display = "none";
    		} else {
    		  content.style.display = "block";
    		}
  			});
		}
	</script>
</body>
<?php require 'Adminfooter.php'?>
