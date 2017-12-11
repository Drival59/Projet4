<?php $title = 'Jean Forteroche - Écrivain'; ?>
<?php ob_start(); ?>

<div id="avatar-Forteroche"></div>
<div id="presentation">
  <p id="quote">“Ecrivain. Ce n'est pas un métier, mais une vocation, un don.”</p>
  <p>Bonjour. Je m'appelle Jean Forteroche et je suis écrivain.</p>
  <p>Pour mon nouveau roman intitulé "Un billet simple pour l'Alaska", j'ai décidé de mettre en ligne gratuitement chaques chapitres.</p>
</div>

<h2 id="lastChapters">Derniers chapitres</h2>

<div id="lastPosts">

  <?php

    foreach ($lastPosts as $post) {
      $dateFormat = new DateTime($post['date_article']);
      $dateFr = $dateFormat->format('d/m/Y à H:i:s');
      echo '<div class="postHome">';
      echo '<img src="public/images/' . $post['img_article'] . '" alt="" width="100%" height="50%">';
      echo "<h3>" . $post['title'] . "</h3>";
      echo '<p>Écrit par ' . $post['author'] . ' le '. $dateFr . '</p>';
      echo "<p>" . $post['content'] . "</p>";
      echo '<button type="button" class="btn">Lire la suite</button>';
      echo '</div>';
    }

  ?>

</div>


<?php

  $content = ob_get_clean();
  require('template.php');

?>
