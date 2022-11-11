<table class="calendarTable">

  <?php
  if (!isset($_GET['month'])) {
    $year = date('Y');
    $month = date('m');
  } else {
    $year = $_GET['year'];
    $month = $_GET['month'];
  }


  switch ($month) {
    case 1:
      $longMonth = 'janvier';
      break;

    case 2:
      $longMonth = 'février';
      break;

    case 3:
      $longMonth = 'mars';
      break;

    case 4:
      $longMonth = 'avril';
      break;

    case 5:
      $longMonth = 'mai';
      break;

    case 6:
      $longMonth = 'juin';
      break;

    case 7:
      $longMonth = 'juillet';
      break;

    case 8:
      $longMonth = 'août';
      break;

    case 9:
      $longMonth = 'septembre';
      break;

    case 10:
      $longMonth = 'octobre';
      break;

    case 11:
      $longMonth = 'novembre';
      break;

    case 12:
      $longMonth = 'décembre';
      break;
  }
  ?>

  <thead>
    <tr>
      <?php
      if ($month == 1) {
        $monthP = 12;
        $yearP = $year - 1;
      } else {
        $monthP = $month - 1;
        $yearP = $year;
      }

      if ($month == 12) {
        $monthN = 1;
        $yearN = $year + 1;
      } else {
        $monthN = $month + 1;
        $yearN = $year;
      }

      $previousMonth = 'month=' . $monthP . '&year=' . $yearP;
      $nextMonth = 'month=' . $monthN . '&year=' . $yearN;
      ?>

      <td colspan="2">
        <a href="admin.php?<?= $previousMonth ?>">
          <img src="../médias/icons/bold-left.png" alt="left" title="mois précédent" id="previousMonth" class="w12px">
        </a>
      </td>

      <?php
      $weekStart = date('W', mktime(0, 0, 0, $month, 1, $year));
      $weekEnd = date('W', mktime(0, 0, 0, $month + 1, -1, $year));
      $weekEnd == 1 ? $weekEnd = '53' : $weekEnd = $weekEnd;
      $weekStart > $weekEnd ? $weekStart = '00' : $weekStart = $weekStart;
      ?>
      <td colspan="3" id="currentMonth" title="semaines <?= $weekStart ?> à <?= $weekEnd ?> - Cliquer pour aller à ce mois-ci">
        <a href="admin.php">
          <?= $longMonth . ' ' . $year ?>
        </a>
      </td>

      <td colspan="2">
        <a href="admin.php?<?= $nextMonth ?>">
          <img src="../médias/icons/bold-right.png" alt="right" title="mois suivant" id="nextMonth" class="w12px">
        </a>
      </td>

    </tr>
    <tr>
      <td>L</td>
      <td>M</td>
      <td>M</td>
      <td>J</td>
      <td>V</td>
      <td>S</td>
      <td>D</td>
    </tr>
  </thead>

  <tbody>

    <?php
    $firstDay = date('w', mktime(0, 0, 0, 1, 1, $year));

    switch ($firstDay) {
      case '1':
        $day1 = date('Y-m-d', mktime(0, 0, 0, 1, 1, $year));
        break;

      case '2':
        $day1 = date('Y-m-d', mktime(0, 0, 0, 1, 0, $year));
        break;

      case '3':
        $day1 = date('Y-m-d', mktime(0, 0, 0, 1, -1, $year));
        break;

      case '4':
        $day1 = date('Y-m-d', mktime(0, 0, 0, 1, -2, $year));
        break;

      case '5':
        $day1 = date('Y-m-d', mktime(0, 0, 0, 1, -3, $year));
        break;

      case '6':
        $day1 = date('Y-m-d', mktime(0, 0, 0, 1, -4, $year));
        break;

      case '0':
        $day1 = date('Y-m-d', mktime(0, 0, 0, 1, -5, $year));
        break;
    }

    $day0 = substr($day1, 8, 2);
    $month0 = substr($day1, 5, 2);
    $year0 = substr($day1, 0, 4);

    // Parfois, les années commencent à la semaine 1 au lieu de 0. Pour éviter un décalage :

    if (date('W', mktime(0, 0, 0, 1, 1, $year0)) == 1) {
      $weekStart -= 1;
      $weekEnd -= 1;
    }

    for ($a = $weekStart; $a <= $weekEnd; $a++) {
      echo '<tr>';

      for ($b = 0; $b < 7; $b++) {
        $thisDay = date('d', mktime(0, 0, 0, $month0, $day0 + $b + (7 * $a), $year0));
        $thisLongDay = date('d/m/Y', mktime(0, 0, 0, $month0, $day0 + $b + (7 * $a), $year0));

        if (date('m', mktime(0, 0, 0, $month0, $day0 + $b + (7 * $a), $year0)) == $month) {
          date('d/m/Y') == $thisLongDay ? $redFont = 'f-red bold' : $redFont = '';
          echo '<td id="' . $thisLongDay . '" title="' . $thisLongDay . '" class="' . $redFont . '">' . $thisDay . '</td>';
        } else {
          echo '<td class="f-light-grey">' . $thisDay . '</td>';
        }
      }

      echo '</tr>';
    }
    ?>

  </tbody>
</table>