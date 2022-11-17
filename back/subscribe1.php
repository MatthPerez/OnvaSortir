<p class="bold">
  <span>Découvrez toutes les fonctionnalités du site</span>
  <span class="f-blue">J'ai trouvé ici</span>
  <span>en souscrivant à un abonnement mensuel. Vous avez le choix entre plusieurs formules, selon vos envies. Chaque classe inclut les avantages des précédentes.</span>
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
</section>