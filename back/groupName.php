<?php

if (
  isset($_POST['hobby']) and
  is_string($_POST['hobby'])
) {
  $hobby = htmlspecialchars($_POST['hobby']);
  header('Location: ../pages/groups.php?id=' . $hobby);
} else {
  header('Location: ../pages/groups.php');
}
