<?php

//appeler la page session
include "layout.php";
?>

<br/> <br/> <br/> <br/> <br/> <br/>

<h2>Kategorie bearbeiten</h2><br/>

<form action="modifcatdb.php" method="post" enctype='multipart/form-data'>name<br/>
    <input type="text" name="nom" class="form" placeholder="Entrez le Nom" required>
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">

    <input class="button1" type="submit" name="submit" value="Speichern">

</form>
<br/> <br/> <br/> <br/> <br/>

<?php include "footer.php"?>
