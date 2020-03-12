<?php
include "layout.php";
?>
<br>


<form action="../backend/ajouter_categoriedb.php" method="post" enctype='multipart/form-data'>
    <h2>Add category</h2><br/>Name<br/>
    <input type="text" name="cat" class="form" placeholder="Insert the category" required>

    <input class="button1" type="submit" name="submit" value="Speichern">

</form>
<br>
<?php include "footer.php"; ?>

