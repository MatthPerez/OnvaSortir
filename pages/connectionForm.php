<?php
require_once '../back/logout.php';
require_once '../back/classes/Page.php';
$page_connection = new Page('../', '', 'styles/style.css', 'Connexion', '', '', '', '', '');

$level = $page_connection->getLevel();
$style = $page_connection->getStyle();
$active1 = $page_connection->getActive1();
$active2 = $page_connection->getActive2();
$active3 = $page_connection->getActive3();
$active4 = $page_connection->getActive4();
$title = $page_connection->getTitle();
$seo = $page_connection->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/addConnection.php';
?>

<form action="../back/connection.php" method="POST" class="form1">
  <h2>Connexion</h2>

  <section>
    <div>
      <label for="username">Nom d'utilisateur</label>
      <?php
      if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
        require_once '../back/pass.php';
        foreach ($users as $user) {
          if ($user['username'] == 'Dév') {
            $user0 = 'Dév';
            $pass0 = $user['password'];
          }
        }
      } else {
        $user0 = $_SERVER['REMOTE_ADDR'];
        $pass0 = 'xxxxx';
      }
      ?>
      <input type="text" name="username" id="username" value="<?= $user0 ?>">
    </div>

    <div>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password" value="<?= $pass0 ?>">
    </div>
  </section>

  <button type="submit">Entrer</button>
</form>