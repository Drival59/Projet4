<?php $title = $chapter['title'] ?>
<?php ob_start(); ?>

<?php

  $dateFormat = new DateTime($chapter['date_chapter']);
  $dateFr = $dateFormat->format('d/m/Y à H:i:s');
  echo '<div>';
  echo '<img src="public/images/' . $chapter['img_chapter'] . '" alt="" width="100%" height="50%">';
  echo '<h3>' . $chapter['title'] . '</h3>';
  echo '<p>Écrit par ' . $chapter['author'] . ' le '. $dateFr . '</p>';
  echo "<p>" . $chapter['content'] . "</p>";
  echo '</div>';

  $content = ob_get_clean();

  require('template.php');
?>
