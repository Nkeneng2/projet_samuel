<?php
include "layout.php";
?>
<br/>
<h2>Modify category</h2><br/>
<form action="../backend/modifcatdb.php" method="post" enctype='multipart/form-data'>name<br/>
    <input type="text" name="nom" class="form" placeholder="Entrez le Nom" required>
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">

    <input class="button1" type="submit" name="submit" value="Speichern">

</form>
<br/>
<?php include "footer.php" ?>
