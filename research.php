<?php
include "layout.php";
?>
    <br/> <br/> <br/> <br/> <br/> <br/>
    <div class="break">
    <div class="row">
<?php
if (isset($_GET['search']) AND !empty($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    $query = "SELECT * FROM junior2_product WHERE junior2_nom='$search' ORDER BY junior2_nom ";
}
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
    $image = $row['junior2_pic']; ?>
    <div class="col"><a href=""><img src='upload/<?php echo $image; ?>' class="pho"> </a>
        <div class="col-body">
            <h4 class="col-title">
                <div class="col-head"><a href=""><?php echo $row['junior2_nom'] ?></a> <?php echo $row['junior2_prix'] ?> €</div>
            </h4>
            <p><a>
                    <div class='catt'>
                        <?php
                        echo $row['junior2_cat'];
                        ?></div>
                </a>
            </p>
            <?php echo "<a href='modifier_objet.php?id=" . $row['junior2_id'] . "'><button class='su' type='submit' > Bearbeiten</button></a>"; ?>
            <?php echo "<a href='supprimer_objet.php?id=" . $row['junior2_id'] . "' onclick='return checkDelete()'><button class='sub' type='submit' > Löschen</button></a>"; ?>
        </div>
    </div>
    </div>
    <?php
}
else {
    echo "<div class='errorsearch'>Kein Produkt</div></div></div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
} ?>
<?php include "footer.php" ?>