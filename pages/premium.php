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
      <p class="bold">
        <span>Découvrez toutes les fonctionnalités du site</span>
        <span class="f-blue">J'ai trouvé ici</span>
        <span>en souscrivant à un abonnement mensuel. Vous avez le choix entre plusieurs formules, selon vos envies.</span>
      </p>

      <table class="prem_table">
        <thead>
          <td class="f-red">Classe🔻</td>
          <td>Montant</td>
          <td class="largeScreen">Avantages</td>
        </thead>

        <tbody>
          <tr>
            <td class="btn1"><a href="premium.php?id=silver">► Silver</a></td>
            <td>6 €/mois</td>
            <td class="largeScreen">Organiser et rejoindre des sorties</td>
          </tr>

          <tr>
            <td class="btn1"><a href="premium.php?id=gold">► Gold</a>
            </td>
            <td>8 €/mois</td>
            <td class="largeScreen">Organiser et rejoindre des sorties, inscription à des groupes</td>
          </tr>
          <tr>
            <td class="btn1"><a href="premium.php?id=platine">► Platine</a></td>
            <td>10 €/mois</td>
            <td class="largeScreen">Organiser et rejoindre des sorties, gestion de groupes, etc.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="payments">
    <?php
    if (isset($_GET)) {
      if (
        $_GET['id'] == 'silver' or
        $_GET['id'] == 'gold' or
        $_GET['id'] == 'platine'
      ) {
        echo '<div id="' . $_GET['id'] . '0" class="payment">';
        require_once $level . 'back/payment_' . $_GET['id'] . '.php';
        echo '</div>';
      } else {
        header('Location: premium.php');
      }
    }
    ?>

    <a href="../pages/mentions.php" target="_blank"><button class="btn0">Consulter les mentions légales</button></a>
  </section>

  </div>

  </section>

</body>

<?php require_once $level . 'back/footer.php' ?>

</html>