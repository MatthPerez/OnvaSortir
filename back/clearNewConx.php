<?php

$url = 'lists/newip.html';
file_put_contents($url, '');
header('Location: ../pages/perso.php');
