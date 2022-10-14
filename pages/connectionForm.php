<?php
require '../back/classes/Page.php';
$page_connection = new Page('../', '', 'styles/style.css', 'Connexion', '', '', '', '', '');

$level = $page_connection->getLevel();
$style = $page_connection->getStyle();
$active1 = $page_connection->getActive1();
$active2 = $page_connection->getActive2();
$active3 = $page_connection->getActive3();
$active4 = $page_connection->getActive4();
$title = $page_connection->getTitle();
$seo = $page_connection->getSeo();

$appear = 8;
$level = $page_connection->getLevel();
require_once $level . 'back/head.php';
// require_once $level . 'back/nav.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/addConnection.php';
?>

<form action="../back/connection.php" method="POST" class="form1">
  <fieldset>
    <h2>Connexion</h2>

    <div>
      <label for="username">Nom d'utilisateur</label>
      <input type="text" name="username" id="username" value="<?= $_SERVER['REMOTE_ADDR'] ?>">
    </div>

    <div>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password">
    </div>

    <button type="submit">Entrer</button>
  </fieldset>
</form>