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
$page_admin = new Page('../', 'dark_mode', '', 'styles/style.css', 'Admin', '');

$level = $page_admin->getLevel();
$mode = $page_admin->getMode();
$style = $page_admin->getStyle();
$title = $page_admin->getTitle();
$seo = $page_admin->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body class="bg-dark1">
  <div class="aside">
    <section>
      <h1 class="centered jc-c">
        <span>Bienvenue</span>
        <span class="f-blue"><?= $_SESSION['username'] ?></span>
      </h1>

      <div>
        Calendrier
      </div>
      
      <div>
        Organisateurs du mois
      </div>

      <div>
        Bienvenues
      </div>

      <div></div>
      <div></div>
    </section>

    <section>
      <div></div>
      <div></div>
    </section>

  </div>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>