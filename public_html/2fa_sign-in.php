<?php
    require 'header.php';
    require('setup_2fa.inc');

    //the secret and code
    $secret = $_SESSION['secret'];
    $code = $_POST['code'];
    // echo '<p>This is $secret: '.$secret.'</p>';
    // echo '<p>This is your $code: '.$code.'</p>';

    $result = $tfa->verifyCode($secret, $code);

    if (!isset($_POST['code'])){
        //code not entered
    }else if($result){
        echo '<section><p>You\'re authorized.</p></section>';
        $_SESSION['valid_user'] = $_SESSION['username'];
        require('footer.php');
    }else{
        echo '<section><p>You\'re not authorized.</p></section>';
        require('footer.php');
    }
?>