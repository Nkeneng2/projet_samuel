<?php
$minimum_range = 20;
$maximum_range = 350;
?>
<?php
include("layout.php");
?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <h3 align="center">Filtern Produkten nach Preis</a></h3><br/>
    <br/>
    <form action="filtre_db.php" method="post">
        <div class="row">
            <input type="text" name="minimum_range" id="minimum_range" class="form-control"
                   value="<?php echo $minimum_range; ?>"/>
            <div class="range">
                <div id="price_range"></div>
            </div>
            <br/>
            <input type="text" name="maximum_range" id="maximum_range" class="form-control"
                   value="<?php echo $maximum_range; ?>"/>
        </div>
        <br/>
        <input type="submit" name="submit" id="button" value="filtre prix"/>
    </form>
    <br/>
    <div id="load_product"></div>
    <br/>

<?php include "footer.php"; ?>

