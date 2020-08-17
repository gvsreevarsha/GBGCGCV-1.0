
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
<body style="height:80%; width:100%; bottom:15%";>
  <div class="row">
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3" style="background-color:#edf2f6;">
    <div class="col-xs-9">
        <div class="col-xs-9"><h3>Manage Individual Student</h3></div>
        <div class="col-xs-1">&nbsp</div>

    </div>
    <form action="ISBE.php" method="post">
    <div class="col-xs-12">
        <div class="col-xs-12" style="padding:5px; background-color:#2B3E4D; color: #ffffff;" >Search Student</div>
          <div class="col-xs-12">&nbsp</div>
          <div class="col-xs-12">
              <div class="col-xs-4">
              <div class="col-xs-5">Search By:</div>
                Student roll no:
            </div>
              <div class="col-xs-6">
                  <input class="col-xs-7" type="text" placeholder="Enter the Roll no:" name="user">
                  <div class="col-xs-1"></div>
                  <input type="submit" name="Submit" class="btn btn-primary" value="submit">

              </div>
            </div>
        </div>
        <div class="col-xs-1"></div>
      </div>

    </form>
  </div>
</body>
<?php require 'Adminfooter.php'?>
<?php
if($_POST['Submit']){
$_SESSION['IS'] = $_POST[user];
header('Location: IS\\ISindex.php');
}

 ?>
