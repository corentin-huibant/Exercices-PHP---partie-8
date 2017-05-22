<?php
    //Pour conserver les données pendant une connexion, on démarre une session avec la fonction session_start. Elle se trouve forcément au début du code.
    session_start();
    //ensuite, on utilise la variable superglobale $_SESSION (un tableau) pour définir les informations qu iseront partagées entre les pages.
    $_SESSION['prenom'] = 'Corentin';
    $_SESSION['nom'] = 'HUIBANT';
    $_SESSION['age'] = 28;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 8, Exercice 2 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
               <h1>Exercice 2</h1>
               <!-- on affiche nos sessions prédéfinies sur la deuxième page -->

               <!-- l'ancre nous redirige vers la page index.php -->
               <a href="user.php">Lien vers user.php</a>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>
<?php
    //fermeture de la session sans la destrution des données
    session_write_close();
?>