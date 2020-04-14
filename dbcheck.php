 <?php
    $db = new mysqli("localhost", "ics325sp200104", "6558", "ics325sp200104");

    if(!$db){

        echo "Failed to connect to database.";

        exit;

    }
    
?>