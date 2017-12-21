<?php $title = 'Créer un chapitre'; ?>
<?php ob_start(); ?>

<div id="createChapter">
  <h2 style="text-align:center;">Création d'un chapitre</h2>
  <br />
  <form action="" method="post" enctype="multipart/form-data">
    <input type="text" class="form-control" name="title" placeholder="Titre du chapitre" required />
    <br /><br />
    <textarea name="content" rows="50"></textarea>
    <br /><br />
    <label for="img">Image du chapitre : </label> <input type="file" class="btn btn-default" name="img_chapter" required />
    <br /><br />
    <input type="submit" value="Créer le chapitre">
  </form>
</div>

<?php
if (isset($_POST['title'])) {
  echo $_POST['title'];
  echo $_POST['content'];
  var_dump($_FILES);
}
$content = ob_get_clean();
require('templateAdmin.php');
?>
