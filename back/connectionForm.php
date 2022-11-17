<div class="homeTitle">
  <h1><?= $title ?></h1>
</div>

<form action="back/connection.php" method="POST" class="home">

  <div>
    <!-- <label for="username">Nom d'utilisateur</label> -->
    <?php
    if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
      require_once $level . 'back/pass.php';
      foreach ($users as $user) {
        if ($user['username'] == 'Dév') {
          $user0 = 'Dév';
          $pass0 = $user['password'];
        }
      }
    } else {
      $user0 = 'Test';
      $pass0 = 'testClient';
    }
    ?>
    <input type="text" name="username" id="username" value="<?= $user0 ?>">

    <!-- <label for="password">Mot de passe</label> -->
    <input type="password" name="password" id="password" value="<?= $pass0 ?>">
  </div>

  <button type="submit">Entrer</button>
</form>