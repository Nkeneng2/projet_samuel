<?php


 //appeller la base de donner
 include("bd.php");
  session_start();

  if(session_destroy()){

          
    //redirection ver la page index
    header("location: index.php");
   }
   else{
       echo "Deconnexion echouer!, Veuillez reessayer";
   }


?>