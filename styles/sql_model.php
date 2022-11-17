<section class="section mb1em">
  <?php
  try {
    require_once '../back/bdd_variables.php';

    $bdd = new PDO('mysql:host=' . $bddhost . ';dbname=' . $bdd_name . ';charset=utf8', $bdd_username, $bdd_password);
    $etablissements = $bdd->query('SELECT * FROM etablissements ORDER BY id');

    while ($etablissement = $etablissements->fetch(PDO::FETCH_OBJ)) {
      if ($etablissement->Branch != 'admin') {
  ?>
        <span class="flex-box">
          <img src="<?= $etablissement->Link ?>" alt="image" class="absolute">
          <h3 class="absolute f-white"><?= $etablissement->Branch ?></h3>
          <div class="absolute f-white"><?= $etablissement->Location ?></div>
          <form method="POST" action="branches.php" class="absolute f-white top10em">
            <input type="text" name="branch" id="branch" value="<?= $etablissement->Branch ?>" class="invisible">
            <input type="text" name="location" id="location" value="<?= $etablissement->Location ?>" class="invisible">
            <input type="submit" class="btn2 cent ml0em" value="Visiter">
          </form>
        </span>
  <?php
      }
    }
  } catch (Exception $e) {
    // die('Erreur : ' . $e->getMessage());
    echo '<h2 class="centered bold">Impossible de se connecter à la base de données</h2>';
  }

  ?>
</section>