<?php
include("layout.php");
?>
    <br/>
    <h2 align="center">Category</h2>
    <a href="ajouter_categorie.php">
        <button class="sub">Add Category</button>
        <br/>
    </a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mpdify</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM junior2_category ORDER BY junior2_id desc";
        $result = mysqli_query($db, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
        ?>
        <tr a>
            <td><?php echo $row['junior2_id'] ?> </td>
            <td><?php echo $row['junior2_nom'] ?></td>
            <td> <?php echo "<a href='modifier_categorie.php?id=" . $row['junior2_id'] . "'><button class='su' type='submit' > Bearbeiten</button></a>"; ?></td>
            <td>    <?php echo "<a href='../backend/supprime_categorie.php?id=" . $row['junior2_id'] . "' onclick='return checkDelete()'><button class='sub' type='submit' > Löschen</button></a> "; ?></td>
            <br/><br/>
            <?php
            }
            ?>
            <br/><br/>
        </tr>
        </tbody>
    </table>
    <br/>
<?php include "footer.php"; ?>