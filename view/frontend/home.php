<?php $title = 'Jean Forteroche - Écrivain'; ?>
<?php ob_start(); ?>

<h1>Bienvenue sur le site</h1>

<?php
  foreach ($fivePosts as $post) {
    echo '<p>' . $post['title'] . '</p>';
  }


  $content = ob_get_clean();
  require('template.php');

?>
