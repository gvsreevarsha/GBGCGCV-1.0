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
			  <form action="ARE_AMCATBE.php" method="post">

			  	<div class="col-xs-12">&nbsp</div>
			  	<label class="col-xs-12"><div class="col-xs-3">User Id:</div><input type="text" name="userid" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">DATE :</div><input type="date" name="date" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Assessment ID :</div><input type="text" name="Assessment_id" class="col-xs-9"></label>
			  	<label class="col-xs-12"><div class="col-xs-3">logical ability (900) :</div><input type="number" name="logic900"min="0"max="900" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">logical ability percentail :</div><input type="number" name="logicP"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">English comprehension(900) :</div><input type="number" name="English900"min="0"max="900" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">English comprehension percentail :</div><input type="number" name="EnglishP"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Quantitative ability(900) :</div><input type="number" name="quant900"min="0"max="900" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Quantitative ability percentail :</div><input type="number" name="quantP"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Automata(100) :</div><input type="number" name="Auto900"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Automata ability percentail :</div><input type="number" name="AutoP"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Automata Fix(100) :</div><input type="number" name="AutoF900"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Automata Fix percentail :</div><input type="number" name="AutoFP"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Domain 1 (900) :</div><input type="number" name="dom1900"min="0"max="900" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Domain 1 percentail :</div><input type="number" name="dom1P"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Domain 2 (900) :</div><input type="number" name="dom2900"min="0"max="900" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Domain 2 percentail :</div><input type="number" name="dom2P"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Domain Average (900) :</div><input type="number" name="domA900"min="0"max="900" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Domain Average percentail :</div><input type="number" name="domAP"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Over all score (3800):</div><input type="number" name="overall"min="1"max="3800" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">over all score percentail :</div><input type="number" name="overP"min="0"max="100" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Over all rank :</div><input type="number" name="overR" class="col-xs-9"></label>
					<label class="col-xs-12"><div class="col-xs-3">Remarks :</div><input type="text" name="remark" class="col-xs-9"></label>


				<div class="col-xs-12">&nbsp</div>
				<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn btn-primary" type="Submit">Submit</button></div>
				<div class="col-xs-12">&nbsp</div>
			  </form>
			</div>
      <button type="button" class="collapsible btn btn-primary col-xs-12"style="background-color:#2B3E4D; color:white; " align="center">Upload File</button>
      <div class="content"><br>


        <form action="ARE_AMCATimport.php" method="post" enctype="multipart/form-data"style="color:#868686;">
            <div class="form-group">
                <label for="file">Upload an excel file<br>To download template click <a href="are_amcat.csv" download>HERE</a></label>
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
