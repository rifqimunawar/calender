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

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      var booking = @json($events); //variabel booking menangkap variabel evensts dari controller
      
      $('#calendar').fullCalendar({
        header:{ //membuat tulisan fitur yang ada di header 
          left:'prev, next today', //tombol dan hri sebelah kiri
          center: 'title', //judul dan bulan
          right:'month, agendaWeek, agendaDay', //tombol di kanan
        },
        events : booking, //menampilkan data booking dalam bentuk kalender 
      selectable:true, //agar di click tanggal tertentu ada higligtnya
      selectHelper:true,
      select: function(start, end, allDays){
        $('#bookingModal').modal('toggle');
      }
      })
    });
    </script>

  </body>
</html>
