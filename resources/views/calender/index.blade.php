<!DOCTYPE html>
<html>
 <head>
  <title>Jquery Fullcalandar Integration with PHP and Mysql</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="text-center"> <br> Calender</h3>
        <div class="col-md-12 offset-1 mx-4 mb-5">
          
          <h2 align="center"><a href="#">Jquery Fullcalandar Integration with PHP and Mysql</a></h2>
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
      var calendar = $('#calendar').fullCalendar({
  
      });
    });
    </script>

  </body>
</html>