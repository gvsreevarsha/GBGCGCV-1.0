<div>
  <div class="row" style="background-color:#edf2f6;">
    <div  class="container-fluid">
      <table class="col-sm-12" valign="center" cellpadding="20px;">
        <tr class="col-sm-12">
          <td width="50%">
            <div class="col-sm-12" style="border-radius:10px; background-color:white; color: #868686; padding: 20px;">
              <div style="color: black;">
                <p><small>jobfitment</small></p>
                <hr>
                <div id='tet'></div>

              </div>
            </div>
          </td>
          <td width="50%">
            <div class="col-sm-12" style="border-radius:10px; background-color:white; color: #868686; padding: 20px;">
              <div style="color: black;">
                <div class="card">
                  <div class="card-header">

                    <h3 class="card-title">

                      <i class="fa fa-briefcase"></i>
                      &nbsp;&nbsp;Current Job Suitability
                    </h3>
                    <h1></h1>
                  </div>
    <!-- /.card-header -->
                  <!-- /.card-body-->
                  <div class="card-footer bg-transparent">
                    <div class="row">
                      <div class="col-4 text-center">
                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                               data-fgColor="#29629F">
                        <strong><div style="color: #29629F">Analyst</div></strong>
                      </div>
                      <div class="col-4 text-center">
                        <input type="text" class="knob" data-readonly="true" value="78" data-width="60" data-height="60"
                               data-fgColor="#29629F">

                        <strong><div style="color: #29629F">Customer & Sales Executive</div></strong>
                      </div>
                      <div class="col-4 text-center">
                        <input type="text" class="knob" data-readonly="true" value="90" data-width="60" data-height="60"
                               data-fgColor="#29629F">
                        <strong><div style="color: #29629F">Graduate Engineer (Plant)  </div></strong>
                      </div>
                  </div>
              </div>
               <div class="card-footer bg-transparent">
                    <div class="row">
                      <div class="col-4 text-center">
                       <input type="text" class="knob" data-readonly="true" value="87" data-width="60" data-height="60"
                               data-fgColor="#29629F">
                        <strong><div style="color: #29629F">Graduate Engineer (R&D)</div></strong>
                      </div>
                      <div class="col-4 text-center">
                       <input type="text" class="knob" data-readonly="true" value="91" data-width="60" data-height="60"
                               data-fgColor="#29629F">
                        <strong><div style="color: #29629F">Network Engineer</div></strong>
                      </div>
                      <div class="col-4 text-center">
                       <input type="text" class="knob" data-readonly="true" value="60" data-width="60" data-height="60"
                               data-fgColor="#29629F">
                        <strong><div style="color: #29629F">Operations and Executive</div></strong>
                      </div>
                  </div>
              </div>
              <div class="card-footer bg-transparent">
                  <div class="row">
                      <!-- ./col -->
                      <div class="col-4 text-center">
                       <input type="text" class="knob" data-readonly="true" value="55" data-width="60" data-height="60"
                               data-fgColor="#29629F">
                         <strong><div style="color: #29629F">Software Developer  </div></strong>
                      </div>
                      <!-- ./col -->
                      <div class="col-4 text-center">
                        <input type="text" class="knob" data-readonly="true" value="90" data-width="60" data-height="60"
                               data-fgColor="#29629F">
                        <strong><div style="color: #29629F">Software Engineer   </div></strong>
                      </div>
                      <div class="col-4 text-center">
                       <input type="text" class="knob" data-readonly="true" value="76" data-width="60" data-height="60"
                               data-fgColor="#29629F">
                       <strong><div style="color: #29629F">Software Tester</div></strong>
                      </div>
                      <!-- ./col -->

                    </div>
                  </div>
                    <!-- /.row -->
                 <br> <br>

                  </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>


<script>ZC.LICENSE=["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];var myConfig7 = {
"type":"gauge",
"scale-r":{
  "aperture":200,
  "values":"0:100:20",
  "center":{
    "size":5,
    "background-color":"#66CCFF #FFCCFF",
    "border-color":"none"
  },
  "ring":{
    "size":10,
    "rules":[
      {
        "rule":"%v >= 0 && %v <= 20",
        "background-color":"red"
      },
      {
        "rule":"%v >= 20 && %v <= 40",
        "background-color":"orange"
      },
      {
        "rule":"%v >= 40 && %v <= 60",
        "background-color":"yellow"
      },
      {
        "rule":"%v >= 60 && %v <= 80",
        "background-color":"green"
      },
      {
        "rule":"%v >= 80 && %v <=100",
        "background-color":"blue"
      }
    ]
  },
  "labels":["0","20","40","60","80","100"]  //Scale Labels
},
"plot":{
  "csize":"5%",
  "size":"100%",
  "background-color":"#000000"
},
"series":[
  {"values":[78]}
]
};

zingchart.render({
id : 'tet',
data : myConfig7,
height : "120%",
width: "100%"
});</script>
