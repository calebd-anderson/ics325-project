<?php
    session_start();
    require 'header.php';
    require('setup_2fa.inc');

    //$tfa = unserialize($_SESSION["tfa"]);
    $secret = $_SESSION['secret'];

    // password_hash($pswd, PASSWORD_DEFAULT);
    // password_verify($pswd, $value);

    $code = $_POST['code'];
    // echo '<p>This is $secret: '.$secret.'</p>';
    // echo '<p>This is your $code: '.$code.'</p>';

    $result = $tfa->verifyCode($secret, $code);

    if (!isset($_POST['code'])){
        //code not entered
    }else if($result){
        echo '<fieldset class="fieldset"><p>You\'re authorized.</p></fieldset>';
        $_SESSION['valid_user'] = $_SESSION['username'];
        header("Location:home.php");
    }else{
        echo '<fieldset class="fieldset"><p>You\'re not authorized.</p></fieldset>';
    }
?>