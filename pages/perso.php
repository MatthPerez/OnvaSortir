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
$page_perso = new Page('../', 'dark_mode', 'styles/style.css', 'Perso', '');

$level = $page_perso->getLevel();
$mode = $page_perso->getMode();
$style = $page_perso->getStyle();
$title = $page_perso->getTitle();
$seo = $page_perso->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body class="bg-dark1">

  <div class="admin">
    <section>
      <h1>
        <span>Espace perso de</span>
        <span class="f-blue"><?= $_SESSION['username'] ?></span>
      </h1>

    </section>

    <section>
      <?php
      require_once $level . 'back/pass.php';
      $status = '';
      foreach ($users as $user) {
        if ($user['username'] == $_SESSION['username']) {
          $_SESSION['status'] = $user['status'];
        }
      }
      require_once $level . 'back/pages/' . $_SESSION['status'] . '.php';
      ?>
    </section>
  </div>

</body>

<?php require_once $level . 'back/footer.php' ?>

</html>