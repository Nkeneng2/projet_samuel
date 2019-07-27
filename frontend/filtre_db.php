<?php
include "layout.php"; ?>
<br>
<?php

$connect = new PDO("mysql:host=localhost;dbname=shoe", "root", "root");

$query = "SELECT * FROM junior2_product WHERE junior2_prix BETWEEN '" . $_POST["minimum_range"] . "' AND '" . $_POST["maximum_range"] . "' ORDER BY junior2_prix ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '
<h2 style="text-align: center;color: red;">Anzahl produkten- ' . $total_row . '</h2><div class="break" >

<div class="row" >';
if ($total_row > 0) {
    foreach ($result as $row) {
        $output .= '
                  <div class="col">
                <img src=\'../Assets/upload/'. $row["junior2_pic"].'\'>
                <div class="col-body">
                    <h4>
                        <div class="col-head">
                            <h2>'.$row["junior2_nom"].'</h2>
                            <p>'.$row["junior2_prix"].' €</p>
                        </div>
                    </h4>
                    <p>'.$row["junior2_cat"].' </p>
                    <div class="btn">
                        <a class="button" href="modifier_objet.php?id='.$row["junior2_prix"].'">modify</a>
                        <button type="button" onclick="produktentfernen('.$row["junior2_id"].' )">delete
                        </button>
                    </div>
                </div>
            </div>
		';
    }
} else {
    $output .= '
		<h3 align="center">Kein Produkt gefunden</h3>
	';
}

$output .= '
</div>  </div>
</div>
';

echo $output;

?>
