
<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' type='text/css' media='screen' href='../Assets/css/login.css'>
  </head>
  <body background="fr.jpg">
    <div id="resultat">
        <!-- Nous allons afficher un retour en jQuery au visiteur -->
    </div>

    <div class="all" >
     <!--------------- Appeller la page de la base de donner de creation de compte -------------->
     <?php include("../backend/creer_comptedb.php"); ?>


<!------------------Formulaire de creation de compte ----------------->
      <form action=" " method="post"> 
       <h2>Registrieren</h2>
       <div class="container">

          <!--------------- Aficher l'erreur de creation de compte -------------->
          <?php echo $error; ?><br/>

          <label for="uname"><b>user</b></label>
          <input type="text" placeholder="pseudo" name="nom" id="nom" required>
          <br/>

          <label for="psw"><b>Passwort</b></label>
            <input type="password" placeholder="mots de passe" name="passworde" id="pass" required>
            <br/> 

          <label for="psw"><b>Passwort bestätigen</b></label>
            <input type="password" placeholder="confirmer mots de passe" name="confirmpassword" required>
          <br/>  
          
           <button type="submit">Login</button> 
        </div>

        <!----- redirection ver la page de connexion-------------------->
        <span class="psw">Schon Mitglied?<a href="connexion.php">Login</a></span>
         <br/><br/>

      </form>
    </div>
  </body>
</html>