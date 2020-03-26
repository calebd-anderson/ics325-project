<!DOCTYPE html>
<?php
    include('header.php');
?>
        <form action="add_member.php" method="post" id="mainForm">
            <fieldset class="fieldset">
                <legend>Chasing Arctic - New Member Register</legend>
                <p><label for="name">Username: </label>
                    <input type="text" id="name" name="username" maxlength="25" size="20" class="required highlightable"/>
                </p>                
                    <p><label for="pswd">Password: </label><span >  
                    <span class="container">                  
                        <input data-toggle="popover" data-trigger="focus" data-content="This should be at least 8 characters. Try to pick something that’s not easy to guess. " type="password" id="pswd" name="pswd" maxlength="100" size="20" class="required highlightable"/>                   
                        <a class="input_img" onclick="toggle_pswd()"><img src="https://cdn3.iconfinder.com/data/icons/show-and-hide-password/100/show_hide_password-07-512.png" width="auto" height="30" id="EYE"></a>
                    </span>
                    </p>
                    <p id="text">WARNING! Caps lock is ON.</p>                
                <p><input type="submit" value="create account" class="btn"/></p>
            </fieldset>            
        </form>
<script>
    //popover
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });    
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
<?php
    include('footer.php');
?>