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
$page_groups = new Page('../', 'dark_mode', 'styles/style.css', 'Groupes', '');

$level = $page_groups->getLevel();
$mode = $page_groups->getMode();
$style = $page_groups->getStyle();
$title = $page_groups->getTitle();
$seo = $page_groups->getSeo();

$script2 = 'carousel';

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body>

  <h1 class="reflected">
    <div id="interests1">Café en terrasse</div>
    <div id="interests2">Café en terrasse</div>
  </h1>

  <div id="carousel" class="carousel">
    <div>
      <?php
      require_once $level . 'back/lists/groups.php';
      foreach ($activities as $activity) {
        if ($activity['id'] == 1) {
          echo '<img src="../médias/groups/' . $activity['address'] . '" alt="' . $activity['name'] . '" title="' . $activity['name'] . '" class="img active">';
        } else {
          echo '<img src="../médias/groups/' . $activity['address'] . '" alt="' . $activity['name'] . '" title="' . $activity['name'] . '" class="img">';
        }
      }
      ?>
    </div>
    <span>
      <img src="../médias/icons/bold-left.png" alt="left" id="left">
      <img src="../médias/icons/bold-right.png" alt="right" id="right">
    </span>
  </div>

</body>

<?php require_once $level . 'back/footer.php' ?>

</html>