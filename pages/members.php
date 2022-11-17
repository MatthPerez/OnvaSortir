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
require $level . 'back/getMembers.php';
?>

<body class="bg-crowd6">
  <div class="membersInterface">
    <section>
      <h1>Retrouver une personne</h1>

      <!-- Rechercher par pseudo -->
      <form action="affichMembersName.php" method="POST" class="membersForm">
        <label for="pseudo">par pseudonyme</label>
        <input list="pseudos" name="pseudo" id="pseudo">
        <datalist id="pseudos">
          <?php
          // foreach ($members as $member) {
          //   if (
          //     $member['nom'] != 'Dév' and
          //     $member['nom'] != 'Test'
          //   ) {
          //     echo '<option value="' . $member['nom'] . '">';
          //   }
          // }

          while ($member = $members->fetch(PDO::FETCH_OBJ)) {
            if (
              $member->nom != 'Dév' and
              $member->nom != 'Test'
            ) {
              echo '<option value="' . $member->nom . '">';
            }
          }
          ?>
        </datalist>
        <button type="submit">Rechercher</button>
      </form>

      <!-- Rechercher par département -->
      <form action="affichMembersDpt.php" method="POST" class="membersForm">
        <label for="department">par département</label>
        <input list="departments" name="department" id="department">
        <datalist id="departments">
          <?php
          require_once $level . 'back/lists/departmentsInFrance.php';
          foreach ($departments as $department) {
            echo '<option value="' . $department['name'] . '">';
          }
          ?>
        </datalist>
        <button type="submit">Rechercher</button>
      </form>

      <!-- Rechercher par ville -->
      <form action="affichMembersCity.php" method="POST" class="membersForm">
        <label for="city">par ville</label>
        <input list="cities" name="city" id="city">
        <datalist id="cities">
          <?php
          require_once $level . 'back/lists/citiesInFrance.php';
          foreach ($cities as $city) {
            echo '<option value="' . $city['name'] . '">';
          }
          ?>
        </datalist>
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

      <?php
      if (isset($_GET['id'])) {
        if (is_integer($_GET['id'] + 0)) {
          require_once $level . 'back/createUserPage.php';
        }
      } else {
        require_once $level . 'back/allMembers.php';
      }
      ?>
    </section>

  </div>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>