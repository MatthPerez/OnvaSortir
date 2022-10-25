<?php
session_start();

if (
  isset($_SESSION['username']) and
  !empty($_SESSION['username'])
) {
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $status = $_SESSION['status'];
} else {
  unset(
    $username,
    $password,
    $status
  );
}

require '../back/classes/Page.php';
$page_admin = new Page('../', 'dark_mode', 'styles/style.css', 'Planning', '', '', '', '', '');

$level = $page_admin->getLevel();
$style = $page_admin->getStyle();
$active1 = $page_admin->getActive1();
$active2 = $page_admin->getActive2();
$active3 = $page_admin->getActive3();
$active4 = $page_admin->getActive4();
$title = $page_admin->getTitle();
$seo = $page_admin->getSeo();

$level = $page_admin->getLevel();
require_once $level . 'back/head.php';
// require_once $level . 'back/nav.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/addConnection.php';

require_once '../back/' . $status . '.php';

$link1 = $level . '';
$link2 = $level . '';
$link3 = $level . '';
$link4 = $level . '';
$link5 = $level . '';
$link6 = $level . 'back/logout.php?test=0';
$linkName1 = 'Planning des missions';
$linkName2 = 'Liste des clients';
$linkName3 = 'Liste des salariés';
$linkName4 = 'Congés';
$linkName5 = 'Comptabilité';
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

<?php

$mode = $page_admin->getMode();
require_once $level . 'back/footer.php';
?>

</html>