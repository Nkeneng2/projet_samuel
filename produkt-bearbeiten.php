<?php
//if (isset($_POST['submit'])) {
    if (isset($_POST['nom']) && isset($_POST['prix'])) {

        $id = $_POST['id'];

        if ($id > 0) {
            $insert = $_POST['insert'];
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];

            $name = $_FILES['file']['name'];
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);

            // Select file type
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpg", "jpeg", "png", "gif");

            // Insert record
            $values = implode(",", $insert);

            //redirection ver la page de bd modifier aojet
            include_once 'modifier_objetdb.php';

            $checkbox = new checkbox();

            echo $checkbox->addtoDatabase($nom, $prix, $name, $values,$id);
        }
}

