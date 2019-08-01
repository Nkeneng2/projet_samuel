<?php
include("bd.php");
  session_start();
  if(session_destroy()){
    header("location: ../frontend/index.php");
   }
   else{
       echo "please try again";
   }
?>