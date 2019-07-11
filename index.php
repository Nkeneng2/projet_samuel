<?php include "layout.php"?>
<br/> <br/> <br/> <br/>
<div class="break">

    <div class="row">

        <?php
        $query = "SELECT * FROM junior2_product ORDER BY junior2_id desc";
        $result = mysqli_query($db, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
            $image = $row['junior2_pic'];
            ?>


            <div class="col"><a href=""><img src='upload/<?php echo $image; ?>' class="pho"> </a>
                <div class="col-body">
                    <h4 class="col-title">
                        <div class="col-head"><a href=""><?php echo $row['junior2_nom'] ?></a>
                            <?php echo $row['junior2_prix'] ?> €
                        </div>
                    </h4>
                    <p><a>
                            <div class='catt '>
                                <?php

                                //while($row = mysql_fetch_array($query)){
                                echo $row['junior2_cat'];
                                // }

                                ?></div>
                        </a></p>
                    <!---Redirection ver la page  de modifier objet----------->
                    <?php echo "<a href='modifier_objet.php?id=" . $row['junior2_id'] . "'><button class='su' type='submit' > Bearbeiten</button></a>"; ?>

                    <!--------Redirection ver la page reserver article ----------------->
<!--                    --><?php //echo "<a href='reserver.php?id=" . $row['id'] . "'><button class='su' type='submit' >Réserver</button></a>"; ?>

                    <!---Redirection ver la page  de supprimer objet----------->
                    <!--                    --><?php //echo "<a href='supprimer_objet.php?id=".$row['id']."' onclick='produktentfernen()'><button class='sub' type='submit' > Supprimer</button></a>";?>
                    <button class="sub" id="delete" onclick="produktentfernen(<?php echo $row['junior2_id']; ?>)" type="button">
                        Löschen</button>

                </div>

            </div>
        <?php } ?>
        <br/>
    </div>
    <br/>
<?php include "footer.php"; ?>