<?php
    session_start();
    require 'header.php';
?>
<h1>Add Member Result</h1>
<fieldset>
<?php
    if(!isset($_POST['name']) || !isset($_POST['pswd'])){
        echo "<p>You have not entered all the required details.<br />
            Please go back and try again.</p>";
        exit;
    }
    // create short variable names
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    $pswd = $_POST['pswd'];
    $db = new mysqli('localhost', 'caleb_tree', '***REMOVED***', '***REMOVED***');
    if(mysqli_connect_errno()){
        echo "<p>Error: Could not connect to database.<br/>
            Please try again later.</p>";
        exit;
    }    
    //hash password
    $hash = password_hash($pswd, PASSWORD_DEFAULT);
    
    //https://www.w3schools.com/php/php_mysql_prepared_statements.asp
    $query = "INSERT INTO member_credentials (username, pswd) VALUES (?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ss', $name, $hash);
    $stmt->execute();
    if ($stmt->affected_rows > 0){
        echo "<p>Member added to database.</p>";
    }else{
        echo "<p>An error has occured.<br/>
            The item was not added.</p>";
    }
    $db->close();
?>
<p>Try one of these great apps to setup multi-factor authentication: </p>
    <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><img src="https://lh3.googleusercontent.com/HPc5gptPzRw3wFhJE1ZCnTqlvEvuVFBAsV9etfouOhdRbkp-zNtYTzKUmUVPERSZ_lAL=s180" alt="Google Authenticator"></a>
    <a href="https://play.google.com/store/apps/details?id=com.authy.authy&hl=en"><img src="https://lh3.googleusercontent.com/T7_4mv5aTo4XdLWz_vAQ2Hg8E-uMf_XUZMtdHdnf5ifZEP413DhOEDo2YEMSSL1Jl4k=s180" alt="Microsoft Authenticator"></a>
    <a href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en"><img src="https://lh3.googleusercontent.com/MkSEE1fAQDUfQsqlhUEat-ZzJjkR2XnJEJpE-abcn7dPcIN8aYocgLoIDhujEDD5w-g=s180" alt="Authy 2-Factor Authentication"></a>
<form action="setup_2fa.php" method="get" id="mainForm">
<p>Would you like to setup Multi-Factor Authentication?</p>
<span><input name="yes" type="submit" value="Yes" class="btn"/></span>
<span><input name="no" type="submit" value="No" class="btn"/></span>
</form>
</fieldset>