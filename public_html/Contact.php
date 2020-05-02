<!DOCTYPE HTML>
<?php require('header.php') ?>
<body>
    <div id="pageContainer">
        <div id="content-wrap">
            <div>
                <h2 style="background-color: #80ff80;padding-left:1em;">Contact<h2>
            </div>
            <div class="flex_Body">
                <form class="contact_Form" method="POST" name="TestForm">
                    <fieldset>
                        <label for="fname">First Name:</label><br>
                        <input type="text" id="fname" name="fname"/><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname"><br>
                        <label for="email">Email:</label><br>
                        <input type="text" id="email" name="email" required><br>
                        <label for="comment">Comment or Message:</label><br>
                        <textarea id="comment" name="comment" rows="10" cols="40" required></textarea><br><br>
                        <input type="submit" value="Submit">
                    </fieldset>
                </form>
                <div class="contact_Info">
                    <p style="text-align: left;font-size:120%;">
                    <b>Chasing Antartica</b> <br> "Location" <br> "Phone number"
                    </p>
                </div>
            </div>
        </div>
        <?php require('footer.php') ?>
    </div>
</body>