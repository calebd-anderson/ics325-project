<?php
require 'header.php';
require 'setup_2fa.php';

if($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['yes'])){
    session_start();

    $mp = new RobThree\Auth\Providers\Qr\MyProvider();
        $tfa = new TwoFactorAuth('Arctic Cruise Consulting', 6, 30, 'sha1', $mp);
        $_SESSION["tfa"] = $tfa;

        $secret = $tfa->createSecret();
        $_SESSION["secret"] = $secret;
    }else {echo "<fieldset><p>no 2fa for u</p></fieldset>";}

?>

<form action="check_2fa.php" method="post" id="mainForm">
                <fieldset>
                    <legend>2FA Setup</legend>
                    <p>Please enter the following code into your authenticator app: <?php echo chunk_split($secret, 4, ' '); ?> </p>
                    <p>Then check the secret using the field below.</p>
                    <p><label for="name">Enter the secret from the authenticator app:</label>
                        <input type="text" id="code" name="code" maxlength="25" size="13" class="required hilightable"/>
                    </p>
                </fieldset>
                <p><input type="submit" value="Check code" class="btn"/></p>
            </form>        