<?php

$link1 = $level . 'pages/perso.php';
$link2 = $level . 'pages/admin.php';
$link3 = $level . 'pages/members.php';
$link4 = $level . 'pages/groups.php';
$link5 = $level . 'pages/premium.php';
$link6 = $level . 'back/logout.php?test=0';

$linkName1 = 'Espace perso';
$linkName2 = 'Calendrier';
$linkName3 = 'Les membres';
$linkName4 = 'Les groupes';
$linkName5 = 'Espace premium';
$linkName6 = 'Déconnexion';

?>

<aside>
  <div><span><?= $person ?></span><a href="<?= $link1 ?>"><?= $linkName1 ?></a></div>
  <div><span><?= $clock ?></span><a href="<?= $link2 ?>"><?= $linkName2 ?></a></div>
  <div><span><?= $persons ?></span><a href="<?= $link3 ?>"><?= $linkName3 ?></a></div>
  <div><span><?= $boxes ?></span><a href="<?= $link4 ?>"><?= $linkName4 ?></a></div>
  <div><span><?= $piggyBank ?></span><a href="<?= $link5 ?>"><?= $linkName5 ?></a></div>
  <div><span><?= $doorout ?></span><a href="<?= $link6 ?>"><?= $linkName6 ?></a></div>
</aside>