<?php
    // ini_set('display_startup_errors',1); 
    // ini_set('display_errors',1);
    // error_reporting(-1);
    // session_start();
    require 'header.php';
    require('setup_2fa.inc');
    require('../SQLcreds.inc');
    $secret = $_SESSION["secret"];
    $tfa = unserialize($_SESSION["tfa"]);
    $code = $_POST['code'];
    $username = $_SESSION['username'];
?>
<fieldset class="fieldset"><legend>Verify Code</legend>
    <!-- <p>The code entered was <?php echo $code; ?></p>
    <p>The secret was <?php echo chunk_split($secret, 4, ' '); ?></p> -->
<?php
    $result = $tfa->verifyCode($secret, $code);
    echo (($result === true) ? '<span style="color:#0c0">OK</span>' : '<span style="color:#c00">FAIL</span>');
    
    if($result){
        $db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
        if(mysqli_connect_errno()){
            echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
            exit;
        }

        //https://www.w3schools.com/php/php_mysql_prepared_statements.asp
        
        $query = "UPDATE member_creds SET secret = AES_ENCRYPT('$secret', UNHEX('$key')) WHERE username = '$username'";
        if ($db->query($query) === TRUE) {
            echo "<p>Record updated successfully.";
            echo ' Congratulations! The secret is encrypted and stored with your account and multi-factor authentication setup is complete.</p>
        </fieldset>';
        } else {
            echo "Error updating record: " . $db->error;
        }
        //$db->close();
        mysqli_close($db);
        //include('footer.php');

    }else{
        echo '<p>Code does not match.</p>';
        echo '<p>If you see green below it is possible the secret was entered into the app incorrectly.</p>';
        try {
            $tfa->ensureCorrectTime();
            echo '<span style="color:#0c0">Your hosts time seems to be correct / within margin</span>';
        } catch (RobThree\Auth\TwoFactorAuthException $ex) {
            echo '<span style="color:#c00"><b>Warning:</b> Your hosts time seems to be off: ' . $ex->getMessage().'</span>';
        }        
    }
    echo '</fieldset>';
    include('footer.php');
?>