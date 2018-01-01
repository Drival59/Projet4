<?php

$title= "Administration des commentaires"; ?>
<?php ob_start(); ?>
<h2 style="text-align:center;">Administration des commentaires</h2>
<br />
<div id="commentAdmin">
  <?php
    foreach ($comments as $comment) {
      $dateFormat = new DateTime($comment['date_comment']);
      $dateFr = $dateFormat->format('d/m/Y à H:i:s');
      echo '<div class="comments">';
      echo 'Écrit par <strong>' . $comment['name'] . '</strong> le ' . $dateFr;
      echo '<form action="index.php?action=deleteComment" method="post">
      <button name="deleteComment" value=' . $comment['id'] . ' style="float:right" class="btn btn-default">Supprimer</button>
      </form>';
      echo '<form action="index.php?action=editComment" method="post">
      <button name="editComment" value=' . $comment['id'] . ' style="float:right; margin-right:10px;" class="btn btn-default">Editer</button>
      </form>';
      echo "<br /><br />";
      echo $comment['message'];
      echo '</div>';
    }
  ?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templateAdmin.php'); ?>
