<?php require ('Adminheader.php')?>
<head>
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript">
      var expanded = false;
      function showCheckboxes(){
          var checkboxes = document.getElementById("checkboxes");
          if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
          }
          else {
            checkboxes.style.display = "none";
            expanded = false;
          }
      }
      function myFunction(x) {
                    var change = document.getElementById("select");
                        change.innerHTML = x;
      }
    </script>

</head>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input[type=range] {
  -webkit-appearance: none; /* Hides the slider so that custom slider can be made */
  width: 100%; /* Specific width is required for Firefox. */
  background: transparent; /* Otherwise white in Chrome */
}

input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
}

input[type=range]:focus {
  outline: none; /* Removes the blue border. You should probably do some kind of focus styling for accessibility reasons though. */
}

input[type=range]::-ms-track {
  width: 100%;
  cursor: pointer;

  /* Hides the slider so custom styles can be added */
  background: transparent;
  border-color: transparent;
  color: transparent;
}

.collapsible {
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: 1px solid white;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  overflow: hidden;
  background-color: #f1f1f1;
}
      .right{
        float: right;
      }
      .dropbtn {
        font-size: 16px;
        border: 1 solid black;
      }
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        z-index: 1;
      }
      .dropdown-content form {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropdown-content form:hover {background-color:#ddd;}
      .dropdown:hover .dropdown-content {display: block;}
</style>
</head>
<body>
	<div class="row">
		<?php require "Adminleft.php"?>
	<div class="container" >
		<button type="button" class="collapsible btn-primary col-xs-9" align="center" style="background-color:#000080; color: white; font-weight: lighter;font-size:20px;">Filter Students</button>
		<div class="content">
		  <form>
		  	<div class="col-xs-9">&nbsp</div>
		  	<h2 class="col-xs-9">Education Filter</h2>
        <table class="col-xs-9 table table-borderless align-middle"  align="center">
        <hr class="bg-success text-white" style="border: 0;
    border-top: 1px solid #000;
    margin: 20px 0;visibility:visible;">
          <tr>
            <th class="col-xs-3"style="text-align:-webkit-left ">Degree</th>
            <th class="col-xs-3" style="text-align:center">Branch</th>
            <th class="col-xs-3" style="text-align:center">CGPA</th>
          </tr>
          <tr>
            <td class="col-xs-3">
              <div class="dropdown" align="center" class="col-xs-2">
                <select>
                	<option style="color: black;">Any</option>
                	<option style="color: black;">B Tech</option>
                	<option style="color: black;">MBA</option>
                </select>
            </td>
            <td class="col-xs-3" align="center">
              <div class="dropdown pl-3">
                <button class="dropbtn" style="color: black; background: #fff">Select option</button>
                <div class="dropdown-content">
                  <form>
                    <label><input type="checkbox" name="CSE">Computer Science Engineering</label>
                    <label><input type="checkbox" name="ECE">Electronics and Communications Engineering</label>
                    <label><input type="checkbox" name="ME">Mechanical Engineering</label>
                    <label><input type="checkbox" name="Civil">Civil Engineering</label>
                    <label><input type="checkbox" id="eee">Electrical and Electronics Engineering</label>
                    <label><input type="checkbox" id="Electrical">Electrical and Communications Engineering</label>
                    <label><input type="checkbox" id="automation">Automation and Robotics Engineering</label>
                  </form>
                </div>
              </div>
            </td>
            <td>
              <div>
                  <div data-role="main" class="ui-content">
                    <form method="post" action="/action_page_post.php">
                        <div data-role="rangeslider" style="background-color:">
                          <label for="cgpa-min"></label>
                          <input type="range" name="cgpa-min" id="cgpa-min" value="0" min="0" max="10" step="0.01">
                          <label for="cgpa-max"></label>
                          <input type="range" name="cgpa-max" id="cgpa-max" value="10" min="0" max="10" step="0.01">
                        </div>
                      </form>
                    </div>
                  </div>
              </td>
          </tr>
        </table>
        <h2 class="col-xs-12">Other Filter</h2>
              <hr class="bg-success text-white" style="    border: 0;
    border-top: 1px solid #000;
    margin: 20px 0;visibility:visible;">
        <table class="table table-borderless">
          <tr class="col-xs-12">
            <th class="p-4 col-xs-6">Batch</th>
            <td class="col-xs-2">
              <select name="Degree">
                <option value="2016"  style="color: black;">2016</option>
                <option value="2017"  style="color: black;">2017</option>
                <option value="2018"  style="color: black;">2018</option>
                <option value="2019"  style="color: black;">2019</option>
                <option value="2020"  style="color: black;">2020</option>
                <option value="2021"  style="color: black;">2021</option>
              </select>
            </td>
            <th class="p-4 col-xs-6">Sort By</th>
            <td class="col-xs-2">
              <select name="Sortby">
                <option value="select"  style="color: black;">Select Sorting Order...</option>
                <option value="Name"  style="color: black;">Name</option>
                <option value="Branch"  style="color: black;">Branch</option>
                <option value="Rollno"  style="color: black;">Roll No</option>
                <option value="Institute"  style="color: black;">Institute marks</option>
                <option value="10th"  style="color: black;">10th Marks</option>
                <option value="12th"  style="color: black;">12th Marks</option>
                <option value="Last"  style="color: black;">Last Login</option>
                <option value="Gender"  style="color: black;">Gender</option>
              </select>
            </td>
            </tr>
            <tr class="col-xs-12">
            <th class="p-4 col-xs-5">Gender</th>
            <td class="col-xs-2">
              <select name="Gender">
                <option value="no"  style="color: black;">No Preference</option>
                <option value="male"  style="color: black;">Male</option>
                <option value="female"  style="color: black;">Female</option>
              </select>
            </td>


            <th class="p-4 col-xs-8">Jobs In Hand</th>
            <td class="col-xs-2">
              <select name="Eligible">
                <option value="no" style="color: black;">No Preference</option>
                <option value="0"style="color: black;">0 jobs</option>
                <option value="1"style="color: black;"><=1 jobs</option>
                <option value="2"style="color: black;"><=2 jobs</option>
                <option value="3"style="color: black;"><=3 jobs</option>
                <option value="4"style="color: black;"><=4 jobs</option>
              </select>
            </td>
            <td class="col-xs-8"></td>
          </tr>
        </table>
        <div class="col-xs-12">&nbsp</div>
        <h2 class="col-xs-12">Advance Filter</h2>
                <hr class="bg-success text-white" style="    border: 0;
    border-top: 1px solid #000;
    margin: 20px 0;visibility:visible;">
        <table class="col-xs-12 table table-borderless">
          <tr>
            <th class="p-5 pr-4 col-xs-1">10<sup>th</sup> %</th>
            <td class="col-xs-5">
              <div>
                  <div data-role="main" class="ui-content">
                    <form method="post" action="/action_page_post.php">
                        <div data-role="rangeslider">
                          <label for="10thper-min"></label>
                          <input type="range" name="10thper-min" id="10thper-min" value="0" min="0" max="100">
                          <label for="10thper-max"></label>
                          <input type="range" name="10thper-min" id="10thper-min" value="100" min="0" max="100">
                        </div>
                      </form>
                    </div>
                  </div>
              </td>
              <th class="p-5 pr-4 col-xs-1">12<sup>th</sup> %</th>
            <td class="col-xs-5">
              <div>
                  <div data-role="main" class="ui-content">
                    <form method="post" action="/action_page_post.php">
                        <div data-role="rangeslider">
                          <label for="12thper-min"></label>
                          <input type="range" name="12thper-min" id="12thper-min" value="0" min="0" max="100">
                          <label for="12thper-max"></label>
                          <input type="range" name="12thper-min" id="12thper-min" value="100" min="0" max="100">
                        </div>
                      </form>
                    </div>
                  </div>
              </td>
          </tr>
          <tr>
          </table>
           <!-- <th class="col-xs-1">Backlogs</th>
            <td class="col-xs-5" align="center">
              upto<input type="range" name="Backlogs" min="0" max="60">
              </td>
          </tr>
        </table>!-->
        <table class="col-xs-8 align-baseline" align="center" >
        <tr>
        <th class="col-xs-2 align-middle"></th>
        <th class="col-xs-2 ">No. of Backlog/'s:</th>
         <td class="col-xs-5" align="center">
              upto<input type="range" name="Backlogs" min="0" max="60">
              </td>
          </tr>
          </table>
         <div class="col-xs-12">&nbsp</div>
         <div class="col-xs-12">&nbsp</div>
        </div>
        <div class="col-xs-12">
        	<div class="col-xs-4"></div>
        	<div class="col-xs-4"><button style="background-color:green;color:white;font-weight: lighter;" type="submit">Submit</button></div>
        	<div class="col-xs-4"></div>
        </div>
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
    		if (content.style.display == "block") {
      			content.style.display = "none";
    		} else {
    		  content.style.display = "block";
    		}
  			});
		}
	</script>
</body>
