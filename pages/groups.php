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
$page_groups = new Page('../', '', 'styles/style.css', 'Groupes', '');

$level = $page_groups->getLevel();
$mode = $page_groups->getMode();
$style = $page_groups->getStyle();
$title = $page_groups->getTitle();
$seo = $page_groups->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body>
  <div class="aside">
    <section></section>
    <section>
      <div></div>
      <div></div>
    </section>

  </div>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>