<?php
if (isset($_POST['username'])) {
  $username = '<span class="bold f-light-blue">' . $_POST['username'] . '</span>';
}

if (isset($_SESSION['username'])) {
  $username = '<span class="bold f-light-blue">' . $_SESSION['username'] . '</span>';
}

$my_ip = $_SERVER['REMOTE_ADDR'];
require_once $level . 'back/lists/ip.php';
$ip_name = '';
$ip_name = $my_ip;
foreach ($ips as $ip) {
  if ($ip['address'] == $my_ip) {
    $ip_name = $ip['name'];
  }
}

date_default_timezone_set('Europe/Paris');
$date = date("d-m-Y");
$time = date("H:i:s");

$username0 = !empty($username) ? $username : $username0 = '<inconnu>';
$ip_name == '' ? $my_ip : $ip_name;

$message = $username0 . '<span>-</span><span>' . $date . '</span><span class="largeScreen">-</span><span class="largeScreen">' . $time . '</span><span>-</span><span class="f-light-red">' . $ip_name . '</span><span>-</span><span>' . $title . '</span>' . PHP_EOL;

$file = $level . 'back/lists/ip.html';
// if ($ip_name != 'Dév local') {
file_put_contents($file, $message, FILE_APPEND);
// }
