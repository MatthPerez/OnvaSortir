<?php
require_once $level . 'back/classes/User.php';
$user1 = new User($_SESSION['username']);
?>

<div class="centered">
  <span class="col">
    <?php
    $username = $_SESSION['username'];
    echo $user1->getDatas($username);
    ?>
  </span>

  <span class="bold f-green">Ancienneté sur le site : <?= $user1->getSeniority($username) ?> jour(s)</span>
  <span class="bold f-red">Statut actuel : <?= $user1->getStatus($username) ?></span>
  <span class="cadred">
    <h3>Vos groupes</h3>
    <ul class="nbList">
      <li>Randonnée cool</li>
      <li>Soirée karaoké</li>
      <li>Tarot</li>
      <li>Cinéma</li>
      <li>Fondue savoyarde</li>
      <li>Fan de Star Wars</li>
    </ul>
  </span>
</div>