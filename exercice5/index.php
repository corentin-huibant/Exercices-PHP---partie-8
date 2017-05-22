<?php
/*la fonction setcookie permet de définir un cookie
la fonction se place obligatoirement en début de code, avant le lancement de la page html
elle se présente avec de nombreux paramètres dont (le nom, la valeur, sa date de péremption, son chemin ($path), 
le domaine sur lequel il est disponible (si on définit un domaine inférieur, il est aussi disponible dans les sous-domaines)
la sécurité (si true, le cookie ne sera envoyé que si la connexion est sécurisée), et enfin httponly qui spécifie que le cookie
n'est accessible que via les langages du script (donc pas par javascrit par exemple) */
if(isset($_POST['userLogin']) && isset($_POST['userPassword'])) {
    setcookie('userLogin', $_POST['userLogin'], time() + 365*24*3600, '/', null, false, true);
    setcookie('userPassword', $_POST['userPassword'], time() + 365*24*3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 8, Exercice 5 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
                <form id="centered" method="POST" action="index.php">
                    <h1>Exercice 5</h1>
                    <label for="userLogin">Votre nom d'utilisateur : </label><input type="text" name="userLogin" value="" placeholder="Votre nom d'utilisateur"/>
                    <br/>
                    <br/>
                    <label for="userPassword">Votre mot de passe : </label><input type="password" name="userPassword" value="" placeholder="Votre mot de passe"/>
                    <br/>
                    <br/>
                    <!-- Pour récupérer les informations du formulaire, on utilise un input de type submit-->
                    <input id="validate" type="submit" value="Valider"/>
                </form>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>