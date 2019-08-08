<?php 
require_once 'ajout_objetdb.php';
class checkbox extends connectionClass
{
    public function addtoDatabase($nom, $prix, $name, $value,$id=0)
    {
        if ($id>0) {
            $querry = "UPDATE junior2_product SET junior2_nom='$nom', junior2_prix='$prix', junior2_pic='$name', junior2_cat='$value' WHERE junior2_id = '$id'";
            $result = $this->query($querry) or die($this->error);
            if ($result) {
                header('location: ../frontend/index.php');
            } else {
                return "connection disrupted";
            }
        }
    }
}

?> 