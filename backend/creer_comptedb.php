<?php
include("bd.php");
session_start();
if (!preg_match('#^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$#', $_POST['passworde']) || !preg_match('#^[A-Za-z][A-Za-z0-9]{5,31}$#', $_POST['nom'])) {
    header("location: ../frontend/creer_compte.php?type=error&message=The-name-can-have-letters-and-numbers-both-must-have-at-least-6-caracters-and-contains-numbers");
} else {
    $nom = $_POST['nom'];
    $query = "SELECT junior2_nom FROM junior2_login where  junior2_nom='$nom'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    if ($row = mysqli_fetch_assoc($result)) {
        header("location: ../frontend/creer_compte.php?type=error&message=Name-already-exist");

    } elseif ($_POST['passworde'] == $_POST ['confirmpassword']) {
        $nom = $db->real_escape_string($_POST['nom']);
//        $password = md5($_POST['passworde']);
        $password = password_hash($_POST['passworde'],PASSWORD_DEFAULT);
        $query = "INSERT INTO junior2_login (junior2_nom,junior2_password)" . "VALUES ('$nom','$password' ) ";
        if ($db->query($query) === true) {
            $_SESSION['login_user'] = $nom;
            header("location: ../frontend/index.php?type=success&message=Account-created-successfully");
        } else {
            $error = "<div class='error'> connection disrupted </div>";
        }
    } else {
        $error = "<div class='error'>different password</div>";
    }
}
