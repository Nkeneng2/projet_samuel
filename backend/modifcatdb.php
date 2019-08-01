<?php
include "bd.php";
$id = $_POST['id'];
if ($id > 0) {
        $nom = $db->real_escape_string($_POST['nom']);
    $query = "UPDATE junior2_category SET junior2_nom='$nom' WHERE junior2_id = '$id'";
        if (mysqli_query($db, $query)) {
            header('Location: ../frontend/categorie.php');
        } else {
            echo "connection disrupted";
        }
}
?>