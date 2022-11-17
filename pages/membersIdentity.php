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
$page_memberIdentity = new Page('../', 'dark_mode', 'styles/style.css', 'Membres', '');

$level = $page_memberIdentity->getLevel();
$mode = $page_memberIdentity->getMode();
$style = $page_memberIdentity->getStyle();
$title = $page_memberIdentity->getTitle();
$seo = $page_memberIdentity->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body class="bg-crowd6">
  <div class="membersInterface">
    <section>
      
    </section>

    <section>
      
    </section>

  </div>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>