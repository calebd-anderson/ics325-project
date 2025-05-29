<?php
    if (str_contains($_SERVER['SERVER_NAME'], 'localhost'))
        require_once '../../vendor/autoload.php';
    else
        require_once '/var/www/html/wwwroot/vendor/autoload.php';

    use RobThree\Auth\TwoFactorAuth;

    $tfa = new TwoFactorAuth('Climate Consulting NPO', 6, 30, 'sha1');

    $secret = $tfa->createSecret();
?>