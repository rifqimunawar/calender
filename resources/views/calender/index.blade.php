<!DOCTYPE html>
<html>
 <head>
  <title>Calender</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="col-md-12 offset-1 mx-4 mb-5">
          
          <h2 align="center"><br><a href="#">Fullcalandar Integration</a></h2>
          <br />
          <div class="container">
            <div id="calendar"></div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        header:{ //membuat tulisan fitur yang ada di header 
          left:'prev, next today', //tombol dan hri sebelah kiri
          center: 'title', //judul dan bulan
          right:'month, agendaWeek, agendaDay', //tombol di kanan
        }
      });
    });
    </script>

  </body>
</html>
