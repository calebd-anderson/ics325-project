<?php
//session_start();
require_once 'autoload.php';
require_once 'lib/Providers/Qr/MyProvider.php';
//register($path, $namespace)
Loader::register('lib','RobThree\\Auth');
use RobThree\Auth;

$mp = new Auth\Providers\Qr\MyProvider();
$tfa = new Auth\TwoFactorAuth('Chasing the Arctic Consulting', 6, 30, 'sha1', $mp);

$secret = $tfa->createSecret();
      
?>