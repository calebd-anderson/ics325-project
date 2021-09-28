<?php

require("header.php"); 

require '../../SQLcreds.inc';
$db = mysqli_init();
mysqli_ssl_set($db,NULL,NULL, $cert, NULL, NULL);
mysqli_real_connect($db, 'ics325-mysqldb.mysql.database.azure.com', $SQLuser, $SQLpswd, $dbname, 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
  die('Failed to connect to MySQL: '.mysqli_connect_error());
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
    