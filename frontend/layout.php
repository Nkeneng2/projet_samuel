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
        <a href="index.php" class="active">Homepage</a>
        <a href="ajouter_objet.php">Produkt hinzufügen</a>
        <!--        <input type="checkbox" id="drop-1"/>-->
        <?php if (!isset($_SESSION['login_user'])) { ?>
            <a href="connexion.php">login</a>
            <?php
        } else {
            ?>
            <a href="categorie.php"> Kategorien</a>
            <a href="#"><?php echo $user_check; ?></a>
            <a href="../backend/deconnect.php"> logout</a>
        <?php } ?>
    </nav>
    <form action="research.php" method="Get" style="margin-right: 8px;">
        <input type="text" placeholder="Search by name" id="btn2" name="search">
    </form>
</div>

<?php
$query = "SELECT * FROM junior2_category ORDER BY junior2_id desc";
$result = mysqli_query($db, $query);
?>
<div class="category">
    <?php while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row; ?>
        <a href="show-category.php?cat=<?php echo $row['junior2_nom'] ?>"><?php echo $row['junior2_nom'] ?></a>
    <?php } ?>
</div>
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
} ?>
