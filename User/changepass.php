<?php require ("userheader.php"); ?>
<center>
<div class="content"><br>

  <form action="userpass.php" method="post">
    <div class="col-xs-12">&nbsp</div>
    <input type="text" style="visibility:hidden;"name="usn" value="<?php echo $usn;?>" class="col-xs-12"> <br>
     <label class="col-xs-12"><div class="col-xs-3">  Old Password</div><div class="col-xs-7"><input type="password" name="oldpass" class="col-xs-12"></div></label> <br>
     <label class="col-xs-12"><div class="col-xs-3">New Password</div><div class="col-xs-7"><input type="password" name="newpass1"  class="col-xs-12"></div></label> <br>
     <label class="col-xs-12"><div class="col-xs-3">Confirm New Password</div><div class="col-xs-7"><input type="Password" name="newpass2"  class="col-xs-12"></div></label> <br>
     <div class="col-xs-12">&nbsp</div>
     <label class="col-xs-12"><div class="col-xs-5"></div><div class="col-xs-2"><input type="Submit" name="confirm" value=Submit class="col-xs-9 btn"style="background-color:#2B3E4D; color:white; "></label></div>
     <div class="col-xs-12">&nbsp</div>
  </form>

</div>

</center>





<?php require ("userfooter.php"); ?>
