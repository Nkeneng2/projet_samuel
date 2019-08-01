<?php
include("bd.php");
   session_start();
$error="";
           if (!preg_match('#^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$#',$_POST['passworde']) || !preg_match('#[^a-z]\w]+#',$_POST['nom'])) {
               $error="<div class='error'>name or password incorrect</div> ";
           } else {
               $nom=$_POST['nom'];
               $password = md5($_POST['passworde']);
               $query="SELECT junior2_ID, junior2_nom, junior2_password FROM junior2_login where  junior2_nom='$nom' AND junior2_password='$password' LIMIT 1 ";
               $result=mysqli_query($db, $query) or die(mysqli_error($db));
               if ($row = mysqli_fetch_assoc($result)) {
                   $array[] = $row;
                   $_SESSION['login']=$nom; // hold the user name in session
                     $_SESSION['id']=$row['junior2_ID']; // hold the user id in session
                     $uip=$_SERVER['REMOTE_ADDR']; // get the user ip
                     $id=$_SESSION['id'];
                   $_SESSION['login_user']= $nom;
                   header("location: ../frontend/index.php");
               } else {
                   $error= "<div class='error'>username or password incorrect</div> " ;
               }
           }
 
