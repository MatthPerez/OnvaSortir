<?php
$id = $_GET['id'];
require 'getMembers.php';
while ($member = $members->fetch(PDO::FETCH_OBJ)) {
  if (
    $member->id == $id and
    $id > 1
  ) {
?>
    <div class="profil1">
      <h1 class="centered mv1em">
        <span class="f-blue"><?= $member->nom ?></span>
        <?php
        if (strlen($member->status) > 1) {
          echo '<span class="f-red">(' . $member->status . ')</span>';
        }
        ?>
      </h1>

      <?php
      if ($member->photo) {
        echo '<img src="' . $level . 'médias/faces/' . $member->photo . '" alt="Photo de profil">';
      } else {
        switch ($member->genre) {
          case 'homme':
            echo '<img src="' . $level . 'médias/faces/male.png" alt="inconnu">';
            break;

          case 'femme':
            echo '<img src="' . $level . 'médias/faces/female.png" alt="inconnue">';
            break;
        }
      }
      $sexe = $member->genre == 'homme' ? '' : 'e';
      $pronom = $member->genre == 'homme' ? 'il' : 'elle';
      $birthYear = substr($member->birth, 6, 4);
      $age = date('Y') - $birthYear;
      ?>

      <p class="mb1em">
        <span><?= $member->nom ?> est né<?= $sexe ?> en <?= $birthYear ?></span>
        <span class="bold">(<?= $age ?> ans)</span>
        <span>et est domicilé<?= $sexe ?> à</span>
        <span class="bold"><?= $member->ville ?> (<?= $member->dpt ?>)</span>
        <span>.</span>
      </p>

      <p class="mb1em">
        Les centres d'intérêts auxquels <?= $pronom ?> est inscrit<?= $sexe ?> sont :
      <ul>
        <?php
        // Centres d'intérêts à remplacer par ceux de la personne
        for ($a = 1; $a < 7; $a++) {
          echo '<li>activité ' . $a . '</li>';
        }
        ?>
      </ul>
      </p>
    </div>
<?php
  }
}
