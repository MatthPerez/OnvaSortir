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
$page_error = new Page('../', 'dark_mode', 'styles/style.css', 'Model', '');

$level = $page_error->getLevel();
$mode = $page_error->getMode();
$style = $page_error->getStyle();
$title = $page_error->getTitle();
$seo = $page_error->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body class="bg-hiking3">
  <section class="myActivity">
    <h1 class="mv2em">Aïe ! Problème !</h1>
    <div class="w60 bg-blur p1em f12decrem centered mb2em">
      <span class="bold">
        <?php
        if (isset($response)) {
          echo $response;
        } else {
          echo 'Vous avez dû faire une erreur...';
        }
        ?>
      </span>
      <span>Ne vous en faîtes pas, ça peut arriver même aux meilleurs. La preuve ! Vous pouvez maintenant retenter votre chance en cliquant sur le bouton pour retourner à l'accueil, ou en retournant à la page précédente. Bonne continuation !</span>
    </div>
    <a href="admin.php"><button class="btn6 mb3em">Accueil</button></a>
    <img src="../médias/pictures/oops.png" alt="erreur" class="bump">
  </section>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>