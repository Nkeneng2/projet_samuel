<?php
//appeller la base de donner
include("bd.php");
   $error=""; 

   session_start();

   if (isset($_POST['submit'])) {
       if (isset($_POST['nom']) || isset($_POST['passworde'])) {
           if (empty($_POST['nom']) || empty($_POST['passworde'])) {
               $error="<div class='error'>Veillez remplire le nom et mot de pass </div> ";
           } else {
               $nom=$_POST['nom'];
               $password = md5($_POST['passworde']);
               // $password = sha1($_POST['passworde']);

               $query="SELECT ID, nom, passworde FROM loginn where  nom='$nom' AND passworde='$password' LIMIT 1 ";

               $result=mysqli_query($db, $query) or die(mysqli_error($db));
               if ($row = mysqli_fetch_assoc($result)) {
                   $array[] = $row;
           
                   $_SESSION['login']=$nom; // hold the user name in session
                     $_SESSION['id']=$row['ID']; // hold the user id in session
                     $uip=$_SERVER['REMOTE_ADDR']; // get the user ip
                     $id=$_SESSION['id'];

                   $_SESSION['login_user']= $nom;

                   //redirection ver la page index
                   header("location: index.php");
                   $error=" Mot de passe ou pseudo correct";
               } else {
                   // $error = '';
                   $error= "<div class='error'>Mot de passe ou pseudo incorrecte </div> " ;
               }
           }
       } else {
           $error="Veuillez remplire toute les champs";
       }
   }
?>
 
