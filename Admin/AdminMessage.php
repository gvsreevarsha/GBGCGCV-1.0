<?php require 'Adminheader.php'?>
<?php
if(isset($_POST['year']))
{
$year=$_POST['year'];
}
else if(isset($_GET['year']))
{
$year=$_GET['year'];
}
else
{
  $year=2020;
}
?>
<body>
  <div class="row">
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3 back">
    <?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
        <div name="message"><?php echo $_GET['msg']; ?> </div>
    <?php } ?>
    <button type="button" class="collapsible btn col-xs-12 btn-blue">Phone</button>
    <div class="content">
      <form method="POST" action="PDBE.php" style="color:#868686;">
        <label for="year"><h3>Year-</h3></label>
        <select name="year" id="year" style="background-color: #2B3E4D; color: white; font-size: 18px;">
          <option value="2020" style="visibility: hidden;"><?php echo $year;?></option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
        </select>
        <label class="col-xs-12"><div class="col-xs-2" align="left">Message:</div><textarea rows="2" cols="80" name="address"></textarea></label>
        <div class="col-xs-12"><input type="Submit" name="Send" value="Send SMS"></div>
        <div class="col-xs-12">&nbsp;</div>
      </form>
    </div>
    <button type="button" class="collapsible btn col-xs-12" style="background-color:#2B3E4D; color:white; " align="center">Email</button>
    <div class="content"><br>
      <form method="POST" action="PDBE.php" style="color:#868686;">
        <label for="year"><h3>Year-</h3></label>
        <select name="year" id="year" style="background-color: #2B3E4D; color: white; font-size: 18px;">
          <option value="2020" style="visibility: hidden;"><?php echo $year;?></option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
        </select>
        <label class="col-xs-12"><div class="col-xs-2" align="left">Message:</div><textarea rows="2" cols="80" name="address"></textarea></label>
        <div class="col-xs-12"><input type="Submit" name="Send" value="Send Email"></div>
        <div class="col-xs-12">&nbsp;</div>
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
