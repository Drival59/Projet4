<?php $title = 'Chapitres'; ?>

<?php ob_start(); ?>

<div id="container">
  <div>
    <?php
      foreach ($chapters as $chapter) {
        $dateFormat = new DateTime($chapter['date_chapter']);
        $dateFr = $dateFormat->format('d/m/Y à H:i:s');
        echo '<div class="chapters">';
        echo '<img src="public/images/' . $chapter['img_chapter'] . '" alt="" width="100%" height="50%">';
        echo '<h3>' . $chapter['title'] . '</h3>';
        echo '<p>Écrit par ' . $chapter['author'] . ' le '. $dateFr . '</p>';
        echo "<p>" . substr($chapter['content'],0,255) . "...</p>";
        echo '<button type="button" class="btn">Lire la suite</button>';
        echo '</div>';
      }
    ?>
  </div>
  <div id="widget">
    <div id="search">
      <input type="text" class="form-control" placeholder="Rechercher ...">
      <button id="buttonSearch" type="button" class="btn">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>
    <div id="about">
      <h3>A propos</h3>
      <p>Blabla</p>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
