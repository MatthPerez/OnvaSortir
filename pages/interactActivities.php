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

if (isset($_POST['activity'])) {
  $activity0 = htmlspecialchars($_POST['activity']);
}

require '../back/classes/Page.php';
$page_interactActivities = new Page('../', 'dark_mode', 'styles/style.css', $activity0, '');

$level = $page_interactActivities->getLevel();
$mode = $page_interactActivities->getMode();
$style = $page_interactActivities->getStyle();
$title = $page_interactActivities->getTitle();
$seo = $page_interactActivities->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';

require_once $level . 'back/lists/groups.php';
foreach ($activities as $activity) {
  if ($activity['name'] == $activity0) {
    $address = $activity['address'];
  }
}
?>

<body style="background-image: url(../médias/groups/<?= $address ?>); background-size: cover; background-attachment: fixed">
  <section class="section1 mb1em">
    <h1>
      <span>Gestion du groupe d'intérêts</span>
      <span class="f-blue"><?= $activity0 ?></span>
    </h1>

    <a href="perso.php?page=Admin">
      <div class="centered mb1em">
        Retour page précédente
      </div>
    </a>

    <div>
      <p>
        Le groupe <span class="bold f-red"><?= $activity0 ?></span> a été créé le <span class="bold">XXXXX</span> par <span class="bold">XXXXX</span>.
      </p>

      <p>
        <span class="bold">Voici les dernières actualités le concernant : </span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel nam fugiat quam veritatis! Provident doloribus aspernatur doloremque delectus adipisci sed soluta ut ratione accusantium nesciunt dignissimos optio, voluptatum ea porro!
      </p>

      <div class="centered mt4em">
        <form action="updateGroup.php" method="POST" class="simpleForm">
          <div>
            <label for="name">Nom du groupe</label>
            <input type="text" name="name" id="name">
          </div>

          <div>
            <label for="creator">Créateur</label>
            <input type="text" name="creator" id="creator">
          </div>

          <div>
            <label for="category">Type d'activité</label>
            <input type="text" name="category" id="category">
          </div>

          <button type="submit" class="btn9 f-blue">Appliquer les modifications</button>
        </form>

        <a href="#">
          <button class="btn9 f-red mb5em">Supprimer le groupe</button>
        </a>
      </div>
    </div>
  </section>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>