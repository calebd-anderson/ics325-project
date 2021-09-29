<?php
    require_once '../../vendor/autoload.php';
    //require_once '/var/www/html/wwwroot/vendor/autoload.php';

    use RobThree\Auth\TwoFactorAuth;

    $tfa = new TwoFactorAuth('Chasing the Arctic Consulting', 6, 30, 'sha1');

    $secret = $tfa->createSecret();
?>