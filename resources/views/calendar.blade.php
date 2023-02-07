<?php
  use App\Models\Mascota;

  $a = array();
  foreach ($citas as $cita) {
    $mascota = Mascota::find($cita->mascota_id);
      $a[] = (object) array('title' => $mascota->id . '. '. strtoupper($mascota->nombre) . ', Cliente: ' . $mascota->cliente_id, 'start' => $cita->fecha, 'end' => $cita->fecha);
  }
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.1/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events: <?php echo json_encode($a); ?>
        });
        calendar.render();
      });

    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>