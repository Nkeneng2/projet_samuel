<?php
include "layout.php";
?>
<br/> <br/> <br/> <br/> <br/> <br/>

<form action="../backend/ajouter_categoriedb.php" method="post" enctype='multipart/form-data'>
    <h2>Kategorie hinzufügen</h2><br/>Name<br/>
    <input type="text" name="cat" class="form" placeholder="Geben sSie die Kategorie ein" required>

    <input class="button1" type="submit" name="submit" value="Speichern">

</form>
<br/> <br/> <br/> <br/> <br/>

<?php include "footer.php"; ?>

