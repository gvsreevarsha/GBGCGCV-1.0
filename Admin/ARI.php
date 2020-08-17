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
			<button type="button" class="collapsible btn col-xs-12" style="background-color:#2B3E4D; color:white;" align="center">Set Data Manually</button>
			<div class="content">


			  <form action="ARIBE.php" method="post">

			  	<div class="col-xs-12">&nbsp</div>
			  	<label class="col-xs-12"><div class="col-xs-3">User Id:</div><input type="text" name="userid" class="col-xs-9"></label>
			  	<label class="col-xs-12"><div class="col-xs-3">AT1 Date :</div><input type="date" name="AT1date" class="col-xs-9"></label>
			    <label class="col-xs-12"><div class="col-xs-3">AT1 score :</div><input type="number" name="AT1_score"min="1"max="100" class="col-xs-9"></label>
	        <label class="col-xs-12"><div class="col-xs-3">At1 rank :</div><input type="number" name="AT1_ranks" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">AT1 Date :</div><input type="date" name="AT2date" class="col-xs-9"></label>
			    <label class="col-xs-12"><div class="col-xs-3">AT1 score :</div><input type="number" name="AT2_score"min="1"max="100" class="col-xs-9"></label>
	        <label class="col-xs-12"><div class="col-xs-3">At1 rank :</div><input type="number" name="AT2_ranks" class="col-xs-9"></label>

				<div class="col-xs-12">&nbsp</div>
				<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn btn-primary" type="Submit">Submit</button></div>
				<div class="col-xs-12">&nbsp</div>
			  </form>
			</div>
			<button type="button" class="collapsible btn btn-primary col-xs-12"style="background-color:#2B3E4D; color:white; " align="center">Upload File</button>
			<div class="content"><br>


				<form action="ARIimport.php" method="post" enctype="multipart/form-data"style="color:#868686;">
						<div class="form-group">
								<label for="file">Upload an excel file<br>To download template click <a href="ARI.csv" download>HERE</a></label>
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
