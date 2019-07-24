<?php
include "bd.php";
if (isset($_POST['nom']) && isset($_POST['prix'])) {

    $insert = $_POST['insert'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");
    $values = implode(",", $insert);
    include_once 'connect_ajoutobjet.php';
    $checkbox = new checkbox();
    echo $checkbox->addtoDatabase($nom, $prix, $name, $values);

} else {
    echo "Veuillez remplire toutes les champs ";
}


//for ($i = 80; $i < 89; $i++) {
//
//    $array = ['arm', 'kette', 'schuhe'];
//    $nom = "soleil" . $i;
//    $prix = rand(200, 500);
//    $name = $i . "." . "jpg";
//    $value = array_rand($array, 1);
//    $values = $array[$value];
//    include_once 'connect_ajoutobjet.php';
//    $checkbox = new checkbox();
//    echo $checkbox->addtoDatabase($nom, $prix, $name, $values);
//
//
//}
