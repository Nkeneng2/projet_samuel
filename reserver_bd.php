<?php
 
$error='';
?>

<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        if (isset($_POST['article']) && isset($_POST['nom']) && isset($_POST['message'])) {
            $article = $db -> real_escape_string($_POST['article']);
            $nom =$db -> real_escape_string($_POST['nom']);
            $message=$db -> real_escape_string($_POST['message']);
  
       
            $query="INSERT INTO book (article,nom,message)" . "VALUES ('$article','$nom','$message' ) " ;
            if ($db->query($query) === true) {
                $_SESSION['message']= " Enregistrement reussi! ";

                //redirection ver la page index
                header("location: index.php");
            } else {
                $error="<div class='error'> Veuillez reeassayer!, connexion a la base de donner interrompue </div>";
            }
        }
         else {
            $error="<div class='error'>Veuillez remplir toute les champs!</div>";
        }
    }
} 

?>