<?php
    include('header.php');
?>
<<<<<<< HEAD
<?php
    session_start();

    $user = $_SESSION['username'];

    if ($user){
        //user is logged in

        if ($_POST['submit']){
            $oldpassword = $_POST['oldpassword'];
            $newpassword = $_POST['newpassword'];
            $repeatpassword = $_POST['repeatpassword'];

            echo"$oldpassword/$newpassword/$repeatpassword"
        }
        else {

        echo "
            <form action="change_pass.php" method = "POST">
                Old Password: <input type = 'text' name='oldpassword'><p>
                New Password: <input type='password' name='newpassword'><br>
                Repeat New Password <input type='password' name='repeatpassword'><br>
                <input type='submit' name='submit' value='Change Password'>
            </form>
        ";
        }
    }
    else {
        die("Please log in to change your password.");
    }
?>
=======
<form action="change_pass.php" method="POST">
<div class="container center">
<h3>I Will Change Your Password</h3>
    <div class="form-group row">
        <label for="oldpswd" class="col-sm-2 col-form-label">Old Password: </label>
        <div class="col-sm-10">
            <input type="password" name="oldpswd"></input>
        </div>
    </div>
    
    <div class="form-group row">
        <label for="newpswd" class="col-sm-2 col-form-label">New Password: </label>
        <div class="col-sm-10">
            <input type="password" name="newpswd"></input>
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Change</button>
</div>
</form>
>>>>>>> 4afa721d28734d2ab30f57a771ef115c178611c9

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['oldpswd']) and isset($_POST['newpswd'])){
        require('../SQLcreds.inc');
        $conn = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //session username
        $username = $_SESSION['username'];                
        //retreive hashed og password
        $oldpswd = $conn->query("SELECT pswd FROM member_creds WHERE username = '$username'")->fetch_object()->pswd;
        
        if(password_verify($_POST['oldpswd'], $oldpswd)){
            //hash chosen password
            $chosenpswd = password_hash($_POST['newpswd'], PASSWORD_DEFAULT);
            $sql = "UPDATE member_creds SET pswd = '$chosenpswd' WHERE username = '$username';";
            if (mysqli_query($conn, $sql)) {
                echo "<p class='valid'>Record updated successfully.</p>";
            } else {
                echo "<p class='invalid'>Error updating record: " . mysqli_error($conn)."</p>";
            }
            mysqli_close($conn);
        } else {
            echo "<p class='invalid'>Invalid password combo.</p>";
        }
    }
    include('footer.php');
?>
