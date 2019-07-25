<?php
include("../backend/session.php");
?>
<!DOCTYPE html>
<html id="page" lang="fr">

<head>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='../Assets/css/main.css'>
    <script src='../Assets/script/main.js'></script>
    <title>Mypage</title>
</head>

<body>


<div class="header">
    <img src="../Assets/clothes-shop-logo.jpg" style="width: 130px;">
    <!--            affiche slmt sur l version mobile-->
    <label for="drop" class="toggle">Menü</label>
    <!--            <input type="checkbox" id="drop"/>-->
    <nav>
        <?php if (!isset($_SESSION['login_user'])) { ?>
            <a href="connexion.php">login</a>
            <?php
        } else {
            ?>
            <a href="../backend/deconnect.php"> logout</a>
            <a href="categorie.php"> Kategorien</a>
        <?php } ?>
        <a href="ajouter_objet.php">Produkt hinzufügen</a>
        <input type="checkbox" id="drop-1"/>
        <a href="index.php" class="active">Homepage</a>
    </nav>
    <form action="research.php" method="Get" style="margin-right: 8px;">
        <input type="text" placeholder="Search.." id="btn2" name="search">
    </form>
</div>

<?php
$query = "SELECT * FROM junior2_category ORDER BY junior2_id desc";
$result = mysqli_query($db, $query);


?>
<div class="category">
        <?php while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row; ?>
            <a href=""><?php echo $row['junior2_nom'] ?></a>
        <?php } ?>
</div>

<!---->
<!--                </li>-->
<!--------- verifier session utilisateur -------------->
<!--            -->
<!--                    <li>-->
<!--                       -->
<!---->
<!-- $user_check== nom de l'utilisateur connecter-------------->
<!--                  <li>  <a href="#" class="dis">-->
<!--                        --><?php //echo $user_check; ?><!--</a> </li>-->
<!--                    <li>-->
<!--                        -->
<!--                    </li>-->
<!--              -->
<!--                <li>-->
<!--                   -->
<!---->
<!--                </li>-->
<!--                <li>-->
<!-- redirection ver la page index== Acceuil-------------->
<!--                   -->
<!--                </li>-->
<!--            </ul>-->
<!--        </nav>-->
<!---->


<!--<script async src="https://cse.google.com/cse.js?cx=008329031384572640380:0fh3qayfgfo"></script>-->
<!--<div class="gcse-search"></div>-->
<!--<br/>-->
<!--    <a href="geolocalise.php">-->
<!--        <button class='suu' type='submit'> Geolocalization</button>-->
<!--    </a> <br/>-->

<a href="filtre.php">
    <button class='su' type='submit'>Filter nach preis</button>
</a>

<?php
if (isset($_GET['type'])) {
    if ("error" == $_GET['type']) {
        FailedMessage($_GET['nachricht']);
    } elseif ("success" == $_GET['type'] || "logout" == $_GET['type']) {
        SuccessMessage($_GET['nachricht']);
    }
}
//    ?>
