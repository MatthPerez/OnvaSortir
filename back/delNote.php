<?php

if (
  isset($_GET['id']) and
  is_numeric($_GET['id'])
) {
  $url = 'lists/notes.html';
  $contents = '';
  $lines = file($url);
  foreach ($lines as $line => $content) {
    if ($line != $_GET['id'] - 1) {
      $contents .= $content;
    }
  }
  file_put_contents($url, $contents);
}

header('Location: ../pages/admin.php');
