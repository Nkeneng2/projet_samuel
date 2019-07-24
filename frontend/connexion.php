<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' media='screen' href='../Assets/css/login.css'>
</head>
<body background="fr.jpg">
<?php //include "layout.php"; ?>
<div id="resultat">
    <!-- Nous allons afficher un retour en jQuery au visiteur -->
</div>

<div class="all">
    <!--------------- Appeller la page de la base de donner de connexion -------------->
    <?php include("../backend/connexiondb.php"); ?>


    <!------------------Formulaire de connexion ----------------->
    <form action=" " method="post">
        <h2>login</h2>
        <div class="container">

            <!--------------- Aficher l'erreur de connexion -------------->
            <?php echo $error; ?><br/>

            <label for="uname"><b>user</b></label>
            <input type="text" placeholder="pseudo" name="nom" id="nom" required>
            <br/>
            <label for="psw"><b>Passwort</b></label>
            <input type="password" placeholder="mots de passe" name="passworde" id="pass" required>
            <br/>

            <!--          <label>-->
            <!--            <input type="checkbox" checked="checked" name="remember"> Reste connecter-->
            <!--          </label>-->
            <button type="submit" name="submit">Login</button>
        </div>

        <!----- redirection ver la page de creation de compte-------------------->
        <span class="psw">kein konto ? <a href="creer_compte.php">Registrieren</a></span>
        <br/><br/>

    </form>
</div>
</body>
</html>


