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
$page_premium = new Page('../', 'dark_mode', 'styles/style.css', 'Premium', '');

$level = $page_premium->getLevel();
$mode = $page_premium->getMode();
$style = $page_premium->getStyle();
$title = $page_premium->getTitle();
$seo = $page_premium->getSeo();

$script2 = 'payments';

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body class="bg-premium">

  <section class="premium">
    <h1>Espace abonnement</h1>

    <div>
      <p>
        <span>Par défaut, vous avez accès à de nombreuses</span>
        <span class="bold f-blue">actions gratuites</span>
        <span>comme par exemple :</span>
      </p>

      <ul>
        <li>Visualiser le calendrier des sorties et rejoindre les évènements</li>
        <li>Consulter les groupes d'intérêts</li>
        <li>Voir la liste des membres</li>
        <li>Connaître les actualités de votre région</li>
      </ul>

      <p>
        <span>Vous pouvez obtenir de nouveaux avantages en souscrivant un</span>
        <span class="bold f-red">abonnement mensuel de 6 euros</span>
        <span>et qui vous donne accès aux avantages suivants :</span>
      </p>

      <ul>
        <li>Voir les membres connectés et les organisateurs les plus actifs</li>
        <li>Avoir son propre espace de messagerie sur le site</li>
        <li>Avantage fantastique n°3</li>
        <li>Avantage fantastique n°4</li>
      </ul>

      <?php require_once $level . 'back/payment_silver.php' ?>

      <a href="../pages/mentions.php" target="_blank"><button class="btn0">Consulter les mentions légales</button></a>
    </div>
  </section>



</body>

<?php require_once $level . 'back/footer.php' ?>

</html>