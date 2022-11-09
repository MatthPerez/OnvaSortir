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
$page_admin = new Page('../', 'dark_mode', 'styles/style.css', 'Calendrier', '');

$level = $page_admin->getLevel();
$mode = $page_admin->getMode();
$style = $page_admin->getStyle();
$title = $page_admin->getTitle();
$seo = $page_admin->getSeo();

$style2 = $level . 'styles/disposition.css';

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body class="bg-dark1">

  <div class="aside">
    <section>
      <h1 class="centered jc-c">
        <span>Bonjour</span>
        <span class="f-blue"><?= $_SESSION['username'] ?></span>
      </h1>

      <?php require_once $level . 'back/paragraphs.php' ?>
    </section>

    <section>
      <div>
        <span><?php require_once $level . 'back/calendar.php' ?></span>
        <span>
          <h2>Bienvenue à nos nouveaux membres</h2>
          <ul class="centered">
            <?php
            require $level . 'back/lists/members.php';
            foreach ($members as $member) {
              echo '
              <li>
                <span class="bold">' . $member['nom'] . '</span>
                <span><a href="https://www.google.com/maps?q=' . $member['ville'] . '" target="_blank">(' . $member['ville'] . ')</a></span>
              </li>';
            }
            ?>
          </ul>
        </span>
      </div>

      <div>
        <h2 id="currentDate" class="f12decrem centered"><?= date('d M Y') ?></h2>
        <?php require_once $level . 'back/events.php' ?>
        <p class="centered XSscreen">
          <span>Malheureusement,</span>
          <span class="bold">votre écran est trop petit</span>
          <span>pour voir le planning des sorties. Vous pouvez le consulter sur un plus grand écran comme un smartphone, une tablette, un ordinateur ou une télé.</span>
        </p>
      </div>
    </section>

  </div>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>