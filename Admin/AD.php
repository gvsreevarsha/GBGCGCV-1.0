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
    <div class="col-xs-6 col-md-10 p-3" style="background-color:#edf2f6;height:100%; width:100%;">
			<?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
	    		<div name="message"><?php echo $_GET['msg']; ?> </div>
			<?php } ?>
			<button type="button" class="collapsible btn btn-primary col-xs-12" align="center" style="background-color:#2B3E4D; color:white; ">Set Data Manually</button>
			<div class="content">

				<form action="ADBE.php" method="post"style="color:#868686;">

			  	<div class="col-xs-12">&nbsp</div>
			  	<label class="col-xs-12"><div class="col-xs-3">User Id:</div><input type="text" name="userid" class="col-xs-9"></label>
			  	<label class="col-xs-12"><div class="col-xs-3">Year of Passing :</div><input type="number" name="ADYOP" min="2020" max="2100"class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">SSC/SSLC :</div><input type="number" name="ADSS"min="1"max="100" step="0.01" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">INTER/PUC :</div><input type="number" name="ADINTER" min="1"max="100" step="0.01" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Section :</div> <select id="Branch" class="col-xs-3" name="Branch">
	                                          <option value="CSE">CSE</option>
	                                          <option value="ECE">ECE</option>
	                                          <option value="EEE">EEE</option>
	                                          <option value="CIVIL">CIVIL</option>
																						<option value="MECH">MECH</option>
																					</select></label>
					<label class="col-xs-12"><div class="col-xs-3">Program :</div><input type="text" name="Program" value="B.Tech" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">B.Tech GPA:</div><input type="number" name="ADGPA"min="1"max="100" step="0.01" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Pass Category :</div><input type="text" name="ADPG" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Active Backlog :</div><input type="number" name="ADBL"min="0"max="30" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Section :</div><input type="text" name="section" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Resume :</div><input type="file" name="ADRES" value="NULL" class="col-xs-9"></label>
				<div class="col-xs-12">&nbsp</div>
				<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn btn-primary" type="Submit" style="background-color:#2B3E4D; color:white; ">Submit</button></div>
				<div class="col-xs-12">&nbsp</div>
			  </form>
			</div>
			<button type="button" class="collapsible btn btn-primary col-xs-12" align="center" style="background-color:#2B3E4D; color:white; ">Upload File</button>
			<div class="content"><br>
				<form action="ADimport.php" method="post" enctype="multipart/form-data"style="color:#868686;">
						<div class="form-group">
								<label for="file">Upload an excel file<br>To download template click <a href="academicdetails.csv" download>HERE</a></label>
								<input type="file" name="file" id="file">
								<p class="help-block">Only Excel/CSV File Import.</p>
						</div>
						<button type="submit" class="btn btn-default" name="submit" value="submit" style="background-color:#2B3E4D; color:white; ">Upload</button>
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
