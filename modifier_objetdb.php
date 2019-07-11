<?php 

//conexion a la base de donner des toutes les objet
require_once 'ajout_objetdb.php';

class checkbox extends connectionClass
{
    public function addtoDatabase($nom, $prix, $name, $value,$id=0)
    {
        if ($id>0) {
            $querry = "UPDATE product SET nom='$nom', prix='$prix', pic='$name', cat='$value' WHERE id = '$id'";
            $result = $this->query($querry) or die($this->error);
            if ($result) {
                header('location: index.php');
            } else {
                return "Veuillez reessayer!, connexion a la base de donner interrompue";
            }
        }
    }
}

?> 