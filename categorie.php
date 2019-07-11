<?php
include("layout.php");
?>
    <br/>

    <h2 align="center">Kategorien</h2>

    <a href="ajouter_categorie.php">
        <button class="sub">Kategorien hinzufügen</button>
        <br/>
    </a>

    <table>

        <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Bearbeiten</th>
            <th>Löschen</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM category ORDER BY id desc";
        $result = mysqli_query($db, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;

        ?>

        <tr a>
            <td><?php echo $row['id'] ?> </td>
            <td><?php echo $row['nom'] ?></td>

            <!---Redirection ver la page  de modifier categori----------->
            <td> <?php echo "<a href='modifier_categorie.php?id=" . $row['id'] . "'><button class='su' type='submit' > Bearbeiten</button></a>"; ?></td>

            <!---Redirection ver la page  de supprimer categorie----------->
            <td>    <?php echo "<a href='supprime_categorie.php?id=" . $row['id'] . "' onclick='return checkDelete()'><button class='sub' type='submit' > Löschen</button></a> "; ?></td>

            <br/><br/>

            <?php
            }
            ?>

            <br/><br/>

        </tr>

        </tbody>

    </table>


    <br/> <br/> <br/> <br/> <br/>
<?php include "footer.php"; ?>