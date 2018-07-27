<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/style/style.css">
    <script src="public/js/ajax.js" charset="utf-8"></script>
    <script src="public/js/moyenne.js" charset="utf-8"></script>
    <title></title>
  </head>
  <body>

    <div class="all">


      <div class="cotegauche">
        <div class="miseformg">
          <textarea name="champ" rows="8" cols="80"></textarea>
          <input type="button" name="envoie" value="envoyer">
        </div>
      </div>

      <div class="cotedroit">
        <div class="lettre" name="rec">
          <h3>Stat lettres</h3>
          <h4 class="moyLettre"></h4>
        </div>
        <div class="mot" name="rec">
          <h3>Stat mots</h3>
          <h4 class="moyMot"></h4>
        </div>
        <div class="phrase" name="rec">
          <h3>Stat phrases</h3>
          <h4 class="moyPhrase"></h4>
        </div>
        <div class="moyenne">
        <input type="button" name="envoyer" value="moyenne">
        </div>
      </div>

    </div>
  </body>
</html>
