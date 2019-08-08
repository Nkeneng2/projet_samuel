<?php

include "bd.php";

if (preg_match('#[a-zA-Z]+$#',$_POST['cat'])){
    $nom = $db->real_escape_string($_POST['cat']);

    $sql = "INSERT INTO  junior2_category(junior2_nom) VALUES ('$nom') ";

    if (mysqli_query($db, $sql)) {
        header("location: ../frontend/categorie.php?type=success&message=category-added-succesfully");
    } else {
        header("location: ../frontend/ajouter_categorie.php?type=error&message=problem-encountered");
        preg_match('#^[a-z]#',$_POST['cat']);
    }
}
else  header("location: ../frontend/ajouter_categorie.php?type=error&message=invalid-category");