<?php $title = "Bienvenue Jean Forteroche"; ?>
<?php ob_start(); ?>


<div id="admin_container">
  <h2>Bienvenue dans votre administration Jean Forteroche</h2>
  <h3>C'est ici que vous pouvez ajouter, supprimer ou éditer les chapitres et les commentaires.</h3>
  <div id="chapter_admin_container">
    <div class="chapter_admin">
      <h4><strong>Créer un chapitre</strong></h4>
      <a href="index.php?action=createChapter"><button type="button" name="createChapter" class="btn btn-default">Créer</button></a>
    </div>
    <div class="chapter_admin">
      <h4><strong>Editer un chapitre</strong></h4>
      <form action="index.php">
        <select name="editChapter">
          <?php
            foreach ($chapters as $chapter) {
              echo '<option value="' . $chapter['id'] . '">' . $chapter['title'] . '</option>';
            }
           ?>
        </select>
        <input type="submit" name="" value="Éditer">
      </form>
    </div>
    <div class="chapter_admin">
      <h4><strong>Supprimer un chapitre</strong></h4>
      <form action="index.php">
        <select name="deleteChapter">
          <?php
            foreach ($chapters2 as $chapter) {
              echo '<option value="' . $chapter['id'] . '">' . $chapter['title'] . '</option>';
            }
           ?>
        </select>
        <input type="submit" name="" value="Supprimer">
      </form>

    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templateAdmin.php'); ?>
