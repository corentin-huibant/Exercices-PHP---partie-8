<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 8, Exercice 3 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
            <h1>Exercice 3</h1>
              <?php
                  if (isset($_POST['login']) && isset($_POST['password'])) {
                    $_COOKIE['login'] = $_POST['login'];
                    $_COOKIE['password'] = $_POST['password'];
                  }
              ?>
              <p><?php echo strip_tags(trim($_COOKIE['login'])); ?></p>
              <p><?php echo strip_tags(trim($_COOKIE['password'])); ?></p>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>