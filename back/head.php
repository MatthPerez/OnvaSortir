<?php
require_once 'icons.php';
ini_set('display_errors', 'off');
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <?php require_once $level . 'back/addConnection.php' ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta property="og:title" content="Mas de Ville">
  <meta property="og:site_name" content="Assemblée de Nîmes Mas de Ville">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $seo ?>">

  <link rel="icon" href="<?= $level . 'médias/icons/favicon2.png' ?>">

  <link rel="stylesheet" href="<?php echo $level ?>styles/style.css">
  <link rel="stylesheet" href="<?php echo $level ?>styles/menu.css">
  <?php
  if (isset($style2)) {
    echo '<link rel="stylesheet" href="' . $style2 . '">
';
  }
  if (isset($style3)) {
    echo '<link rel="stylesheet" href="' . $style3 . '">
';
  }
  ?>
  <script src="<?php echo $level ?>js/menu.js" defer></script>
  <?php
  if (isset($script2)) {
    echo '<script src="' . $level . 'js/' . $script2 . '.js" defer></script>
    ';
  }
  ?>
  <title><?php echo $title ?></title>
</head>