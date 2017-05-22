<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 8, Exercice 4 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
                <form id="centered" method="POST" action="user.php">
                    <h1>Exercice 4</h1>
                    <label for="name">Votre nom d'utilisateur : </label><input type="text" name="login" value="" placeholder="Votre nom d'utilisateur"/>
                    <br/>
                    <br/>
                    <label for="lastName">Votre mot de passe : </label><input type="text" name="password" value="" placeholder="Votre mot de passe"/>
                    <br/>
                    <br/>
                    <!-- Pour récupérer les informations du formulaire, on utilise un input de type submit-->
                    <input id="validate" type="submit" value="Valider"/>
                    <?php
                        if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
                    ?>
                        <p><?php echo $_COOKIE['login'] . ' ' . $_COOKIE['password'] ?></p>
                    <?php
                        }
                    ?>
                </form>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>