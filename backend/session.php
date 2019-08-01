<?php
include("bd.php");
session_start();
if (isset($_SESSION['login_user'])) {
    $user_check = $_SESSION['login_user'];
    $query="SELECT nom from loginn where nom='$user_check'";
    $ses_sql= mysqli_query($db, $query);
    $row= mysqli_fetch_assoc($ses_sql);
    $login_session =$row['nom'];
} ?>