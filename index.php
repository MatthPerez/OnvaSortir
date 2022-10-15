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

require_once 'back/classes/Page.php';
$page_index = new Page('', '', 'styles/style.css', 'Planning', '', '', '', '', '');

$level = $page_index->getLevel();
$style = $page_index->getStyle();
$active1 = $page_index->getActive1();
$active2 = $page_index->getActive2();
$active3 = $page_index->getActive3();
$active4 = $page_index->getActive4();
$title = $page_index->getTitle();
$seo = $page_index->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/addConnection.php';
?>

<body class="bg-dark">
  <?php
  if (
    !isset($username) or
    $username = NULL
  ) {
    header('Location: pages/connectionForm.php');
  }
  ?>
</body>

<?php
$mode = 'dark_mode';
require_once $level . 'back/footer.php';
?>

</html>