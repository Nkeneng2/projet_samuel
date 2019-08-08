<?php
include("bd.php");
session_start();
if (!preg_match('#^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$#', $_POST['passworde']) || !preg_match('#^[A-Za-z][A-Za-z0-9]{5,31}$#', $_POST['nom'])) {
    header("location: ../frontend/connexion.php?type=error&message=Name-or-password-incorrect");
} else {
    $nom = $_POST['nom'];
    $query = "SELECT junior2_ID, junior2_nom, junior2_password FROM junior2_login where  junior2_nom='$nom'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    if ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
        $passwordCorrect = password_verify($_POST['passworde'], $row['junior2_password']);
        if ($passwordCorrect) {
            $_SESSION['login'] = $nom; // hold the user name in session
            $_SESSION['id'] = $row['junior2_ID']; // hold the user id in session
            $id = $_SESSION['id'];
            $_SESSION['login_user'] = $nom;
            header("location: ../frontend/index.php");
        } else {
            header("location: ../frontend/connexion.php?type=error&message=Name-or-password-incorrect");
        }
    } else {
        header("location: ../frontend/connexion.php?type=error&message=Name-or-password-incorrect");
    }
}
 
