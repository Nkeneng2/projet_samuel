<?php

//appeller la base de donner
include("bd.php");

//if ($_POST['key']){
//    var_dump("ok received");
//    die;
//}
//else var_dump("not received"); die;


$id = $_POST['key'];
if ($id > 0) {
    $query = "DELETE FROM `junior2_product` WHERE `junior2_ID` = $id";
    if (mysqli_query($db, $query)) {
        mysqli_close($db);
        header('Location: ../frontend/index.php?type=success&nachricht=Produkt-erfolgreich-gelöscht');
        exit;
    } else {
        echo "Veuillez réessayez!, connexion a la base de donner interrompue. Objet non supprimer ";
    }


} ?>
            