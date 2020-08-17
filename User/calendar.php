<?php require 'userheader.php'?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
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
<script>
$(document).ready(function() {
 var calendar = $('#calendar').fullCalendar({
  editable:true,
  header:{
   left:'prev,next today',
   center:'title',
   right:'month,agendaWeek,agendaDay'
  },
  events: 'load.php',
 });
});
</script>
<body>
  <div class="row" >

    <div class="col-xs-12 col-md-12 p-5" style="background-color:#edf2f6;">
        <h2 align="center" style="color:#2B3E4D">InHouse Training calendar</h2>
       <div id="calendar" class="col-xs-12" ></div>
    </div>
  </div>

</body>
<?php require 'userfooter.php'?>
