<?php
include "layout.php"; ?>
    <br/>
    <div class="break">
    <div class="row">
<?php
if (isset($_GET['search']) AND !empty($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    $query = "SELECT * FROM junior2_product WHERE junior2_nom='$search'";
}
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) != 0){

    while ($row = mysqli_fetch_assoc($result)) {

        $array[] = $row;
        $image = $row['junior2_pic'];
        ?>
        <div class="col">
            <img src='../Assets/upload/<?php echo $image; ?>'>
            <div class="col-body">
                <h4>
                    <div class="col-head">
                        <h2> <?php echo $row['junior2_nom'] ?></h2>
                        <p> <?php echo $row['junior2_prix'] ?> €</p>
                    </div>
                </h4>
                <p><?php echo $row['junior2_cat']; ?> </p>
                <div class="btn">
                    <a class="button" href="modifier_objet.php?id=<?php echo $row['junior2_id'] ?>">modify</a>
                    <button type="button" onclick="produktentfernen(<?php echo $row['junior2_id']; ?>)">delete
                    </button>
                </div>
            </div>
        </div>
    <?php } ?>
    <br/>
    </div>
<?php }
else {
    echo "<div class='errorsearch'>no product</div>";
} ?>
<?php include "footer.php" ?>