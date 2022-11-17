<div class="profil">
  <?php $status = $me->getStatus() ?>
  <div class="status_<?= $status ?>">
    <a href="perso.php">
      <img src="<?= $level . 'médias/faces/' . $me->getPhoto() ?>" alt="<?= $me->getName() ?>" title="<?= $me->getName() ?>">
    </a>
  </div>

  <div>
    <?php
    require $level . 'back/lists/profil_pages.php';
    foreach ($pages as $page) {
      if ($page != 'Admin') {
        echo '<span><a href="perso.php?page=' . $page . '">' . $page . '</a></span>';
      }
    }

    if (
      $status === 'all' or
      $status === 'manager'
    ) {
      echo '<span><a href="perso.php?page=Admin" class="f-red">Admin</a></span>';
    }
    ?>

  </div>
</div>