<?php

session_start();
if (isset($_SESSION)) {
  $_SESSION = [];
  unset($username, $password, $status);
}

if (isset($_GET['test'])) {
  if ($_GET['test'] == 0) {
    header('Location: ' . $level . 'index.php');
  }
}
