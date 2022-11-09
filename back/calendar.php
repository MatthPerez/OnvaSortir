<table class="calendarTable">

  <?php
  $year = date('Y');
  $month = date('m');

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
      <td colspan="2" id="previousMonth"><img src="../médias/icons/bold-left.png" alt="left" class="w12px"></td>
      <td colspan="3" id="currentMonth"><?= $longMonth . ' ' . $year ?></td>
      <td colspan="2" id="nextMonth"><img src="../médias/icons/bold-right.png" alt="right" class="w12px"></td>
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
    $weekStart = date('W', mktime(0, 0, 0, $month, 1, $year));
    $weekEnd = date('W', mktime(0, 0, 0, $month + 1, -1, $year));

    switch (date('w', mktime(0, 0, 0, 1, 1, $year))) {
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
      case '7':
        $day1 = date('Y-m-d', mktime(0, 0, 0, 1, -5, $year));
        break;
    }
    $day0 = substr($day1, 8, 2);
    $month0 = substr($day1, 5, 2);
    $year0 = substr($day1, 0, 4);

    for ($a = $weekStart; $a <= $weekEnd; $a++) {
      echo '<tr>';

      for ($b = 0; $b < 7; $b++) {
        $thisDay = date('d', mktime(0, 0, 0, $month0, $day0 + $b + (7 * $a), $year0));
        $thisLongDay = date('d/m/Y', mktime(0, 0, 0, $month0, $day0 + $b + (7 * $a), $year0));

        if (date('m', mktime(0, 0, 0, $month0, $day0 + $b + (7 * $a), $year0)) == $month) {
          if (date('d/m/Y') == $thisLongDay) {
            echo '<td id="' . $thisLongDay . '" title="' . $thisLongDay . '" class="f-red bold">' . $thisDay . '</td>';
          } else {
            echo '<td id="' . $thisLongDay . '" title="' . $thisLongDay . '">' . $thisDay . '</td>';
          }
        } else {
          echo '<td class="f-light-grey">' . $thisDay . '</td>';
        }
      }

      echo '</tr>';
    }
    ?>

  </tbody>
</table>