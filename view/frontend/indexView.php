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
    foreach ($lastChapters as $chapter) {
      $dateFormat = new DateTime($chapter['date_chapter']);
      $dateFr = $dateFormat->format('d/m/Y à H:i:s');
      echo '<div class="postHome">';
      echo '<img src="public/images/' . $chapter['img_chapter'] . '" alt="" width="100%" height="300px">';
      echo "<h3>" . $chapter['title'] . "</h3>";
      echo '<p>Écrit par ' . $chapter['author'] . ' le '. $dateFr . '</p>';
      echo "<p>" . substr($chapter['content'],0,255) . "...</p>";
      echo '<a href="chapter-' . $chapter['id'] . '"<button type="button" class="btn buttonNext">Lire la suite</button></a>';
      echo '</div>';
    }

  ?>

</div>

<?php

  $content = ob_get_clean();
  require('template.php');

?>
