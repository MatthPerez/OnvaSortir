<div class="centered">
  <h1 class="mb1em">Connexions</h1>
  <a href="../back/clearConx.php"><button class="btn5 mb2em">Tout effacer</button></a>
  <ul class="conx-list">
    <?php
    $url = '../back/lists/ip.html';
    $lines = file($url);
    foreach ($lines as $line => $content) {
      echo '
        <li>
          <span>' . $line + 1 . '</span>' . $content .
        '</li>';
    }
    ?>
  </ul>
</div>