<?php

//appeller la base de donner
include("bd.php");
session_start();
$error='';
?>
<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  if($_POST['passworde'] == $_POST ['confirmpassword'] ) {
      
      $nom =$db -> real_escape_string($_POST['nom']);
  
       $password =md5($_POST['passworde']);
       $query="INSERT INTO junior2_login (junior2_nom,junior2_password)" . "VALUES ('$nom','$password' ) " ;

       if ($db->query($query) === true ) {
            $_SESSION['message']= " Enregistrement reussi! ";
                
            $_SESSION['login_user']= $nom;

            //redirection ver la page index
            header("location: index.php");
                
               
        }
        else{
            $error="<div class='error'> Veuillez reeassayer!, connexion a la base de donner interrompue </div>";
        }
    
    }

    else{
    $error="<div class='error'>les 02 mots de pass sont different!</div>";
    }

} 

?>