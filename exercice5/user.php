<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 8, Exercice 5 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
            <h1>Exercice 5</h1>
              <?php
                  if (isset($_COOKIE['userLogin']) AND isset($_COOKIE['userPassword'])) {
              ?>  
                <p><?php echo $_COOKIE['userLogin']; ?></p>
                <p><?php echo $_COOKIE['userPassword']; ?></p>
              <?php
                  }
              ?>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>