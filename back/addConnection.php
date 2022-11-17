<?php
require $level . 'back/lists/ip.php';

$username = '(inconnu)';

if (isset($_POST['username'])) {
  $username = $_POST['username'];
}

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}

$caught_ip = $_SERVER['REMOTE_ADDR'];

$file1 = $level . 'back/lists/ip.html';
$file2 = $level . 'back/lists/newip.html';

foreach ($ips as $ip) {
  if ($ip['address'] === $caught_ip) {
    $caught_ip = $ip['name'];
  }
}

if (
  $username != 'Dév' and
  $caught_ip != 'Dév local'
) {
  date_default_timezone_set('Europe/Paris');
  $date = date("d-m-Y");
  $time = date("H:i:s");

  $message = '<span class="bold f-blue">' . $username . '</span><span>-</span><span>' . $date . '</span><span class="largeScreen">-</span><span class="largeScreen">' . $time . '</span><span>-</span><span class="f-dark-red">' . $caught_ip . '</span><span>-</span><span>' . $title . '</span>' . PHP_EOL;

  if (is_numeric(substr($caught_ip, 0, 1))) {
    file_put_contents($file2, $caught_ip, FILE_APPEND);
  } else {
    file_put_contents($file1, $message, FILE_APPEND);
  }
}
