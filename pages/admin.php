<?php
session_start();

if (
  isset($_SESSION['username']) and
  isset($_SESSION['password']) and
  isset($_SESSION['status']) and
  !empty($_SESSION['username']) and
  !empty($_SESSION['password']) and
  !empty($_SESSION['status'])
) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $status = $_POST['status'];
} else {
  unset(
    $username,
    $password,
    $status
  );
}

require '../back/classes/Page.php';
$page_admin = new Page('../', '', 'styles/style.css', 'Planning', '', '', '', '', '');

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
$mode = 'dark_mode';
require_once $level . 'back/footer.php';
?>

</html>