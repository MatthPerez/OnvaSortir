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
$page_members = new Page('../', 'dark_mode', 'styles/style.css', 'Membres', '');

$level = $page_members->getLevel();
$mode = $page_members->getMode();
$style = $page_members->getStyle();
$title = $page_members->getTitle();
$seo = $page_members->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
require_once $level . 'back/aside.php';
?>

<body class="bg-crowd6">
  <div class="membersInterface">
    <section>
      <form action="affichMembers.php" method="POST" class="membersForm">
        <h1>Retrouver une personne</h1>

        <label for="pseudo">Pseudonyme</label>
        <input type="text" name="pseudo" id="pseudo">

        <label for="dpt">Département</label>
        <input type="number" name="dpt" id="dpt">

        <label for="city">Ville</label>
        <input type="text" name="city" id="city">

        <button type="submit">Rechercher</button>
      </form>
    </section>

    <section>
      <div class="centered XSScreen">
        <p class="mb1em">
          <span>Vous ne pouvez pas voir ce tableau sur cet écran car il est </span>
          <span class="bold">trop petit</span>
          <span>pour tout afficher.</span>
        </p>
        <img src="<?= $level ?>médias/pictures/sorry.jpg" alt="sorry" class="rounded20">
      </div>

      <table class="membersTable">
        <thead>
          <td>Pseudonyme</td>
          <td class="largeScreen">Genre</td>
          <td>Ville</td>
          <td>Profil</td>
        </thead>

        <tbody>
          <?php
          require_once $level . 'back/lists/members.php';
          foreach ($members as $member) {
            echo '
            <tr>
              <td>' . $member['nom'] . '</td>
              <td class="largeScreen">' . $member['genre'] . '</td>
              <td><a href="https://www.google.com/maps?q=' . $member['ville'] . '" target="_blank" class="f-black">' . $member['ville'] . '</a> (' . $member['dpt'] . ')</td>
              <td>' . $identity . '</td>
            </tr>
            ';
          }
          ?>
        </tbody>
      </table>
    </section>

  </div>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>