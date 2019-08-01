<?php
include("bd.php");
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] != 'POST' || !preg_match('#^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$#', $_POST['passworde']) || !preg_match('#^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$#', $_POST['confirmpassword']) || !preg_match('#^[a-z]\w+#', $_POST['nom'])) {
    $error = "<div class='error'>The name can have letters ans numbers <br/> the password must have at least 6 caracters and contains numbers </div> ";
} else {
    if ($_POST['passworde'] == $_POST ['confirmpassword']) {
        $nom = $db->real_escape_string($_POST['nom']);
        $password = md5($_POST['passworde']);
        $query = "INSERT INTO junior2_login (junior2_nom,junior2_password)" . "VALUES ('$nom','$password' ) ";
        if ($db->query($query) === true) {
//            $_SESSION['message'] = " Enregistrement reussi! ";
            $_SESSION['login_user'] = $nom;
            header("location: ../frontend/index.php?type=success&message=Account-created-successfully");
        } else {
            $error = "<div class='error'> connection disrupted </div>";
        }
    } else {
        $error = "<div class='error'>different password</div>";
    }
}
?>