<?php
    include('header.php');
?>
<form action="change_pass.php" method="POST">
<div class="container center">
<h3 style="font-family: Raleway;">I Will Change Your Password</h3>
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

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['oldpswd']) and isset($_POST['newpswd'])){
        require('../../SQLcreds.inc');
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
    include('../footer.php');
?>
