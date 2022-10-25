<body class="bg-desk5">
  <script src="../js/arrays.js" defer></script>

  <div class="aside">
    <section>
      <h3>Notes</h3>
      <?php
      $url = $level . 'back/lists/notes.html';
      $lines = file($url);
      foreach ($lines as $line => $content) {
        $day0 = substr($content, 8, 2);
        $month0 = substr($content, 5, 2);
        $year0 = substr($content, 0, 4);
        $day = date('d');
        $month = date('m');
        $year = date('Y');
        $delta = mktime(0, 0, 0, $month0, $day0, $year0) - mktime(0, 0, 0, $month, $day, $year);

        $len =  strlen($content) - 10;
        $text0 = substr($content, 10, $len);
        $content0 = '<span class="bold">' . $day0 . '/' . $month0 . '/' . $year0 . '</span><span>' . $text0 . '</span>';

        switch ($delta < 0) {
          case 0:
            if ($delta == 0) {
              echo '<div class="f-blue noteList"><span>' . $content0 . '</span><span><a href="' . $level . 'back/delNote.php?id=' . $line + 1 . '">❌</a></span></div>';
            } else {
              echo '<div class="noteList"><span>' . $content0 . '</span><span><a href="' . $level . 'back/delNote.php?id=' . $line + 1 . '">❌</a></span></div>';
            }
            break;
          case 1:
            echo '<div class="f-grey noteList"><span>' . $content0 . '</span><span><a href="' . $level . 'back/delNote.php?id=' . $line + 1 . '">❌</a></span></div>';
            break;
        }
      }
      ?>
    </section>

    <section>
      <div>
        <span>
          <h4 class="m1em">Employé(e)s</h4>
          <select name="employee" id="employee" class="mr10px">
            <?php
            $url = $level . 'back/lists/employees.php';
            $lines = file($url);
            foreach ($lines as $line => $content) {
              if (($line + 1) % 5 == 1) {
                echo '<option value="' . $content . '">' . $content . '</option>';
              }
            }
            ?>
          </select>
          <button class="mr10px" onclick="showEmployee()">Afficher</button>
          <!-- <button class="mr10px" onclick="file_get_contents('../back/lists/employees.php')">Afficher</button> -->
        </span>

        <span>
          <h4 class="m1em">Client(e)s</h4>
          <select name="customer" id="customer" class="mr10px">
            <?php
            $url = $level . 'back/lists/customers.php';
            $lines = file($url);
            foreach ($lines as $line => $content) {
              if (($line + 1) % 4 == 1) {
                echo '<option value="' . $content . '">' . $content . '</option>';
              }
            }
            ?>
          </select>
          <button class="mr10px" onclick="showCustomer()">Afficher</button>
        </span>

        <span class="response">
          <span id="response"></span>
          <button id="clear" onclick="erase()">Effacer</button>
        </span>
      </div>

      <div>
        <form action="../back/addNote.php" method="POST">
          <input type="date" name="date" id="date" value="<?= date('Y-m-d') ?>">
          <input type="text" name="note" id="note" placeholder="Contenu de la note" class="w40">
          <button type="submit">Ajouter note</button>
        </form>

        <form action="../back/addEmployee.php" method="POST">
          <input type="text" name="fullname" id="fullname" placeholder="Employé(e)" class="w20">
          <input type="date" name="birth" id="birth" title="date de naissance" class="centered w10">
          <input type="tel" name="phone" id="phone" placeholder="0600000000" title="numéro de téléphone" class="centered w10">
          <input type="text" name="address" id="address" placeholder="Adresse" class="w20">
          <input type="email" name="mail" id="mail" placeholder="Mail" class="w20">
          <button type="submit">Ajouter</button>
        </form>

        <form action="../back/addCustomer.php" method="POST">
          <input type="text" name="fullname" id="fullname" placeholder="Client(e)" class="w20">
          <input type="tel" name="phone" id="phone" placeholder="0600000000" class="centered w10">
          <input type="text" name="address" id="address" placeholder="Adresse" class="w20">
          <input type="email" name="mail" id="mail" placeholder="Mail" class="w20">
          <button type="submit">Ajouter</button>
        </form>
      </div>
    </section>
  </div>
</body>