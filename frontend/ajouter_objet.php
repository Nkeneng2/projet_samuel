<?php include("layout.php"); ?>
<br>
<h2>Add product</h2>
<div class="container">
    <form action="../backend/produkt-hinzufügen.php" method="post" enctype='multipart/form-data'>
        <input type="text" name="nom" placeholder="Name des Produktes" required>
        <input type="number" name="prix" placeholder="Preise" required>
        <p>Image</p>
        <input type='file' name='file' required/><br/><br>
        <p>Category</p>
        <?php
        $query = "SELECT * FROM junior2_category ORDER BY junior2_id desc";
        $result = mysqli_query($db, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
            ?>
            <input type="checkbox" name="insert[]" class="get_value"  id="cat"
                   value=<?php echo $row['junior2_nom']; ?> /><?php echo $row['junior2_nom']; ?><br/>
        <?php } ?>
        <br>
        <input type="submit" value="Absenden">
    </form>
</div>
<h4 id="result"></h4>
<br/>
<?php include "footer.php" ?>
