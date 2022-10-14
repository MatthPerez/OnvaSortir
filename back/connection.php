<?php

if (
  isset($_POST['username']) and
  isset($_POST['password'])
) {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  require_once 'pass.php';
  foreach ($users as $user) {
    if (
      $user['username'] === $username and
      $user['password'] === $password
    ) {
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['status'] = $user['status'];
      header('Location: ../pages/admin.php');
      exit;
    }
  }
}
header('Location: ../index.php');
