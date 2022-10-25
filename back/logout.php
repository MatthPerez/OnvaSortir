<?php

session_start();  
$_SESSION = [];
unset($username, $password, $status);

if (isset($_GET['test'])) {
  if ($_GET['test'] == 0) {
    header('Location: ../index.php');
  }
}
