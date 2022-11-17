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
$page_interactMember = new Page('../', 'dark_mode', 'styles/style.css', 'Modifier fiche membre', '');

$level = $page_interactMember->getLevel();
$mode = $page_interactMember->getMode();
$style = $page_interactMember->getStyle();
$title = $page_interactMember->getTitle();
$seo = $page_interactMember->getSeo();

$style2 = $level . 'styles/disposition.css';

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';

if (isset($_POST['member'])) {
  $my_member = htmlspecialchars($_POST['member']);

  require $level . 'back/getMembers.php';
  while ($member = $members->fetch(PDO::FETCH_OBJ)) {
    if ($member->nom == $my_member) {
      $address = $member->adresse;
      $mail = $member->mail;
      $tel = $member->tel;
      $gender = $member->genre;
      $dpt = $member->dpt;
      $city = $member->ville;
      $photo = $member->photo;
      $birth = $member->birth;
      $inscription = $member->inscription;
    }
  }
} else {
  header('Location: perso.php?page=Admin');
}
?>

<body class="bg-dark1">
  <div class="membersInterface">
    <section>
      <h1 class="mv1em">
        <span class="Kscreen">Modification de la fiche client</span>
        <span class="f-blue"><?= $my_member ?></span>
        <span>de</span>
        <span class="f-blue"><?= $city ?></span>
      </h1>

      <div class="centered">
        <img src="<?= $level ?>médias/faces/<?= $photo ?>" alt="Photo de profil">
      </div>
    </section>

    <section>
      <div class="mb1em">
        <?php
        $sexe = $gender == 'homme' ? '' : 'e';
        $pronom = $gender == 'homme' ? 'il' : 'elle';
        $birthYear = substr($birth, 6, 4);
        $age = date('Y') - $birthYear;
        ?>

        <span class="bold"><?= $my_member ?></span>
        <span>est né <?= $sexe ?> en</span>
        <span><?= $birthYear ?></span>
        <span class="bold">(<?= $age  ?> ans)</span>
        <span>et habite à</span>
        <span class="bold"><?= $city ?></span>
        <span>.</span>

        <span><?= $pronom ?></span>
        <span>est inscrit<?= $sexe ?></span>
        <span>depuis le</span>
        <span><?= $inscription ?>.</span>
      </div>

      <div>
        <form action="updateMember.php" class="memberForm">
          <div>
            <label for="username">Pseudo</label>
            <input type="text" name="username" id="username" value="<?= $member->nom ?>">
          </div>

          <div>
            <label for="password">Mot de passe</label>
            <input type="text" name="password" id="password" value="<?= $member->password ?>">
          </div>

          <div>
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" value="<?= $member->adresse ?>">
          </div>

          <div>
            <label for="email">Mail</label>
            <input type="email" name="email" id="email" value="<?= $member->mail ?>">
          </div>

          <div>
            <label for="phone">Téléphone</label>
            <input type="tel" name="phone" id="phone" value="<?= $member->tel ?>">
          </div>

          <div>
            <label for="gender">Genre</label>
            <input type="text" name="gender" id="gender" value="<?= $member->genre ?>">
          </div>

          <div>
            <label for="dpt">Département</label>
            <input type="text" name="dpt" id="dpt" value="<?= $member->dpt ?>">
          </div>

          <div>
            <label for="city">Ville</label>
            <input type="text" name="city" id="city" value="<?= $member->ville ?>">
          </div>

          <div>
            <label for="pic">Photo</label>
            <input type="file" name="pic" id="pic" value="<?= $member->photo ?>">
          </div>

          <div>
            <label for="xxxbirthxx">Date de naissance</label>
            <input type="date" name="xxxxx" id="xxxxx" value="<?= $member->birth ?>">
          </div>

          <div>
            <label for="inscription">Date d'inscription</label>
            <input type="date" name="inscription" id="inscription" value="<?= $member->inscription ?>">
          </div>
        </form>
      </div>
    </section>


  </div>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>