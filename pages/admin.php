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

if (isset($_GET['month'])) {
  if (
    !is_numeric($_GET['month']) or
    $_GET['month'] > 12
  ) {
    header('Location: admin.php?month=' . date('m') . '&year=' . date('Y'));
  }
} else {
  header('Location: admin.php?month=' . date('m') . '&year=' . date('Y'));
}

require '../back/classes/Page.php';
$page_admin = new Page('../', 'dark_mode', 'styles/style.css', 'Calendrier', '');

$level = $page_admin->getLevel();
$mode = $page_admin->getMode();
$style = $page_admin->getStyle();
$title = $page_admin->getTitle();
$seo = $page_admin->getSeo();

$style2 = $level . 'styles/disposition.css';
$script2 = 'calendarDay';

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
        <span>
          <?php
          require_once $level . 'back/calendar.php';
          ?>
        </span>
        <span>
          <h2>Nouveaux membres</h2>
          <ul class="centered">
            <?php
            require $level . 'back/lists/members.php';
            foreach ($members as $member) {
              if (substr($member['inscription'], 3, 2) == date('m')) {
                echo '
                <li>
                  <span class="bold">' . $member['nom'] . '</span>
                  <span><a href="https://www.google.com/maps?q=' . $member['ville'] . '" target="_blank">(' . $member['ville'] . ')</a></span>
                  <span>Inscription le ' . $member['inscription'] . '</span>
                </li>';
              }
            }
            ?>
          </ul>
        </span>
      </div>

      <div>
        <h2 id="currentDate" title="<?= date('d/m/Y') ?>" class="f12decrem centered">
          <?php
          switch (date('w')) {
            case 1:
              $wd = 'Lundi';
              break;

            case 2:
              $wd = 'Mardi';
              break;

            case 3:
              $wd = 'Mercredi';
              break;

            case 4:
              $wd = 'Jeudi';
              break;

            case 5:
              $wd = 'Vendredi';
              break;

            case 6:
              $wd = 'Samedi';
              break;

            case 7:
              $wd = 'Dimanche';
              break;
          }

          // echo $wd . ' ' . date('d M Y');
          echo 'Les évènements pour le ' . date('d/m/Y');
          ?>
        </h2>

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