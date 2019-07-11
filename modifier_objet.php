<?php
include "layout.php";
?>
    <br/> <br/> <br/> <br/> <br/> <br/>
    <h2 align="center">Produkt bearbeiten</h2>
    <div class="check">
        <form action="produkt-bearbeiten.php" method="post" enctype='multipart/form-data'>
            <br/>
            <?php
            $id = $_GET['id'];
            if ($id > 0) {
                $query = "SELECT * FROM junior2_product WHERE junior2_id = '$id'";
                $result = mysqli_query($db, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $array[] = $row; ?>
                    <input type="text" name="nom" class="form" placeholder="Genen Sie den name ein"
                           value="<?php echo $row['junior2_nom']; ?>" required>
                    <input type="number" name="prix" class="form" placeholder="Geben Sie der Preis ein"
                           value="<?php echo $row['junior2_prix']; ?>" required/><br/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <br/>
                    <p>Bild</p>
                    <input type='file' name='file' required/><br/>
                    <p>Kategorien</p>
                    <?php
                }
            }
            ?>
            <?php $query = "SELECT * FROM junior2_category ORDER BY junior2_id desc";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
                ?>
                <input type="checkbox" name="insert[]" class="get_value"  id="cat"
                       value=<?php echo $row['junior2_nom']; ?>/><?php echo $row['junior2_nom']; ?><br/>
                <?php
            } ?>
            <br/><br/><br/>
            <input class="button1" type="submit" id="submit" name="submit" value="Speichern"/>
        </form>
    </div>
    <br/> <br/> <br/> <br/> <br/>
<?php include "footer"; ?>