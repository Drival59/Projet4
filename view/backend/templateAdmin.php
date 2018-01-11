<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="public/css/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
        <link rel="icon" type="image/png" href="public/images/favicon.png" />
    </head>

    <body>
      <header>
        <div id="title">
          <h1>Jean Forteroche</h1>
          <h2>Un billet simple pour l'Alaska</h2>
        </div>
      </header>
      <nav class="navbar navbar-inverse">
       <div class="container-fluid">
         <ul id="nav-hamburger">
           <li><i class="fa fa-bars fa-2x" style="color:white" aria-hidden="true"></i></li>
         </ul>
         <ul class="nav navbar-nav">
           <li><a href="index.php">Accueil</a></li>
           <li><a href="index.php?action=logout"><span class="glyphicon glyphicon-log-in"></span> Deconnexion</a></li>
         </ul>
       </div>
      </nav>

      <?= $content ?>

      <footer id="footer">
        <div class="social-media">
          <a href="#footer"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
          <a href="#footer"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
        </div>
        <p>Coryright by Jean Forteroche. Designed by Valentin Hanard.</p>

      </footer>

        <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="public/js/alaska.js" charset="utf-8"></script>
        <script src="public/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'.tinymce', language:'fr_FR' });</script>
    </body>
</html>
