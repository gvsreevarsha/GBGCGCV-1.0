<?php require 'Adminheader.php'?>
<head>
    <script type="text/javascript">
        function updateCGPA(val) {
          document.getElementById('CGPA').innerHTML=val; 
        }
        function update10(val) {
          document.getElementById('10th').innerHTML=val; 
        }
        function update12(val) {
          document.getElementById('12th').innerHTML=val; 
        }
        function updateback(val) {
            if(val==-1)
                document.getElementById('back').innerHTML="never"; 
            else if(val==0)
                document.getElementById('back').innerHTML="currently none"; 
            else if(val==11)
                document.getElementById('back').innerHTML="not applicable"; 
            else
                document.getElementById('back').innerHTML="upto "+val; 
        }
    </script>
</head>
<body>
  <div class="container2">
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3 back">
        <div class="col-xs-12 p-2 Heading">&emsp;Manage Students</div>
        <div class=" col-xs-12 btn btn-blue subheading" style="font-size: 20px;"><span class="col-xs-1">Search Filter</span><span class="col-xs-3 col-xs-offset-8">Total Students:</span></div>
        <div class="col-xs-12 p-3 backwhite">
          <form method="POST" action="student-display.php">
            <div class="col-xs-12" style="padding: 5px;"><b>Education Filter</b></div>
            <div class="col-xs-12"></div>
            <div class="col-xs-12 p-0"><hr class="text-white" style="margin: 0px;"></div>
            <table width="100%">
                <tr>
                    <td class="col-xs-3 p-2 runningtext">Degree</td>
                    <td class="col-xs-3 p-2 runningtext">Branch</td>
                    <td class="col-xs-3 p-2 runningtext">CGPA(<span id="CGPA">0</span>-10)</td>
                </tr>
                <tr>
                    <td class="col-xs-3 p-2">
                        <select name="degree" class="col-xs-12 btn runningtext" style="border-color: #edf2f6;">
                            <option value="Any">Any</option>
                            <option value="BTech">BTech</option>
                            <option value="MBA">MBA</option>
                        </select>
                    </td>
                    <td class="col-xs-3 p-2">
                        <select name="branch" class="col-xs-12 btn runningtext" style="border-color: #edf2f6;">
                            <option value="selectall">Select All</option>
                            <option value="CSE">Computer Science Engineering</option>
                            <option value="ECE">Electronics and Communication Engineering</option>
                            <option value="EEE">Electrical and Electronics Engineering</option>
                            <option value="CIVIL">Civil Engineering</option>
                            <option value="MECH">Mechanical Engineering</option>
                        </select>
                    </td>
                    <td class="col-xs-3 p-2">
                        <div class="col-xs-10">
                            <input type="range" value=0 name="CGPA" min="0" max="10" onchange="updateCGPA(this.value);"></div>
                        <span class="col-xs-2 glyphicon glyphicon-filter"></span>
                    </td>
                </tr>
            </table>
            <div class="col-xs-12" style="padding: 5px;"><b>Other Filter</b></div>
            <div class="col-xs-12 p-0"><hr class="text-white" style="margin: 0px;"></div>
            <table width="100%">
                <tr>
                    <td class="col-xs-6 p-2">
                        <div class="col-xs-4 p-3 runningtext">Batch</div>
                        <div class="col-xs-8 p-2">
                            <select name="batch" class="col-xs-12 btn runningtext" style="border-color: #edf2f6;">
                                <option value="nill">No Preference</option>
                                <option value="2016" >2016</option>
                                <option value="2017" >2017</option>
                                <option value="2018" >2018</option>
                                <option value="2019" >2019</option>
                                <option value="2020" >2020</option>
                                <option value="2021"  >2021</option>
                            </select>
                        </div>
                    </td>
                    <td class="col-xs-6 p-2">
                        <div class="col-xs-4 p-3 runningtext">Sort By</div>
                        <div class="col-xs-8 p-2">
                            <select class="col-xs-12 btn runningtext" name="sortby" style="border-color: #edf2f6;">
                                <option value="2">Name</option>
                                <option value="5">Branch</option>
                                <option value="1">Roll No</option>
                                <option value="8">Institute marks</option>
                                <option value="6">10th Marks</option>
                                <option value="7">12th Marks</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="col-xs-6 p-2">
                        <div class="col-xs-4 p-3 runningtext">Gender</div>
                        <div class="col-xs-8 p-2">
                            <select class="col-xs-12 btn runningtext" name="gender" style="border-color: #edf2f6;">
                                <option value="nill">No Preference</option>
                                <option value="M" >Male</option>
                                <option value="F" >Female</option>
                            </select>
                        </div>
                    </td>
                    <td class="col-xs-6 p-2">
                        <div class="col-xs-4 p-3 runningtext">Eligible For Job</div>
                        <div class="col-xs-8 p-2">
                            <select class="col-xs-12 btn runningtext" name="jobeligible" style="border-color: #edf2f6;">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="col-xs-6 p-2"></td>
                    <td class="col-xs-6 p-2">
                        <div class="col-xs-4 p-3 runningtext">Jobs In Hand</div>
                        <div class="col-xs-8 p-2 runningtext">
                            <select name="jobsinhand" class="col-xs-12 btn runningtext" style="border-color: #edf2f6;">
                                <option value="nill" style="color: black;">No Preference</option>
                                <option value="0"style="color: black;">0 jobs</option>
                                <option value="1"style="color: black;"><=1 jobs</option>
                                <option value="2"style="color: black;"><=2 jobs</option>
                                <option value="3"style="color: black;"><=3 jobs</option>
                                <option value="4"style="color: black;"><=4 jobs</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="col-xs-12" style="padding: 5px;"><b>Advance Filter</b></div>
            <div class="col-xs-12 p-0"><hr class="text-white" style="margin: 0px;"></div>
            <table width="100%">
                <tr>
                    <td class="col-xs-6 p-2">
                        <div class="col-xs-4 p-3 runningtext">10th%(<span id="10th">0</span>-100)</div>
                        <div class="col-xs-8 p-2 runningtext">
                            <input type="range" value=0 name="10th" min="0" max="100" step="5" onchange="update10(this.value);">
                        </div>
                    </td>
                    <td class="col-xs-6 p-2">
                        <div class="col-xs-4 p-3 runningtext">12th%(<span id="12th">0</span>-100)</div>
                        <div class="col-xs-8 p-2 runningtext">
                            <input type="range" value="0" name="12th" min="0" max="100" step="5" onchange="update12(this.value);">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="col-xs-6 p-2">
                        <div class="col-xs-4 p-3 runningtext">Backlogs(<span id="back">never</span>)</div>
                        <div class="col-xs-8 p-2">
                            <input type="range" name="backlogs" min="-1" max="11" value="-1" onchange="updateback(this.value);">
                        </div>
                    </td>
                    <td class="col-xs-6 p-2"></td>
                </tr>
            </table>
            <div class="col-xs-12" align="center"><input type="Submit" class="btn btn-blue" name="Submit" value="Submit"></div>
           </form>
        </div>
    </div>
  </div>
</body>
<?php require 'Adminfooter.php'?>