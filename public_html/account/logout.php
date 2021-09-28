<?php
    session_start();
    // unset($_SESSION["id"]);
    //destroy all session variables
    session_unset();
    // unset($_SESSION["username"]);
    header("Location:../");
    session_destroy();
?>