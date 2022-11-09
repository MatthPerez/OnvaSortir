<?php
require $level . 'back/lists/ip.php';

$username = '(inconnu)';

if (isset($_POST['username'])) {
  $username = $_POST['username'];
}

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
  
$my_ip = $_SERVER['REMOTE_ADDR'];
$ip_name = $my_ip;

$file1 = $level . 'back/lists/ip.html';
$file2 = $level . 'back/lists/newip.html';
$file3 = $file2;

foreach ($ips as $ip) {
  if ($ip['address'] == $my_ip) {
    $ip_name = $ip['name'];
    $file3 = $file1;
  }
}

date_default_timezone_set('Europe/Paris');
$date = date("d-m-Y");
$time = date("H:i:s");

$message = '<span class="bold f-blue">' . $username . '</span><span>-</span><span>' . $date . '</span><span class="largeScreen">-</span><span class="largeScreen">' . $time . '</span><span>-</span><span class="f-dark-red">' . $ip_name . '</span><span>-</span><span>' . $title . '</span>' . PHP_EOL;

// if ($ip_name != 'Dév local') {
file_put_contents($file3, $message, FILE_APPEND);
// }
