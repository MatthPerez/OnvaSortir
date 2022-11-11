<?php
session_start();

if (
  isset($_SESSION['username']) and
  !empty($_SESSION['username'])
) {
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
} else {
  unset(
    $username,
    $password
  );
}

require '../back/classes/Page.php';
$page_groups = new Page('../', 'dark_mode', 'styles/style.css', 'Groupes', '');

$level = $page_groups->getLevel();
$mode = $page_groups->getMode();
$style = $page_groups->getStyle();
$title = $page_groups->getTitle();
$seo = $page_groups->getSeo();

$script2 = 'carousel';

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
require $level . 'back/lists/groups.php';

if (
  isset($_GET['id'])
) {
  $myActivity = htmlspecialchars($_GET['id']);
  foreach ($activities as $activity) {
    if ($activity['name'] == $myActivity) {
      $address = $activity['address'];
      require_once $level . 'back/groups1.php';
    }
  }
} else {
  require_once $level . 'back/groups0.php';
}

require_once $level . 'back/footer.php';
?>

</html>