<?php
include "bd.php";
$id = $_POST['id'];
if ($id > 0) {

        $nom = $db->real_escape_string($_POST['nom']);
    $query = "UPDATE category SET nom='$nom' WHERE id = '$id'";
        if (mysqli_query($db, $query)) {
            header('Location: categorie.php');
        } else {
            echo "Veuillez reessayer, connexion a la base de donner interrompue ";
        }

}

?>