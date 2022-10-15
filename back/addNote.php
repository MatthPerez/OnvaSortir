<?php

if (
  isset($_POST['date']) and
  isset($_POST['note'])
) {
  $note = htmlspecialchars($_POST['note']);
  $date = htmlspecialchars($_POST['date']);
  $date = mb_convert_encoding($date, 'utf-8');
  $note = mb_convert_encoding($note, 'utf-8');
  $url = 'lists/notes.html';
  $newNote = $date . ' ' . $note;
  file_put_contents($url, $newNote . PHP_EOL, FILE_APPEND);
  header('Location: ../pages/admin.php');
}
