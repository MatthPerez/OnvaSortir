<?php

$page1 = 'page1.php';
$page2 = 'page2.php';
$page3 = 'page3.php';
$page4 = 'page4.php';

$page_name1 = 'titre1';
$page_name2 = 'titre2';
$page_name3 = 'titre3';
$page_name4 = 'titre4';

$title1 = 'Accueil';
$title2 = '';

ini_set('display_errors', 'OFF');

?>

<nav class="navbar <?= $mode ?>" role="navigation">
  <a href="<?php echo $level ?>index.php" class="navbar__logo Rubik_Moonrocks f12decrem shadowed2 hard_link" title="Retour accueil">
    <span class="ls10px"><?= $title1 ?></span>
    <span class="f-light-red"><?= $title2 ?></span>
  </a>
  <ul class="navbar__links">
    <li class="navbar__link first"><a href="<?= $level ?>pages/<?= $page1 ?>" class="<?= $active1 ?>"><?= $page_name1 ?></a></li>
    <li class="navbar__link second"><a href="<?= $level ?>pages/<?= $page2 ?>" class="<?= $active2 ?>"><?= $page_name2 ?></a></li>
    <li class="navbar__link third"><a href="<?= $level ?>pages/<?= $page3 ?>" class="<?= $active3 ?>"><?= $page_name3 ?></a></li>
    <li class="navbar__link four"><a href="<?= $level ?>pages/<?= $page4 ?>" class="<?= $active4 ?>"><?= $page_name4 ?></a></li>
  </ul>
  <button class="burger">
    <span class="bar"></span>
  </button>
</nav>