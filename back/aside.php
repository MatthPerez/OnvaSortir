<?php

$link1 = $level . 'pages/admin.php';
$link2 = $level . 'pages/members.php';
$link3 = $level . 'pages/groups.php';
$link4 = $level . 'pages/perso.php';
$link5 = $level . 'pages/premium.php';
$link6 = $level . 'back/logout.php?test=0';

$linkName1 = 'Calendrier';
$linkName2 = 'Les membres';
$linkName3 = 'Les groupes';
$linkName4 = 'Espace perso';
$linkName5 = 'Espace premium';
$linkName6 = 'Déconnexion';

?>

<aside>
  <div><span><?= $clock ?></span><a href="<?= $link1 ?>"><?= $linkName1 ?></a></div>
  <div><span><?= $persons ?></span><a href="<?= $link2 ?>"><?= $linkName2 ?></a></div>
  <div><span><?= $list1 ?></span><a href="<?= $link3 ?>"><?= $linkName3 ?></a></div>
  <div><span><?= $coffee ?></span><a href="<?= $link4 ?>"><?= $linkName4 ?></a></div>
  <div><span><?= $piggyBank ?></span><a href="<?= $link5 ?>"><?= $linkName5 ?></a></div>
  <div><span><?= $logout ?></span><a href="<?= $link6 ?>"><?= $linkName6 ?></a></div>
</aside>