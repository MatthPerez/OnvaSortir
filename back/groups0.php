<section>
  <h1 class="reflected">
    <div id="interests1">Café en terrasse</div>
    <div id="interests2">Café en terrasse</div>
  </h1>

  <div id="carousel" class="carousel">
    <div>
      <?php
      $nb = 0;
      foreach ($activities as $activity) {
        if ($activity['id'] == 1) {
          echo '<img src="../médias/groups/' . $activity['address'] . '" alt="' . $activity['name'] . '" title="' . $activity['name'] . '" class="img active">';
        } else {
          echo '<img src="../médias/groups/' . $activity['address'] . '" alt="' . $activity['name'] . '" title="' . $activity['name'] . '" class="img">';
        }
        $nb++;
      }
      ?>
    </div>
    <span>
      <img src="../médias/icons/bold-left.png" alt="left" id="left">
      <img src="../médias/icons/bold-right.png" alt="right" id="right">
    </span>
  </div>
</section>

<section class="groups mb15em">
  <h1><?= $nb ?> groupes d'intérêts</h1>

  <form action="<?= $level ?>back/groupName.php" method="POST">
    <input list="hobby" name="hobby">
    <datalist id="hobby">
      <?php
      foreach ($activities as $activity) {
        echo '<option value="' . $activity['name'] . '">';
      }
      ?>
    </datalist>
    <button>Rechercher</button>

  </form>

  <div>
    <?php
    foreach ($activities as $activity) {
      echo '<span><a href="groups.php?id=' . $activity['name'] . '">' . $activity['name'] . '</a></span>';
    }
    ?>
  </div>
</section>