<?php
    require_once 'autoload.php';
    require_once '2fa_lib/Providers/Qr/MyProvider.php';

    Loader::register('2fa_lib','RobThree\\Auth');
    use RobThree\Auth;

    $mp = new Auth\Providers\Qr\MyProvider();
    $tfa = new Auth\TwoFactorAuth('Chasing the Arctic Consulting', 6, 30, 'sha1', $mp);

    $secret = $tfa->createSecret();
?>