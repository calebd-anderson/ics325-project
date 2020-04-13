<?php
    include('header.php');
    require('../SQLcreds.inc');
    $conn = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $username = $_SESSION['username'];
    $sql = "SELECT AES_DECRYPT(secret, UNHEX('$key')) FROM member_creds WHERE username = '$username' LIMIT 1";
    $result = $conn->query($sql);
    $row = $result -> fetch_array(MYSQLI_NUM);
    $secret = $row[0];
?>
<h1>I Will Delete Your Account</h1>
<?php
    include('footer.php');
?>