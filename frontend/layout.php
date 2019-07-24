<?php
include("../backend/session.php");
?>
<!DOCTYPE html>
<html id="page" lang="fr">

<head>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mypage</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../Assets/css/main.css'>
    <script src='../Assets/script/main.js'></script>
</head>

<body>
<div class="content">
    <header>
        <img src="../Assets/clothes-shop-logo.jpg">
    </header>

    <div class="nav">
        <nav>
            <label for="drop" class="toggle">Menü</label>
<!--            <input type="checkbox" id="drop"/>-->
            <ul class="menu">
<!--                <li>-->
                    <form action="research.php" method="Get">
                        <input type="text" placeholder="Search.." id="btn2" name="search">
                    </form>

<!--                </li>-->
                <!--------- verifier session utilisateur -------------->
                <?php if (!isset($_SESSION['login_user'])) { ?>
                    <li><a href="connexion.php">login</a> </li>
                    <?php
                } else {
                    ?>
                    <li>
                        <a href="../backend/deconnect.php"> logout</a> </li>

                    <!-- $user_check== nom de l'utilisateur connecter-------------->
                  <li>  <a href="#" class="dis">
                        <?php echo $user_check; ?></a> </li>
                    <li>
                        <a href="categorie.php"> Kategorien</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="ajouter_objet.php">Produkt hinzufügen</a>
                    <input type="checkbox" id="drop-1"/>

                </li>
                <li>
                    <!-- redirection ver la page index== Acceuil-------------->
                    <a href="index.php" class="active">Homepage</a>
                </li>
            </ul>
        </nav>


    </div>
    <script async src="https://cse.google.com/cse.js?cx=008329031384572640380:0fh3qayfgfo"></script>
    <div class="gcse-search"></div>
    <br/>
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
