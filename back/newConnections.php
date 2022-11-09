<div class="centered">
  <h1 class="mb1em">Nouvelles connexions</h1>
  <a href="../back/clearNewConx.php"><button class="btn5 mb2em">Tout effacer</button></a>
  <ul class="conx-list">
    <?php
    $url = '../back/lists/newip.html';
    $lines = file($url);
    foreach ($lines as $line => $content) {
      echo '
              <li>
                <span>' . $line + 1 . ' ' . $content . '</span
              </li>
              ';
    }
    ?>
  </ul>
</div>