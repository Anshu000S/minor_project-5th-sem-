<?php
session_start();
// Include database connection file
include_once('../db//db_connection.php');
if (!isset($_SESSION['ID'])) {
    header("Location:views/auth/login.php");
    exit();
}

include "../views/global/header.php";
?>

<div>This is auth dashboard</div>