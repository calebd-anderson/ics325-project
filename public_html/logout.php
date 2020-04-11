<?php
    session_start();
    // unset($_SESSION["id"]);
    session_unset();
    // unset($_SESSION["username"]);
    header("Location:home.php");
    session_destroy();
?>