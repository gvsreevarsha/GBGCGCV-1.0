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
  <div class="row" >
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3" style="background-color:#edf2f6;">
			<?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
				<div name="message"><?php echo $_GET['msg']; ?> </div>
		<?php } ?>
			<button type="button" class="collapsible btn col-xs-12"  style="background-color:#2B3E4D; color:white;" align="center">Set Data Manually</button>
			<div class="content">
			  <form action="ITABE.php" method="post">

			  	<div class="col-xs-12">&nbsp</div>
			  	<label class="col-xs-12"><div class="col-xs-3">User Id:</div><input type="text" name="userid" class="col-xs-9"></label>
			  	<label class="col-xs-12"><div class="col-xs-3">Name of The Trg  Programme :</div><input type="text" name="name_trg" class="col-xs-9"></label>
			  	<label class="col-xs-12"><div class="col-xs-3">Date :</div><input type="date" name="date_of_trg"min="2018-01-01"></label>
	        <label class="col-xs-12"><div class="col-xs-3">Session :</div><div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="FN_AF" value="FN" class="col-xs-3"> Morning </div>
					<div class="col-xs-2"><input type="radio" name="FN_AF"  value="AF"class="col-xs-2"> Afternoon </div>
					</div>
				</label>
	        <label class="col-xs-12"><div class="col-xs-3">Attendance :</div>
						<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Attend" value="PS" class="col-xs-3">Present</div>
					<div class="col-xs-2"><input type="radio" name="Attend"  value="AB"class="col-xs-2">Absent</div>
					</div></label>

				<div class="col-xs-12">&nbsp</div>
				<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn " type="Submit"  style="background-color:#2B3E4D; color:white;">Submit</button></div>
				<div class="col-xs-12">&nbsp</div>
			  </form>
			</div>
			<button type="button" class="collapsible btn btn-primary col-xs-12"style="background-color:#2B3E4D; color:white; " align="center">Upload File</button>
			<div class="content"><br>


				<form action="ITAimport.php" method="post" enctype="multipart/form-data"style="color:#868686;">
						<div class="form-group">
								<label for="file">Upload an excel file<br>To download template click <a href="ITA.csv" download>HERE</a></label>
								<input type="file" name="file" id="file">
								<p class="help-block">Only Excel/CSV File Import.</p>
						</div>
						<button type="submit" class="btn btn-default" name="submit" value="submit"style="background-color:#2B3E4D; color:white;">Upload</button>
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
