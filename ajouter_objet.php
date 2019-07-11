
<?php
include("layout.php");
?>
<br/> <br/> <br/> <br/> <br/> <br/>
<h2 align="center">Produkt hinzufügen</h2>
    <div class="container">
        <form action="produkt-hinzufügen.php" method="post" enctype='multipart/form-data'>
            <!--                    <label for="fname">Vorname</label>-->
            <input type="text" name="nom" placeholder="Name des Produktes" required>

            <input type="number" name="prix" placeholder="Preise" required>
            <p>Bild</p>
                    <input type='file' name='file' required/><br/><br>
            <p>Kategorien</p>
<!--            <input type="checkbox" name="insert[]" class="get_value" id="cat" value="Luxx"/>Luxx<br/>-->
<!--            <input type="checkbox" name="insert[]" class="get_value" id="cat" value="simple"/>simple<br/>-->
<!--            <input type="checkbox" name="insert[]" class="get_value" id="cat" value="classic"/>classic<br/>-->

            <!----   afficher categorie  sur form de checkbox apparti de la base de donner       ---------->
            <?php
            $query = "SELECT * FROM category ORDER BY id desc";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
                ?>
                <input type="checkbox" name="insert[]" class="get_value"  id="cat"
                       value=<?php echo $row['nom']; ?> /><?php echo $row['nom']; ?><br/>

            <?php } ?>
            <br>

            <input type="submit" value="Absenden">
        </form>
    </div>
<h4 id="result"></h4>

<br/> <br/> <br/> <br/> <br/>

<?php include "footer.php"?>
