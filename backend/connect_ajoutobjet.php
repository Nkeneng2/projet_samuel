<?php
require_once 'ajout_objetdb.php';

class checkbox extends connectionClass
{
    public function addtoDatabase($nom, $prix, $name, $value)
    {
        $querry = "insert into junior2_product (junior2_nom, junior2_prix, junior2_pic, junior2_cat) value ('$nom','$prix', '$name', '$value')";
        $result = $this->query($querry) or die($this->error);
        if ($result) {
            header('location: ../frontend/index.php?type=success&message=Product-added-successfully');
        } else {
            return "Connection disrupted";
        }
    }
}

