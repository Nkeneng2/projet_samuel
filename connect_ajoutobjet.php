<?php

//appeler la base de donner objet pour inserer un objet
require_once 'ajout_objetdb.php';

class checkbox extends connectionClass
{

    public function addtoDatabase($nom, $prix, $name, $value)
    {
        $querry = "insert into junior2_product (junior2_nom, junior2_prix, junior2_pic, junior2_cat) value ('$nom','$prix', '$name', '$value')";
        $result = $this->query($querry) or die($this->error);

        if ($result) {
    //redirection ver la page index
            header('location: index.php');

        } else {
            return "Veuillez réessayez!, conexion a la base de donner interrompue";
        }
    }
}

?>

