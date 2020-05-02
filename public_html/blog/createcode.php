<?php

require("../header.php"); 

require '../../SQLcreds.inc';
$db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
if(mysqli_connect_errno())
        {
    echo "<p>Error: Could not connect to database.<br/>
        Please try again later.</p>";
    exit;
         }
 else {
    $title = $_POST['title'];
    echo "<p align=center>$title</p> ";
        
    $body = $_POST['body'];
    echo "<p align=center>$body</p> ";
 }

if (!$db) {
    echo "Could not connect to DB";
}
else {
    $query1 = "INSERT INTO member_blog (title, body) VALUES (?, ?)";
    $stmt1 = $db->prepare($query1);
    // $db->multi_query($query);
    $stmt1->bind_param('ss', $title, $body);
    $stmt1->execute();

    $db->close();
}
require("../footer.php"); 
?>
    