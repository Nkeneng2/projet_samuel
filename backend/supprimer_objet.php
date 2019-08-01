<?php
include("bd.php");
$id = $_POST['key'];
if ($id > 0) {
    $query = "DELETE FROM `junior2_product` WHERE `junior2_ID` = $id";
    if (mysqli_query($db, $query)) {
        mysqli_close($db);
        header('Location: ../frontend/index.php?type=success&message=Product-deleted-successfully');
    } else {
        echo "connection disrupted";
    }
} ?>
            