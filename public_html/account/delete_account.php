<?php
    include('header.php');
    require('../../SQLcreds.inc');
    $conn = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
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