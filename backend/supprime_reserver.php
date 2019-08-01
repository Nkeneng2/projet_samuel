<?php 
 include("bd.php");
   $id = $_GET['id'];
    if($id>0){
      $query = "DELETE FROM `junior2_book` WHERE `junior2_id` = $id";
      if (mysqli_query($db, $query)) {
            mysqli_close($db);
            echo "connexion a la base de donner reussi. Reservation Supprimer";
            header('location: ../frontend/liste_reserver.php');
            exit;
       } 
       else 
       {
       echo "Veuillez reessayer! connexion a la base de donner interrompue. Reservation non Supprimer";
       }
    }
 ?>
            