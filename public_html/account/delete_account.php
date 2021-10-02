<?php
    include('header.php');
    require('../../SQLcreds.inc');
    $conn = mysqli_init();
    mysqli_ssl_set($conn,NULL,NULL, $cert, NULL, NULL);
    mysqli_real_connect($conn, $servername, $SQLuser, $SQLpswd, $dbname, 3306, MYSQLI_CLIENT_SSL);
    if (mysqli_connect_errno()) {
      die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    $username = $_SESSION['username'];
    $sql = "DELETE FROM member_creds WHERE username = '$username';";
    if (mysqli_query($conn, $sql)) {
        session_unset();
        session_destroy();
        echo "<p class='valid'>Record deleted successfully.</p>";
     } else {
        echo "<p class='invalid'>Error deleting record: " . mysqli_error($conn)."</p>";
     }
     mysqli_close($conn);
?>
<!-- <h1>I Will Delete Your Account</h1> -->
<?php
    include('../footer.php');
?>