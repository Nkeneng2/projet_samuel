<?php include("../backend/session.php"); ?>
<!DOCTYPE html>
<html id="page" lang="fr">
<head>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
<!--    <link rel='stylesheet' type='text/css' media='screen' href='../Assets/css/login.css'>-->

    <link rel='stylesheet' type='text/css' media='screen' href='../Assets/css/main.css'>

    <title>Mypage</title>
</head>
<body>
<div class="header">
    <img src="../Assets/clothes-shop-logo.jpg" style="width: 130px;">
    <label for="drop" class="toggle">Menü</label>
    <nav>
        <a href="index.php" class="active">Homepage</a>
        <a href="ajouter_objet.php">Add product</a>
        <?php if (!isset($_SESSION['login_user'])) { ?>
            <a href="connexion.php">login</a>
            <?php
        } else {
            ?>
            <a href="categorie.php">Category</a>
            <a href="#"><?php echo $user_check; ?></a>
            <a href="../backend/deconnect.php">logout</a>
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
        <button class='su filter' type='submit'>Filter by price</button>
    </a>
<br>
    <p>
        <?php
if (isset($_GET['type']) && isset($_GET['message'])) {
    Notification($_GET['message'],$_GET['type']);
}?>
    </p>


