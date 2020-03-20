<?php
ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);
session_start();
include 'header.php';
  $servername = "localhost";
  $username = "caleb_tree";
  $password = "***REMOVED***";
  $dbname = "***REMOVED***";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST['name'])) {
      //$nameErr = "Name is required. ";
      } else {
          $name = test_input($_POST['name']);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed. ";
          }
      }

    if (empty($_POST['pswd'])) {
      //$pswdErr = "Password is required. ";
      } else {
          $pswd = test_input($_POST['pswd']);
          // check if name only contains letters and whitespace
          // if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          //     $nameErr = "Only letters and white space allowed. ";
          // }
      }
      
    $sql = "SELECT pswd FROM member_credentials WHERE username = '$name' LIMIT 1";
    $result = $conn->query($sql);
    $value = mysqli_fetch_object($result);
    $value = $value->pswd;
    $conn->close();
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
    if ((!isset($_POST['name'])) || (!isset($_POST['pswd']))) {
    // visitor needs to enter a name and password
?>

<fieldset class="fieldset">
  <legend>Please Log In</legend>
  <!-- <p>This page is secret.</p> -->
  <form method="post" action="sign_in.php" id="mainForm">
    <p><label for="name">Username:</label>
    <input type="text" name="name" id="name" size="13" class="required hilightable"/></p>
    <p><label for="pswd">Password:</label>
    <input type="password" name="pswd" id="pswd" size="13" class="required hilightable"/></p>
    <p><button type="submit" name="submit" class="btn">Log In</button></p>
</fieldset>    
  </form>
    
<?php

  } else if(password_verify($pswd, $value)) {
      // visitor's name and password combination are correct
      echo '<fieldset><legend>You\'re Signed In</legend>
      <p>I bet you\'re glad you can see this secret page.</p>';
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //extract and decrypt secret
        $sql = "SELECT AES_DECRYPT(secret,UNHEX('***REMOVED***')) FROM member_credentials WHERE member_credentials.username = '$name' LIMIT 1";
        $result = $conn->query($sql);
        //$value = mysqli_fetch_object($result);
        $row = $result -> fetch_array(MYSQLI_NUM);
        $value = $row[0];
        //echo '<p>this is $value: '.$value.'</p>';
        if($value == null){
          echo '<p>MFA has not been setup on this account (the secret field in the database is empty).</p>';
          ?>
          <p>Try one of these great apps to setup multi-factor authentication: </p>
            <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><img src="https://lh3.googleusercontent.com/HPc5gptPzRw3wFhJE1ZCnTqlvEvuVFBAsV9etfouOhdRbkp-zNtYTzKUmUVPERSZ_lAL=s180" alt="Google Authenticator"></a>
            <a href="https://play.google.com/store/apps/details?id=com.authy.authy&hl=en"><img src="https://lh3.googleusercontent.com/T7_4mv5aTo4XdLWz_vAQ2Hg8E-uMf_XUZMtdHdnf5ifZEP413DhOEDo2YEMSSL1Jl4k=s180" alt="Microsoft Authenticator"></a>
            <a href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en"><img src="https://lh3.googleusercontent.com/MkSEE1fAQDUfQsqlhUEat-ZzJjkR2XnJEJpE-abcn7dPcIN8aYocgLoIDhujEDD5w-g=s180" alt="Authy 2-Factor Authentication"></a>
            <form action="setup_2fa.php" method="get" id="mainForm">
            <p>Would you like to setup multi-factor authentication now?</p>
            <span><input name="yes" type="submit" value="Yes" class="btn"/></span>
            <span><input name="no" type="submit" value="No" class="btn"/></span>
            </form>
            </fieldset>
          <?php
        }else{
          echo '<p>The secret field is populated. 2FA is enabled on this account.</p>';
          ?>
          <form method="post" action="2fa_sign-in.php" id="mainForm">
            <p><label for="code">Code:</label>
            <input type="text" name="code" id="id" size="15" class="required hilightable"/></p>
            </fieldset>
            <p><button type="submit" name="submit" class="btn">Verify Code</button></p>
          </form>          
          <?php
          $_SESSION['secret'] = $value;
        }
        $conn->close();      

  } else {
    // visitor's name and password combination are not correct
    echo '<fieldset><h1>Go Away!</h1>
          <p>You are not authorized to use this resource.</p></fieldset>';
  }
  include 'footer.php';
?>