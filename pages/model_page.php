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
$page_model = new Page('../', 'dark_mode', 'styles/style.css', 'Model', '');

$level = $page_model->getLevel();
$mode = $page_model->getMode();
$style = $page_model->getStyle();
$title = $page_model->getTitle();
$seo = $page_model->getSeo();

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