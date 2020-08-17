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
			<div class=" col-xs-9" align="center">

				<form action="companyBE.php" method="post">

					<div class="col-xs-12">&nbsp</div>
					<label class="col-xs-12"><div class="col-xs-3">Company id:</div><input type="text" name="cid" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Company Name :</div><input type="text" name="companyname"class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Company Logo :</div><input type="text" name="logo"class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Company offical website :</div><input type="text" name="website" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Employee strength:</div><input type="number" name="emp_str" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Annual turnover :</div><input type="number" name="turnover" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">About the company :</div><input type="text" name="about" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">HR Name :</div><input type="text" name="HRname" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Technical interviwer Name :</div><input type="text" name="techname" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Recruitment Date :</div><input type="date" name="date" class="col-xs-9"></label>
				<div class="col-xs-12">&nbsp</div>
				<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn btn-primary" type="Submit">Submit</button></div>
				<div class="col-xs-12">&nbsp</div>
				</form>
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
