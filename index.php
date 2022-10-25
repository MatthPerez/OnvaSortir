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
$page_index = new Page('', '', 'styles/style.css', 'Les sorties dans le coin', '');

$level = $page_index->getLevel();
$style = $page_index->getStyle();
$title = $page_index->getTitle();
$seo = $page_index->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
?>

<body class="bg-hiking2">
  <?php require_once $level . 'back/connectionForm.php' ?>
</body>

<?php
$mode = 'dark_mode';
require_once $level . 'back/footer.php';
?>

</html>