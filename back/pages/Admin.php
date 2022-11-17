<div>
  <?php
  require $level . 'back/lists/groups.php';
  $a = 0;
  foreach ($activities as $activity) {
    $a++;
  }

  require $level . 'back/lists/members.php';
  $b = 0;
  foreach ($members as $member) {
    $b++;
  }
  ?>
  <div class="borderedV2 p1em centered">Seul l'administrateur du site peut voir les informations suivantes.</div>

  <div>
    <h2 class="centered mv1em">
      <span><?= $a ?></span>
      <span>groupes d'intérêts</span>
    </h2>

    <div class="jc-c">
      <form action="interactActivities.php" method="POST" class="adm_groups">
        <select name="activity" id="activity">
          <?php
          foreach ($activities as $activity) {
            echo '<option name="' . $activity['id'] . '" id="' . $activity['id'] . '">' . $activity['name']  . '</option>';
          }
          ?>
        </select>

        <button type="submit">Visualiser</button>
      </form>
    </div>

    <div class="mb5em">
      <h2 class="centered mv1em">
        <span><?= $b ?></span>
        <span>membres</span>
      </h2>

      <div class="forms">
        <form action="interactMembers.php" method="POST" class="adm_groups">
          <select name="member" id="member">
            <?php
            foreach ($members as $member) {
              if ($member['nom'] != 'Dév') {
                echo '<option name="' . $member['id'] . '" id="' . $member['id'] . '">' . $member['nom']  . '</option>';
              }
            }
            ?>
          </select>

          <button type="submit">Visualiser</button>
        </form>

        <h2>Ajouter un nouveau membre</h2>

        <form action="addMember.php" method="POST" class="adm_groups1">
          <div>
            <label for="name">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
          </div>

          <div>
            <label for="password">Mot de passe</label>
            <input type="text" name="password" id="password">
          </div>

          <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
          </div>

          <div>
            <label for="phone">Téléphone</label>
            <input type="tel" name="phone" id="phone">
          </div>

          <div>
            <label for="gender">Genre</label>
            <input type="text" name="gender" id="gender">
          </div>

          <div>
            <label for="pdt">Département</label>
            <input type="text" name="pdt" id="pdt">
          </div>

          <div>
            <label for="city">Ville</label>
            <input type="text" name="city" id="city">
          </div>
          <div>

            <label for="picture">Photo de profil</label>
            <input type="file" name="picture" id="picture">
          </div>

          <div>
            <label for="birth">Date de naissance</label>
            <input type="date" name="birth" id="birth">
          </div>

          <div>
            <label for="inscription">Date d'nscription</label>
            <input type="date" name="inscription" id="inscription">
          </div>

          <button type="submit">Ajouter</button>
        </form>
      </div>
    </div>




  </div>