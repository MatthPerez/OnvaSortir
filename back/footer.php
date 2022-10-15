<footer class="fixed-bottom <?= $mode ?>">
  <?php
  require_once $level . 'back/icons.php';

  switch (date("l")) {
    case "Monday":
      $weekday = "lundi";
      break;
    case "Tuesday":
      $weekday = "mardi";
      break;
    case "Wednesday":
      $weekday = "mercredi";
      break;
    case "Thursday":
      $weekday = "jeudi";
      break;
    case "Friday":
      $weekday = "vendredi";
      break;
    case "Saturday":
      $weekday = "samedi";
      break;
    case "Sunday":
      $weekday = "dimanche";
      break;
  }

  switch (date("m")) {
    case 1:
      $month = "janv.";
      break;
    case 2:
      $month = "fév.";
      break;
    case 3:
      $month = "mars";
      break;
    case 4:
      $month = "avril";
      break;
    case 5:
      $month = "mai";
      break;
    case 6:
      $month = "juin";
      break;
    case 7:
      $month = "juil.";
      break;
    case 8:
      $month = "août";
      break;
    case 9:
      $month = "sept.";
      break;
    case 10:
      $month = "oct.";
      break;
    case 11:
      $month = "nov.";
      break;
    case 12:
      $month = "déc.";
      break;
  }

  echo '
  <span class="largeScreen normal">' . $weekday . ' ' . date("d") . ' ' . $month . ' ' . date("Y") . '</span>
  <span class="largeScreen" id="clock">
    <script src="' . $level . 'js/clock.js"></script>
  </span>
  ';
  ?>

</footer>