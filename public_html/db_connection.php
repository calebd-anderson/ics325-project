<?php
    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "ics325sp200104";
     $dbpass = "6558";
     $db = "ics325sp200104";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
    ?>