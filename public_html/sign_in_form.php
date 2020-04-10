<?php
// ini_set('display_startup_errors',1); 
// ini_set('display_errors',1);
// error_reporting(-1);
// session_start();
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
      <span class="eye_container"> 
        <input type="password" name="pswd" id="pswd" size="20" class="required highlightable"/>
        <a class="input_img" onclick="toggle_pswd()">
        <span id="eye">
          <svg class="bi bi-eye" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z" clip-rule="evenodd"/>
          </svg>
        </span>
        </a>
      </span>
      <p id="CapsLk">WARNING! Caps lock is ON.</p>
    </p>
    <p><button type="submit" name="submit" class="btn">Log In</button></p>
  </form>
</fieldset>
<?php

//if sibmitted check password and username
}else if(password_verify($pswd, $value)) {
  // visitor's name and password combination are correct
  //extract and decrypt secret
  $sql = "SELECT AES_DECRYPT(secret, UNHEX('$key')) FROM member_creds WHERE username = '$username' LIMIT 1";
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
    echo '<section><h2>You\'re Signed In</h2>
    <p>I bet you\'re glad you can see this secret page.</p>';
    echo '<strong>Multi-factor authentication has not been setup on this account.</strong>';// (the secret field in the database is empty)
?>
  <p>Try one of these great apps to setup multi-factor authentication:</p>
  <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><img src="https://lh3.googleusercontent.com/HPc5gptPzRw3wFhJE1ZCnTqlvEvuVFBAsV9etfouOhdRbkp-zNtYTzKUmUVPERSZ_lAL=s180" alt="Google Authenticator" width="100" height="auto"></a>
  <a target="_blank" href="https://play.google.com/store/apps/details?id=com.authy.authy&hl=en"><img src="https://lh3.googleusercontent.com/MkSEE1fAQDUfQsqlhUEat-ZzJjkR2XnJEJpE-abcn7dPcIN8aYocgLoIDhujEDD5w-g=s180" alt="Authy 2-Factor Authentication" width="100" height="auto"></a>
  <a target="_blank" href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en"><img src="https://lh3.googleusercontent.com/T7_4mv5aTo4XdLWz_vAQ2Hg8E-uMf_XUZMtdHdnf5ifZEP413DhOEDo2YEMSSL1Jl4k=s180" alt="Microsoft Authenticator" width="100" height="auto"></a>
  <form action="setup_2fa.php" method="get" id="mainForm">
  <p>Would you like to setup multi-factor authentication now?</p>
  <span><button name="yes" type="submit">Yes</button></span>
  <span><button name="no" type="submit">No</button></span>
  </section>
  </form>
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
  var text = document.getElementById("CapsLk");
  input.addEventListener("keyup", function(event) {
    if (event.getModifierState("CapsLock")) {
      text.style.display = "block";
    } else {
      text.style.display = "none"
    }
  });
</script>

