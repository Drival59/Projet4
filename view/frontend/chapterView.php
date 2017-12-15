<?php $title = $chapter['title'] ?>
<?php ob_start(); ?>

<?php

  $dateFormat = new DateTime($chapter['date_chapter']);
  $dateFr = $dateFormat->format('d/m/Y à H:i:s');
  echo '<div id="chapter_container">';
  echo '<img src="public/images/' . $chapter['img_chapter'] . '" alt="" width="100%" height="50%">';
  echo '<h2>' . $chapter['title'] . '</h2>';
  echo '<p id="p_italic"><i>Écrit par ' . $chapter['author'] . ' le '. $dateFr . '</i></p>';
  echo "<p>     " . nl2br($chapter['content']) . "</p>";
  echo '</div>';
?>
<div id="comment_container">
  <h2>Commentaires</h2>
  <form method="post">
   <div class="form-group">
     <label for="name">Nom :</label>
     <input type="text" name="name" class="form-control" required>
   </div>
   <div class="form-group">
     <label for="message">Votre message :</label>
     <textarea style="resize:none" name="message" class="form-control" rows="5" required></textarea>
   </div>
   <button type="submit" class="btn btn-default">Envoyer</button>
  </form>

  <?php
    foreach ($comments as $comment) {
      $dateFormat = new DateTime($comment['date_comment']);
      $dateFr = $dateFormat->format('d/m/Y à H:i:s');
      echo '<p>' . $comment['name'] . '</p>';
      echo '<p>' . $comment['message'] . '</p>';
      echo '<p>' . $dateFr . '</p>';
      echo '<br /><br /><br /><br /><br />';
    }

    if (isset($_POST['name']) AND isset($_POST['message'])) {
      header('Location: index.php?action=chapters&id=' . $_GET['id'] . '#comment_container');
    }
   ?>
  <?php //commentaires ?>

</div>


<?php
  $content = ob_get_clean();
  require('template.php');
?>
