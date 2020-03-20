<!DOCTYPE html>
<?php
    include('header.php');
?>
        <form action="add_member.php" method="post" id="mainForm">
            <fieldset class="fieldset">
                <legend>Chasing Arctic - New Member Register</legend>
                <p><label for="name">Username: </label>
                    <input type="text" id="name" name="name" maxlength="25" size="13" class="required hilightable"/>
                </p>
                <p><label for="pswd">Password: </label>
                    <input type="password" id="pswd" name="pswd" maxlength="25" size="13" class="required hilightable"/>
                </p>
                <p><input type="submit" value="create account" class="btn"/></p>
            </fieldset>            
        </form>
<?php
    include('footer.php');
?>