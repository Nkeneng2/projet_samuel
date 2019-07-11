<?php
include "layout.php";
?>
    <br/> <br/> <br/> <br/> <br/> <br/>
    <div class="break">
    <div class="row">
<?php
if (isset($_GET['search']) AND !empty($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    $query = "SELECT * FROM product WHERE nom='$search' ORDER BY nom ";
}
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
    $image = $row['pic']; ?>
    <div class="col"><a href=""><img src='upload/<?php echo $image; ?>' class="pho"> </a>
        <div class="col-body">
            <h4 class="col-title">
                <div class="col-head"><a href=""><?php echo $row['nom'] ?></a> <?php echo $row['prix'] ?> €</div>
            </h4>
            <p><a>
                    <div class='catt'>
                        <?php
                        echo $row['cat'];
                        ?></div>
                </a>
            </p>
            <?php echo "<a href='modifier_objet.php?id=" . $row['id'] . "'><button class='su' type='submit' > Bearbeiten</button></a>"; ?>
            <?php echo "<a href='supprimer_objet.php?id=" . $row['id'] . "' onclick='return checkDelete()'><button class='sub' type='submit' > Löschen</button></a>"; ?>
        </div>
    </div>
    </div>
    <?php
}
else {
    echo "<div class='errorsearch'>Kein Produkt</div></div></div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
} ?>
<?php include "footer.php" ?>