<?php

session_start();
if (isset($_SESSION)) {
  $_SESSION = [];
  unset($username, $password);
  header('Location: ../index.php');
} else {
  var_dump($_SESSION);
}
