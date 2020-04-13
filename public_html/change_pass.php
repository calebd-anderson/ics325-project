<?php
    include('header.php');
?>
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

<?php
    include('footer.php');
?>
