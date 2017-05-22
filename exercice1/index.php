<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 8, Exercice 1 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centeredTwo">
               <h1>Exercice 1</h1>
               <!-- la variable superglobale $_SERVEUR permet de renvoyer les informations du service.
               On utilise alors la fonction print_r() qui permet d'afficher les informations visibles.
               On peut ensuite utiliser des clés spécifiques pour ressortir une information précise du serveur.
               Par exemple, HTTP_USER_AGENT permet de ressortir le user agent du serveur-->
               <p>Les informations de votre USER AGENT : <?php print_r($_SERVER['HTTP_USER_AGENT']); ?></p>
               <!-- Par exemple, SERVER_ADDR permet de ressortir l'adresse IP --> 
               <p>Votre adresse IP : <?php print_r($_SERVER['SERVER_ADDR']); ?></p>
               <!-- Par exemple, SERVER_NAME permet de ressortir le nom du serveur hôte --> 
               <p>Le nom de votre serveur : <?php print_r($_SERVER['SERVER_NAME']); ?></p>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>