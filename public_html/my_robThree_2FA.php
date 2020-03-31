<?php
// ini_set('display_startup_errors',1); 
// ini_set('display_errors',1);
// error_reporting(-1);
    require('header.php');
?>

<fieldset style="background-color: rgb(69, 96, 136);"; class="fieldset">
    <?php
    
        echo '<h2>2FA Demo</h2>';
        // echo '<ul><li><b>Current PHP version: '.phpversion().'</b></li></ul>';
        echo '<ol>';

        require_once 'autoload.php';
        Loader::register('lib','RobThree\\Auth');

        use \RobThree\Auth\TwoFactorAuth;
        $mp = new RobThree\Auth\Providers\Qr\MyProvider();
        //$mp = new RobThree\Auth\Providers\Qr\QRicketProvider();

        //$tfa = new TwoFactorAuth('MyApp');
        $tfa = new TwoFactorAuth('Arctic Cruise Consulting', 6, 30, 'sha1', $mp);
        
        //create secret
        echo '<li>First create a secret and associate it with a user';
        $secret = $tfa->createSecret();
        echo '<li>Next create a QR code and let the user scan it:';
        
        //displays QR code
        if (extension_loaded('gd') && function_exists('gd_info')) {
            //echo "<p>PHP GD library is installed on your web server.</p>";
            echo '<br><img src="'.$tfa->getQRCodeImageAsDataUri('ICS 325', $secret).'">';
        }
        else {
            //display the secrete
            echo '<p><span  style="color:rgb(151, 41, 41);">Required PHP GD library to draw the QR code is NOT installed on your web server.</span>'.
            '<br>The authenticator app won\'t automatically recognize it.'.
            '<br>Scan this QR code with this <a target="_blank" href="https://play.google.com/store/apps/details?id=com.kevintesar.qrcodetoclipboard&hl=en_US">app</a> to copy the code to your phone\'s clip-board.'.
            '<br><img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl='.$secret.'" /></p>'.
            '<br>...or display the secret to the user for manual entry: '.
            chunk_split($secret, 4, ' ');
        }
        $code = $tfa->getCode($secret);
        echo '<li>Next, have the user verify the code; at this time the code displayed by a 2FA-app would be: <span id="demo" style="color:yellow">' . $code . '</span> (but that changes periodically)';
        //echo '<li>Next, have the user verify the code; at this time the code displayed by a 2FA-app would be: <span id="demo" style="color:yellow"></span> (but that changes periodically)';
        echo '<li>When the code checks out, 2FA can be / is enabled; store (encrypted?) secret with user and have the user verify a code each time a new session is started.';
        echo '<li>When aforementioned code (' . $code . ') was entered, the result would be: ' . (($tfa->verifyCode($secret, $code) === true) ? '<span style="color:#0c0">OK</span>' : '<span style="color:#c00">FAIL</span>');
    ?>
    </ol>
    <p>Note: Make sure your server-time is <a href="http://en.wikipedia.org/wiki/Network_Time_Protocol">NTP-synced</a>! Depending on the $discrepancy allowed your time cannot drift too much from the users' time!</p>
    <?php
    try {
        $tfa->ensureCorrectTime();
        echo '<span style="color:#0c0"><b>Your host\'s time seems to be correct / within margin.</b></span>';
    } catch (RobThree\Auth\TwoFactorAuthException $ex) {
        echo '<b>Warning:</b> Your host\'s time seems to be off: ' . $ex->getMessage();
    }
    ?>    
    <br><br><button type="button" onclick="loadDoc()" class="btn">refresh page</button>
    </fieldset>
    <!-- <p><input id="myBtn" type="submit" value="refresh code" class="btn"/></p> -->
<?php
    require('footer.php');
?>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById("demo").innerHTML = this.responseText;
      window.location.reload();
    }
  };
  xhttp.open("POST", "my_robThree_2FA.php", true);
  xhttp.send();
}
</script>