<?php
//connexion a la bd
//define('DB_SERVER', 'https://studi.f4.htw-berlin.de');
//define('DB_nom', 's0548016');
//define('DB_PASSWORD', 'samuelnoe24');
//define('DB_DATABASE', 'shoe');
define('DB_SERVER', 'localhost');
define('DB_nom', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'shoe');
$db = mysqli_connect(DB_SERVER, DB_nom, DB_PASSWORD, DB_DATABASE);

if ($db === false) {
    die("ERREUR: Connexion interrompue. " . mysqli_connect_error());
}
function FailedMessage($message)

{
    ?>
    <div class="message">
        <?php
        echo str_replace("-", " ", $message);
        ?>
    </div>
    <?php
}

function SuccessMessage($message)

{
    ?>
    <div class="message" style="color:green;">
        <?php
        echo str_replace("-", " ", $message);
        ?>
    </div>
    <?php
}

?>