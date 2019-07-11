<?php 

   //appeller la base de donner
   include("bd.php");
   $id = $_GET['id'];
    if($id>0){
      
      $query = "DELETE FROM `category` WHERE `ID` = $id";
      if (mysqli_query($db, $query)) {
      mysqli_close($db);
        echo "connexion a la base de donner reussi. Categorie Supprimer";
      //redirection ver la page categorie
      header('location: categorie.php');
      exit;
      } 
      else {
      echo "Veuillez reessayer! connexion a la base de donner interrompue. Categorie non Supprimer";
      }
      

    }
    
 ?>
            