<?php
include "bd.php";
if (isset($_POST['cat'])) {

    $nom = $db->real_escape_string($_POST['cat']);


    $sql = "INSERT INTO  junior2_category(junior2_nom) VALUES ('$nom') ";

    if (mysqli_query($db, $sql)) {

        header("location: categorie.php");
    } else {
        echo "Veuillez réessayez, Connection a la base de donner interrompue ";
    }
} else {
    echo "Veuillez entrez une categorie";
}
?>