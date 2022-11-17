<table class="membersTable">
  <thead>
    <td>Pseudonyme</td>
    <td class="largeScreen">Genre</td>
    <td>Ville</td>
  </thead>

  <tbody>
    <?php
    if (isset($_GET['member'])) {
      $memberName = htmlspecialchars($_GET['member']);

      // Afficher seulement les membres qui ont ce pseudo
      require $level . 'back/getMembers.php';
      while ($member = $members->fetch(PDO::FETCH_OBJ)) {
        if ($member->nom === $memberName) {
          echo '
                <tr>
                  <td class="btn0"><a href="members.php?id=' . $member->id . '" class="f-black">' . $member->nom . '</a></td>
                  <td>' . $member->genre . '</td>
                  <td>' . $member->ville . '</td>
                </tr>
                ';
        }
      }
    } else {
      // Afficher tous les membres
      require $level . 'back/getMembers.php';
      while ($member = $members->fetch(PDO::FETCH_OBJ)) {
        if (
          $member->nom != 'Dév' and
          $member->nom != 'Test'
        ) {
          echo '
                <tr>
                  <td class="btn0"><a href="members.php?id=' . $member->id . '" class="f-black">' . $member->nom . '</a></td>
                  <td>' . $member->genre . '</td>
                  <td>' . $member->ville . '</td>
                </tr>
                ';
        }
      }
    }
    ?>
  </tbody>
</table>