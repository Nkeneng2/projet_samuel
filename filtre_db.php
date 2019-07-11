<?php
include "layout.php";

$connect = new PDO("mysql:host=localhost;dbname=shoe", "root", "root");

$query = "SELECT * FROM junior2_product WHERE junior2_prix BETWEEN '" . $_POST["minimum_range"] . "' AND '" . $_POST["maximum_range"] . "' ORDER BY junior2_prix ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '
<h4 align="center">Anzahl produkten- ' . $total_row . '</h4><div class="break" >

<div class="row" >';
if ($total_row > 0) {
    foreach ($result as $row) {
        $output .= '
        
        
                    
		        <div class="col">
                    <img src="upload/' . $row["junior2_pic"] . '" class="pho" />
                    <div class="col-body">
                        <h4 class="col-title" >
                        <div class="col-head">
                            <h4 align="center">' . $row["junior2_nom"] . '
                        </div>
                        </h4>
				        <h3 align="center" class="text-danger">' . $row["junior2_prix"] . ' €</h3>
                        <br />
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
