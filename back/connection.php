<?php
session_start();

if (
  isset($_POST['username']) and
  isset($_POST['password'])
) {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  require_once 'lists/members.php';
  foreach ($members as $member) {
    if (
      $member['nom'] === $username and
      $member['password'] === $password
    ) {
      $_SESSION['username'] = $member['nom'];
      $_SESSION['password'] = $member['password'];
      $_SESSION['status'] = $member['status'];
      $_SESSION['address'] = $member['adresse'];
      $_SESSION['mail'] = $member['mail'];
      $_SESSION['tel'] = $member['tel'];
      $_SESSION['gender'] = $member['genre'];
      $_SESSION['dtp'] = $member['dtp'];
      $_SESSION['city'] = $member['ville'];
      $_SESSION['birth'] = $member['birth'];
      $_SESSION['inscription'] = $member['inscription'];
      header('Location: ../pages/admin.php');
      exit;
    }
  }
}
header('Location: ../index.php');
