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
$page_mentions = new Page('../', 'dark_mode', 'styles/style.css', 'Mentions légales', '');

$level = $page_mentions->getLevel();
$mode = $page_mentions->getMode();
$style = $page_mentions->getStyle();
$title = $page_mentions->getTitle();
$seo = $page_mentions->getSeo();

require_once $level . 'back/head.php';
require_once $level . 'back/icons.php';
?>

<body class="bg-premium">
  <section class="mentions">
    <h1>Mentions légales</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat totam provident consequuntur facilis tempora dolor in, natus tenetur nam cumque laborum, porro nihil laudantium dolore quo sunt recusandae? Necessitatibus provident expedita maxime? Consectetur eligendi sed deleniti ab! Assumenda aliquid dolor aperiam harum, deleniti consequatur blanditiis, perspiciatis minus neque accusantium odio?</p>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quia harum ducimus, ullam sit quas odio consectetur, tempore ipsam repellendus quaerat repellat sint minus commodi! Aut, error placeat non enim repellendus accusantium laboriosam harum, numquam, deserunt sint qui corporis ratione optio dolorem fugiat fugit similique alias modi. Autem porro repudiandae repellat aliquam tenetur dignissimos corrupti, saepe consequatur minima laudantium rem ad qui sunt dolorem minus molestiae eveniet, nobis assumenda hic dolore esse magnam! Vero veritatis eius laborum eligendi nulla pariatur architecto maxime exercitationem error, dignissimos reprehenderit animi aperiam labore tenetur? Labore reprehenderit veritatis consequatur nobis asperiores, deleniti natus tempore aspernatur!</p>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga doloremque, quo accusantium beatae dolor voluptatibus rem autem voluptate suscipit nostrum, laudantium quod quasi minus. Magnam, provident labore at soluta quisquam nihil quas nemo cupiditate debitis excepturi! Voluptate fugit suscipit vitae voluptatum, officiis ad hic et, a adipisci esse, totam aspernatur accusantium repellat quae expedita minima deleniti optio corporis. Odit quae blanditiis ab modi ut quod vitae dolorem labore sint consectetur consequatur quaerat distinctio soluta earum voluptatibus culpa incidunt, iure, cum quisquam, expedita voluptas natus nesciunt explicabo! Temporibus error sequi qui, enim magnam eius? Rem cum omnis, fugit laboriosam facilis, ullam ex ducimus similique mollitia, inventore illo. Sunt saepe ipsam aliquam ex commodi perferendis cupiditate provident. Cumque corrupti quisquam itaque ex blanditiis. Fuga dicta eveniet temporibus nemo nam expedita assumenda, similique quibusdam corporis! Hic laborum saepe eius blanditiis rem! Similique ipsam modi reprehenderit earum rerum nulla obcaecati error voluptatem provident itaque.</p>
  </section>
</body>

<?php require_once $level . 'back/footer.php' ?>

</html>