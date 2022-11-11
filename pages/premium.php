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
      <p>Par défaut, vous avez accès à de nombreuses actions gratuites comme par exemple :</p>
      <ul>
        <li>Visualiser le calendrier des sorties</li>
        <li>Voir les groupes d'intérêts</li>
        <li>Voir les membres</li>
        <li>Connaître les actualités de votre région</li>
      </ul>

      <p class="bold">
        <span>Découvrez toutes les fonctionnalités du site</span>
        <span class="f-blue">J'ai trouvé ici</span>
        <span>en souscrivant à un abonnement mensuel. Vous avez le choix entre plusieurs formules, selon vos envies. Chaque classe inclut les  avantages des précédentes.</span>
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
            <td class="largeScreen">Rejoindre et organiser des évènements</td>
          </tr>

          <tr>
            <td class="btn1"><a href="premium.php?id=gold">► Gold</a>
            </td>
            <td>8 €/mois</td>
            <td class="largeScreen">Gérer des groupes publics</td>
          </tr>
          <tr>
            <td class="btn1"><a href="premium.php?id=platine">► Platine</a></td>
            <td>10 €/mois</td>
            <td class="largeScreen">Gérer des groupes privés</td>
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

  <section class="description">
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptate voluptas sint consequatur rem accusamus doloribus rerum pariatur autem, assumenda nihil ut repellat blanditiis laudantium aspernatur, quia repellendus reprehenderit laborum fugit aliquam, quos neque numquam. Sunt asperiores magni, impedit ut eligendi nam aut, est ipsa voluptate numquam, maiores quam corrupti non. Et eligendi expedita quidem, corporis quam, rerum placeat aspernatur esse officiis ut id, pariatur tenetur inventore ex saepe quo provident tempore labore possimus nihil.</p>
    
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem et vitae quasi optio velit voluptate autem. Reprehenderit maiores fugiat rem vel amet. Recusandae id odio illo mollitia aperiam similique magni molestiae quo esse et neque assumenda, obcaecati adipisci dolores velit! Dolorem expedita quidem sapiente unde assumenda nulla a consequatur non fugiat, eum, facilis molestiae aspernatur cupiditate consectetur corrupti dolorum hic quaerat iure consequuntur! Aspernatur distinctio explicabo consectetur ducimus cum! Beatae qui laudantium reprehenderit eaque ex dolores repudiandae et unde voluptates!</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt provident expedita vitae totam! Quisquam nisi rem nam neque, possimus provident et, vel aliquam laboriosam voluptatum tempora enim id consequatur voluptatibus?</p>
  </section>

</body>

<?php require_once $level . 'back/footer.php' ?>

</html>