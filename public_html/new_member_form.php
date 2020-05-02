<?php
    include('header.php');
?>
<!-- <link rel="stylesheet" href="css\pswd_validation.css"> -->
<link rel="stylesheet" href="css\special_form.css">
<style>
    .status-available{color:#2FC332;}
    .status-not-available{color:#D60202;}
</style>
<script>
    //username availability check
    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
        url: "check_availability.php",
        data:'username='+$("#username").val(),
        type: "POST",
        success:function(data){
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
        },
        error:function (){}
        });
    }
</script>
<?php
    $pswdErr = $fNameErr = $lNameErr = $usernameErr = $formErr = '';
    $valid = true;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //first name validate
        $fName = test_input($_POST['fname']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z]*$/",$fName)) {
            $fNameErr = "**Only letters allowed.";
            $valid = false;
        }

        //last name validate
        $lName = test_input($_POST['lname']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z]*$/",$lName)) {
            $lNameErr = "**Only letters allowed.";
            $valid = false;
        }

        //username validate
        $username = test_input($_POST['username']);
        $_SESSION['username'] = $username;
        if (!preg_match("/^[a-zA-Z_0-9]*$/",$username)) {
            $usernameErr = "**Only letters, numbers, and underscore allowed.";
            $valid = false;
        }

        //password validate
        if (empty($_POST['pswd'])) {
            $pswdErr = "**Password is required.";
            $valid = false;
        }else{
            $pswd = test_input($_POST['pswd']);
            // check if password meets requirements only contains letters
            if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$pswd)) {
                $pswdErr = "**Password must be a minimum of 8 characters and contatin a minimum of one number, one upper case letter and one lower case letter.";
                $valid = false;
            }
        }

        if(!$valid){
            $formErr = '**Please correct the form errors:';
        }

        $phone = test_input($_POST['us_phone']);
        $email = test_input($_POST['email']);
        $_SESSION['email'] = $email;
        $addr = test_input($_POST['addr']);
        
        if($valid){
            require '../SQLcreds.inc';
            $db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
            if(mysqli_connect_errno()){
                echo "<p>Error: Could not connect to database.<br/>
                    Please try again later.</p>";
                exit;
            }
            
            //hash password
            $hash = password_hash($pswd, PASSWORD_DEFAULT);
        
            //https://www.w3schools.com/php/php_mysql_prepared_statements.asp
            $query1 = "INSERT INTO member_contact (firstName, lastName, phone, email, addr) VALUES (?, ?, ?, ?, ?)";
            $query2 = "INSERT INTO member_creds (username, pswd) VALUES (?, ?)";
            $stmt1 = $db->prepare($query1);
            $stmt2 = $db->prepare($query2);
            // $db->multi_query($query);
            $stmt1->bind_param('sssss', $fName, $lName, $phone, $email, $addr);
            $stmt2->bind_param('ss', $username, $hash);    
            $stmt2->execute();
            $stmt1->execute();
            if ($stmt1->affected_rows > 0 && $stmt2->affected_rows > 0){
                $_SESSION['valid_user'] = $_POST['username'];
                echo '<fieldset class="fieldset">
                <legend>Member added to database</legend>';
            }elseif($stmt1->affected_rows > 0){
                echo "<p style='color: red'>An error has occured.<br/>
                    The item was not added.</p></fieldset>";
                    //delete orphan row from fail
                    $query3 = "DELETE FROM member_contact WHERE memberID = LAST_INSERT_ID();";
                    $stmt3 = $db->prepare($query3);
                    $stmt3->execute();
                    require 'footer.php';
                    exit;
            }else{
                echo "<p style='color: red'>An error has occured.<br/>
                    The item was not added.</p></fieldset>";
                require 'footer.php';
                exit;
            }
            $db->close();
        
?>
            <p>Try one of these great apps to setup multi-factor authentication: </p>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><img src="https://lh3.googleusercontent.com/HPc5gptPzRw3wFhJE1ZCnTqlvEvuVFBAsV9etfouOhdRbkp-zNtYTzKUmUVPERSZ_lAL=s180" alt="Google Authenticator" width="100" height="auto"></a>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.authy.authy&hl=en"><img src="https://lh3.googleusercontent.com/MkSEE1fAQDUfQsqlhUEat-ZzJjkR2XnJEJpE-abcn7dPcIN8aYocgLoIDhujEDD5w-g=s180" alt="Authy 2-Factor Authentication" width="100" height="auto"></a>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en"><img src="https://lh3.googleusercontent.com/T7_4mv5aTo4XdLWz_vAQ2Hg8E-uMf_XUZMtdHdnf5ifZEP413DhOEDo2YEMSSL1Jl4k=s180" alt="Microsoft Authenticator" width="100" height="auto"></a>
            <form action="setup_2fa.php" method="get" id="mainForm">
                <p>Would you like to setup multi-factor authentication now?</p>
                <span><button class="btn btn-primary" name="yes" type="submit">Yes</button></span>
                <span><button class="btn btn-secondary" name="no" type="submit">No</button></span>
            </form>
            </fieldset>
<?php
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(!($_SERVER["REQUEST_METHOD"] == "POST") || !$valid){
?>
<fieldset class="fieldset"><legend style="font-family: Raleway;">Chasing Arctic - Register</legend>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="stepForm">
    <p style="color: red;"><?php echo $formErr; ?></p>
<!-- Name -->
        <div class="tab"><h5>Name:</h5>
            <div style="color: red;"><?php echo $fNameErr; ?></div>
            <p><input class="form-control" type="text" name="fname" placeholder="First name..." oninput="this.className = 'form-control'"></p>
            <span style="color: red;"><?php echo $lNameErr; ?></span>
            <p><input class="form-control" type="text" name="lname" placeholder="Last name..." oninput="this.className = 'form-control'"></p>
        </div>
<!-- Contact Info -->
        <div class="tab"><h5>Contact Info:</h5>
            <p><input class="form-control" type="email" placeholder="E-mail..." name="email" oninput="this.className = 'form-control'"></p>
            <!-- <input autocomplete="email" aria-invalid="false" name="email" placeholder="" type="email" class="Input Input--nowrap PressableContext Padding-horizontal--12 Padding-vertical--8 PressableContext--cursor--text PressableContext--display--inlineFlex PressableContext--fontLineHeight--20 PressableContext--fontSize--14 PressableContext--fontWeight--regular PressableContext--height PressableContext--height--large PressableContext--radius--all PressableContext--width PressableContext--width--maximized TextInput-element TextInput-element--align--left PressableContext Padding-horizontal--12 Padding-vertical--8 PressableContext--cursor--text PressableContext--display--inlineFlex PressableContext--fontLineHeight--20 PressableContext--fontSize--14 PressableContext--fontWeight--regular PressableContext--height PressableContext--height--large PressableContext--radius--all PressableContext--width PressableContext--width--maximized" value="ande4905@gmail.com" style="color: rgb(60, 66, 87);"> -->
            <p><input class="form-control" type="text" placeholder="Address..." name="addr" oninput="this.className = 'form-control'"></p>
            <p><input class="phone_us form-control" type="tel" placeholder="Phone..." name="us_phone" pattern="^[0-9-+\s()]*$" oninput="this.className = 'form-control'"></p>
        </div>
<!-- Login -->
        <div class="tab"><h5>Login Info:</h5>
                <p>
                    <input class="form-control" type="text" id="username" placeholder="Username..."
                        name="username" maxlength="25"  onBlur="checkAvailability()"
                        oninput="this.className = 'form-control'"/>
                    <span class="fa fa-cog fa-spin" id="loaderIcon" style="font-size:24px; display:none; color:#0084f0;"></span>
                    <span id="user-availability-status"></span>
                    <span class="status-not-available"><?php echo $usernameErr;?></span>
                    <small id="emailHelp" class="form-text text-muted">Pick a unique username. Letters, numbers and underscore allowed.</small>
                </p>
                <p>
                    <input id="pswd" class="form-control" tabindex="0" placeholder="Password..." type="password"
                        name="pswd" maxlength="100" size="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        data-animation="true" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Try to pick something that’s not easy to guess." 
                        oninput="this.className = 'form-control'"/>
                    <small class="form-text text-muted">We store your password securely. Minimum of 8 characters. Must contain numbers, as well as upper and lower case letters.</small>
                    <span style="color: red;"><?php echo $pswdErr;?></span>
                </p>
                <p id="CapsLk">WARNING! Caps lock is ON.</p>
                <div id="message" class="js-fade">
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
            </div>
<!-- Buttons -->
        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <!-- new page add more steps -->
        </div>            
    </form>
</fieldset>

<script src="js/fields.js"></script>
<script src="js/pswd_validation.js"></script>
<script src="js/step_form.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/bootstrap-show-password.js"></script>

<?php
}
    include('footer.php');
?>
<script>
//phone mask
$(document).ready(function(){
  $('.phone_us').mask('(000) 000-0000');
});
//password eye
$(function() {
    $('#pswd').password()
})
$(document ).ready(function() {
    console.log( "ready!" );
});
//why do I need this to get popover to work?
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>