<?php

if (
  isset($_POST['fullname']) and
  isset($_POST['birth']) and
  isset($_POST['phone']) and
  isset($_POST['address']) and
  isset($_POST['mail']) and
  is_string($_POST['fullname']) and
  checkdate(substr($_POST['birth'], 5, 2), substr($_POST['birth'], 8, 2), substr($_POST['birth'], 0, 4)) and
  is_numeric($_POST['phone']) and
  is_string($_POST['address']) and
  filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)
) {
  $fullname = '<span>' . htmlspecialchars($_POST['fullname']) . '</span>';
  $birth = '<span>' . htmlspecialchars($_POST['birth']) . '</span>';
  $phone = '<span>' . htmlspecialchars($_POST['phone']) . '</span>';
  $address = '<span>' . htmlspecialchars($_POST['address']) . '</span>';
  $mail = '<span>' . htmlspecialchars($_POST['mail']) . '</span>';

  $url = 'lists/employees.php';
  $content = $fullname . PHP_EOL . $birth . PHP_EOL . $phone . PHP_EOL . $address . PHP_EOL . $mail . PHP_EOL;
  file_put_contents($url, $content, FILE_APPEND);
  header('Location: ../pages/admin.php');
} else {
  var_dump($_POST);
}
