<?php
session_start();
session_destroy();
header("Location:/views/auth/login_test.php");
?>