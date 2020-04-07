<?php
ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);
session_start();
include 'header.php';
require '../SQLcreds.inc';

    // Create connection
    $conn = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }  

  //get username and password variables
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST['username'])) {
      //$usernameErr = "Name is required. ";
      } else {
          $username = test_input($_POST['username']);
          $_SESSION['username'] = $username;
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
              $usernameErr = "Only letters and white space allowed. ";
          }
      }
    if (empty($_POST['pswd'])) {
      $pswdErr = "Password is required. ";
      } else {
        $pswd = test_input($_POST['pswd']);
      }

    $sql = "SELECT pswd FROM member_creds WHERE username = '$username' LIMIT 1";
    $result = $conn->query($sql);
    $value = mysqli_fetch_object($result);
    // if($value == null) {
    //   throw new Exception("Password or username incorrect");
    // }
    // try {
      @$value = $value->pswd;
    // }catch(Exception $e) {
    //   echo 'Message: ' .$e->getMessage();
    // }
  }
  //sanatize input
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

//display sign-in form if form has not been submited
if ((!isset($_POST['username'])) || (!isset($_POST['pswd']))) {
?>
<script src="js/fields.js"></script>
<fieldset class="fieldset">
  <legend>Please Log In</legend>
  <form method="post" action="sign_in_form.php" id="mainForm">
    <p><label for="name">Username:</label>
    <input type="text" name="username" id="name" size="20" class="required highlightable"/></p>
    <p><label for="pswd">Password:</label>
      <span class="container"> 
        <input type="password" name="pswd" id="pswd" size="20" class="required highlightable"/>
        <a class="input_img" onclick="toggle_pswd()"><img src="https://cdn3.iconfinder.com/data/icons/show-and-hide-password/100/show_hide_password-07-512.png" width="auto" height="30" id="EYE"></a>
      </span>
      <p id="text">WARNING! Caps lock is ON.</p>
    </p>
    <p><button type="submit" name="submit" class="btn">Log In</button></p>
  </form>
</fieldset>
<?php

//if sibmitted check password and username
}else if(password_verify($pswd, $value)) {
  // visitor's name and password combination are correct
  //extract and decrypt secret
  $sql = "SELECT AES_DECRYPT(secret,UNHEX('***REMOVED***')) FROM member_creds WHERE username = '$username' LIMIT 1";
  $result = $conn->query($sql);
  $row = $result -> fetch_array(MYSQLI_NUM);
  $secret = $row[0];
  $conn->close();
  if(!$secret == null){
    echo '<fieldset class="fieldset"><legend>Please Log In</legend>';
    echo '<p>2FA is enabled on this account. Enter the code from the authenticator app to log in.</p>';    
    ?>
      <form method="post" action="2fa_sign-in.php" id="mainForm">
      <p><label for="code">Code: </label>
      <input type="text" name="code" id="id" size="15" class="required highlightable"/></p>
      <p><button type="submit" name="submit" class="btn">Verify Code</button></p>
      </fieldset>
      </form>
    <?php
    $_SESSION['secret'] = $secret;
    // $_SESSION['username'] = $username;
  }  
  // $conn->close();
  // header("Location:check_2fa.php");
  // $_SESSION['valid_user'] = $username;
  if($secret == null){
    $_SESSION['valid_user'] = $username;
    echo '<fieldset class="fieldset"><legend>You\'re Signed In</legend>
    <p>I bet you\'re glad you can see this secret page.</p>';
    echo '<p>MFA has not been setup on this account (the secret field in the database is empty).</p>';
    ?>
    <p>Try one of these great apps to setup multi-factor authentication: </p>
    <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><img src="https://lh3.googleusercontent.com/HPc5gptPzRw3wFhJE1ZCnTqlvEvuVFBAsV9etfouOhdRbkp-zNtYTzKUmUVPERSZ_lAL=s180" alt="Google Authenticator"></a>
    <a href="https://play.google.com/store/apps/details?id=com.authy.authy&hl=en"><img src="https://lh3.googleusercontent.com/T7_4mv5aTo4XdLWz_vAQ2Hg8E-uMf_XUZMtdHdnf5ifZEP413DhOEDo2YEMSSL1Jl4k=s180" alt="Microsoft Authenticator"></a>
    <a href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en"><img src="https://lh3.googleusercontent.com/MkSEE1fAQDUfQsqlhUEat-ZzJjkR2XnJEJpE-abcn7dPcIN8aYocgLoIDhujEDD5w-g=s180" alt="Authy 2-Factor Authentication"></a>
    <form action="setup_2fa.php" method="get" id="mainForm">
    <p>Would you like to setup multi-factor authentication now?</p>
    <span><button name="yes" type="submit">Yes</button></span>
    <span><button name="no" type="submit">No</button></span>
    </form>
    </fieldset>
    <?php    
  }
} else{
    echo'<fieldset class="fieldset"><h1>Go Away!</h1>';
    echo '<p>You are not authorized to use this resource.</p></fieldset>';
    $conn->close();
  }
include 'footer.php';
?>

<script>  
//caps-lock detect
var input = document.getElementById("pswd");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {
if (event.getModifierState("CapsLock")) {
text.style.display = "block";
} else {
text.style.display = "none"
}
});
</script>

