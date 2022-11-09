<?php
require_once $level . 'back/classes/User.php';
$user1 = new User($_SESSION['username']);
?>

<div>
  <span class="col centered">
    <?php
    $username = 'Matthieu';
    $username = $_SESSION['username'];
    echo $user1->getDatas($username);
    ?>
  </span>

  <span class="bold f-green">Ancienneté sur le site : <?= $user1->getSeniority($username) ?> jour(s)</span>
  <span class="bold f-red">Statut actuel : <?= $user1->getStatus($username) ?></span>
</div>