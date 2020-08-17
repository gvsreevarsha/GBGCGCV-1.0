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
      <button type="button" class="collapsible btn col-xs-12" style="background-color:#2B3E4D; color:white;" align="center">Change details</button>
      <div class="content">
        <form action="Change_BE.php" method="post">
          <div class="col-xs-12">&nbsp</div>
          <input type="text" style="visibility:hidden;"name="usn" value="<?php echo $adminid;?>" class="col-xs-12">

           <label class="col-xs-12"><div class="col-xs-3">First Name</div><div class="col-xs-7"><input type="text" name="fname" value="<?php echo $row["first_name"];?>" class="col-xs-12"></div></label>
           <label class="col-xs-12"><div class="col-xs-3">middle_name</div><div class="col-xs-7"><input type="text" name="mname" value="<?php echo $row["middle_name"];?>" class="col-xs-12"></div></label>
           <label class="col-xs-12"><div class="col-xs-3">last_name</div><div class="col-xs-7"><input type="text" name="lname" value="<?php echo $row["last_name"];?>" class="col-xs-12"></div></label>
           <div class="col-xs-12">&nbsp</div>
           <label class="col-xs-12"><div class="col-xs-5"></div><div class="col-xs-2"><input type="Submit" name="confirm" value=Submit class="col-xs-9 btn"style="background-color:#2B3E4D; color:white; "></label></div>
           <div class="col-xs-12">&nbsp</div>
        </form>
      </div>
      <button type="button" class="collapsible btn col-xs-12"style="background-color:#2B3E4D; color:white; " align="center">Change password</button>
      <div class="content"><br>

        <form action="PassBE.php" method="post">
          <div class="col-xs-12">&nbsp</div>
          <input type="text" style="visibility:hidden;"name="usn" value="<?php echo $adminid;?>" class="col-xs-12">
           <label class="col-xs-12"><div class="col-xs-3">Old Password</div><div class="col-xs-7"><input type="password" name="oldpass" class="col-xs-12"></div></label>
           <label class="col-xs-12"><div class="col-xs-3">New Password</div><div class="col-xs-7"><input type="password" name="newpass1"  class="col-xs-12"></div></label>
           <label class="col-xs-12"><div class="col-xs-3">Confirm New Password</div><div class="col-xs-7"><input type="Password" name="newpass2"  class="col-xs-12"></div></label>
           <div class="col-xs-12">&nbsp</div>
           <label class="col-xs-12"><div class="col-xs-5"></div><div class="col-xs-2"><input type="Submit" name="confirm" value=Submit class="col-xs-9 btn"style="background-color:#2B3E4D; color:white; "></label></div>
           <div class="col-xs-12">&nbsp</div>
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
