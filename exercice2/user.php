<?php
    // On démarre la session AVANT toute chose
    session_start(); 
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
               <?php
                    if(isset($_SESSION['prenom'])){
               ?>
               <p><?php echo $_SESSION['prenom'];?></p>
               <?php
                    }else{
               ?>
                    <p>La session a expiré</p>
                <?php
                    }
               ?>
                    
                <?php
                    if(isset($_SESSION['nom'])){
               ?>
               <p><?php echo $_SESSION['nom'];?></p>
               <?php
                    }else{
               ?>
                    <p>La session a expiré</p>
                <?php
                    }
               ?>
                    
               <?php
                    if(isset($_SESSION['age'])){
               ?>
               <p><?php echo $_SESSION['age'];?></p>
               <?php
                    }else{
               ?>
                    <p>La session a expiré</p>
                <?php
                    }
               ?>
               <!-- l'ancre nous redirige vers la page index.php -->
               <a href="index.php">Lien vers index.php</a>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>
<?php
//Destruction des données
 session_unset();
 //Destruction de la session
 session_destroy();
?>