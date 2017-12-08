<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="public/css/style.css" rel="stylesheet" />
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
         <ul class="nav navbar-nav">
           <li class="active"><a href="#">Accueil</a></li>
           <li><a href="#">Chapitres</a></li>
           <li><a href="#">Contact</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
         </ul>
       </div>
      </nav>

      <?= $content ?>

      <footer></footer>

        <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
