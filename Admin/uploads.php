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

          <h1 class="p-3" style="color:#868686">Uploads</h1>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="user.php">User</a><br><br>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="Personaldetails.php">Personal details</a><br><br>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="AD.php">Acadamic details</a><br><br>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="ARI.php">ARI</a><br><br>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="ARE_AMCAT.php">ARE AMCAT</a><br><br>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="ARE_COC.php">ARE CoCubes</a><br><br>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="CDT.php">CDT</a><br><br>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="ITA.php">ITA</a><br><br>
          <a class="p-3 col-xs-12" style="color:#868686; text-decoration:none;" href="Company.php">Company details</a><br><br>
      </div>
    </div>
  </div>
</body>
<?php require 'Adminfooter.php'?>
