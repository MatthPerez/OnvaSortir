<body class="bg-desk5">
  <div class="aside">
    <section>
      <h3 class="centered mv1em">Notes</h3>
      <?php
      $url = $level . 'back/lists/notes.html';
      $lines = file($url);
      foreach ($lines as $line => $content) {
        $date0 = substr($content, 0, 10);
        $len =  strlen($content) - 10;
        $text0 = substr($content, 10, $len);
        $content0 = '<span class="bold">' . $date0 . '</span><span>' . $text0 . '</span>';
        echo '
        <div class="noteList">
          <span>' . $content0 . '</span>
          <span><a href="' . $level . 'back/delNote.php?id=' . $line + 1 . '">❌</a></span>
        </div>
        ';
      }
      ?>
    </section>
    <section>
      <div>Encadré à remplir.</div>
      <div>
        <form action="../back/addNote.php" method="POST">
          <input type="date" name="date" id="date" value="<?= date('d-m-Y') ?>">
          <input type="text" name="note" id="note" class="w40">
          <button type="submit">Ajouter note</button>
        </form>
      </div>
    </section>
  </div>
</body>