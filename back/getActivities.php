<?php

$bdd_host = 'localhost';
$bdd_name = 'sorties';
$bdd_username = 'root';
$bdd_password = '';

$bdd = new PDO('mysql:host=' . $bdd_host . ';dbname=' . $bdd_name . ';charset=utf8', $bdd_username, $bdd_password);
return $activities = $bdd->query('SELECT * FROM activities ORDER BY id');
