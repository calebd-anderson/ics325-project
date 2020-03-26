<?php
    require('header.php');
?>
<fieldset>        
<legend>Create account form</legend>
    <form action="my_robThree_2FA.php" method="post" id="mainForm">
    <p>Enter your name:</p>
    <input placeholder="Your name." type="text" name="user" size="20" maxlength="25" class="required highlightable"/>        
    <p><input type="submit" value="Submit" class="btn" /> <input type="reset" value="Clear Form" class="btn"></p>
    </form>
</fieldset>
<?php
    require('footer.php');
?>