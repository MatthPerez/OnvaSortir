<?php

$bdd_host = 'localhost';
$bdd_name = 'sorties';
$bdd_username = 'root';
$bdd_password = '';

$bdd = new PDO('mysql:host=' . $bdd_host . ';dbname=' . $bdd_name . ';charset=utf8', $bdd_username, $bdd_password);
return $events = $bdd->query('SELECT * FROM events ORDER BY id');
