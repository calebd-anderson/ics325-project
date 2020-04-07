<?php
    // ini_set('display_startup_errors',1); 
    // ini_set('display_errors',1);
    // error_reporting(-1);
    session_start();
    require 'header.php';
?>
<fieldset class="fieldset">
<legend>Add Member Result</legend>
<?php
    //test and store all input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $fName = test_input($_POST['fname']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$fName)) {
            $fNameErr = "Only letters and white space allowed. ";
        }
        $lName = test_input($_POST['lname']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lName)) {
            $lNameErr = "Only letters and white space allowed. ";
        }
        
        // create short variable names
        $username = $_POST['username'];
        // $_SESSION['username'] = $username;
        $pswd = $_POST['pswd'];
        $phone = test_input($_POST['phone']);
        $email = test_input($_POST['email']);
        $addr = test_input($_POST['addr']);
        //$db = new mysqli('localhost', '***REMOVED***', '***REMOVED***', '***REMOVED***');
        require '../SQLcreds.inc';
        $db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
        if(mysqli_connect_errno()){
            echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
            exit;
        }
    }
    //hash password
    $hash = password_hash($pswd, PASSWORD_DEFAULT);
    
    //https://www.w3schools.com/php/php_mysql_prepared_statements.asp
    $query1 = "INSERT INTO member_contact (firstName, lastName, phone, email, addr) VALUES (?, ?, ?, ?, ?)";
    $query2 = "INSERT INTO member_creds (username, pswd) VALUES (?, ?)";
    $stmt1 = $db->prepare($query1);
    $stmt2 = $db->prepare($query2);
    // $db->multi_query($query);
    $stmt1->bind_param('ssiss', $fName, $lName, $phone, $email, $addr);
    $stmt2->bind_param('ss', $username, $hash);
    $stmt1->execute();
    $stmt2->execute();
    if ($stmt1->affected_rows > 0 && $stmt2->affected_rows > 0){
        $_SESSION['valid_user'] = $_SESSION['username'];
        echo "<p>Member added to database.</p>";
    }else{
        echo "<p style='color: red'>An error has occured.<br/>
            The item was not added.</p></fieldset>";
            require 'footer.php';
            exit;
    }
    $db->close();
?>
<p>Try one of these great apps to setup multi-factor authentication: </p>
    <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><img src="https://lh3.googleusercontent.com/HPc5gptPzRw3wFhJE1ZCnTqlvEvuVFBAsV9etfouOhdRbkp-zNtYTzKUmUVPERSZ_lAL=s180" alt="Google Authenticator"></a>
    <a href="https://play.google.com/store/apps/details?id=com.authy.authy&hl=en"><img src="https://lh3.googleusercontent.com/T7_4mv5aTo4XdLWz_vAQ2Hg8E-uMf_XUZMtdHdnf5ifZEP413DhOEDo2YEMSSL1Jl4k=s180" alt="Microsoft Authenticator"></a>
    <a href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en"><img src="https://lh3.googleusercontent.com/MkSEE1fAQDUfQsqlhUEat-ZzJjkR2XnJEJpE-abcn7dPcIN8aYocgLoIDhujEDD5w-g=s180" alt="Authy 2-Factor Authentication"></a>
<form action="setup_2fa.php" method="get" id="mainForm">
<p>Would you like to setup Multi-Factor Authentication?</p>
<span><button name="yes" type="submit">Yes</button></span>
<span><button name="no" type="submit">No</button></span>
</form>
</fieldset>
<?php
    require 'footer.php';
?>