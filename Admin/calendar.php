<?php require 'Adminheader.php'?>
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
  selectable:true,
  selectHelper:true,
  select: function(start, end, allDay)
  {
   var title = prompt("Enter Event Title");
   if(title)
   {
    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
    $.ajax({
     url:"insert.php",
     type:"POST",
     data:{title:title, start:start, end:end},
     success:function()
     {
      calendar.fullCalendar('refetchEvents');
      alert("Added Successfully");
     }
    })
   }
  },
  editable:true,
  eventResize:function(event)
  {
   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
   var title = event.title;
   var id = event.id;
   $.ajax({
    url:"update.php",
    type:"POST",
    data:{title:title, start:start, end:end, id:id},
    success:function(){
     calendar.fullCalendar('refetchEvents');
     alert('Event Update');
    }
   })
  },

  eventDrop:function(event)
  {
   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
   var title = event.title;
   var id = event.id;
   $.ajax({
    url:"update.php",
    type:"POST",
    data:{title:title, start:start, end:end, id:id},
    success:function()
    {
     calendar.fullCalendar('refetchEvents');
     alert("Event Updated");
    }
   });
  },

  eventClick:function(event)
  {
   if(confirm("Are you sure you want to remove it?"))
   {
    var id = event.id;
    $.ajax({
     url:"delete.php",
     type:"POST",
     data:{id:id},
     success:function()
     {
      calendar.fullCalendar('refetchEvents');
      alert("Event Removed");
     }
    })
   }
  },

 });
});
</script>
<body>
  <div class="row" >
    <?php require "Adminleft.php"?>
    <div class="col-xs-6 col-md-10 p-3" style="background-color:#edf2f6;">
        <h2 align="center" style="color:#2B3E4D">InHouse Training calendar</h2>
       <div id="calendar" class="col-xs-12" ></div>
    </div>
  </div>

</body>
<?php require 'Adminfooter.php'?>
