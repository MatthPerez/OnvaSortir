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
require '../back/classes/User.php';
$page_perso = new Page('../', 'dark_mode', 'styles/style.css', 'Perso', '');
$me = new User($_SESSION['username']);

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
        <?php
        if ($me->getStatus() != '') {
          echo '
          <div class="f1rem">
            <span>- abonné</span>
            <span class="f-red">' . $me->getStatus() . '</span>
            <span>-</span>
          </div>
          ';
        }
        ?>
      </h1>
    </section>

    <section>
      <?php
      require_once $level . 'back/profil.php';

      if (isset($_GET['page'])) {
        require $level . 'back/lists/profil_pages.php';
        if (in_array($_GET['page'], $pages)) {
          require_once $level . 'back/pages/' . $_GET['page'] . '.php';
        }
      } else {
        if ($me->getStatus() != '') {
          require_once $level . 'back/pages/' . $me->getStatus() . '.php';
        }
      }
      ?>
    </section>
  </div>

</body>

<?php require_once $level . 'back/footer.php' ?>

</html>