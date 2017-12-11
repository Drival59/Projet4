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
      echo '<div class="postHome">';
      echo '<img src="public/images/' . $post['img_article'] . '" alt="" width="100%" height="50%">';
      echo "<p>" . $post['title'] . "</p>";
      echo "<p>" . $post['author'] . "</p>";
      echo "<p>" . $post['content'] . "</p>";
      echo "<p>" . $post['img_article'] . "</p>";
      echo "<p>" . $post['date_article'] . "</p>";
      echo '</div>';



    }


  ?>

</div>


<?php

  $content = ob_get_clean();
  require('template.php');

?>
