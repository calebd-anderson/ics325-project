<!DOCTYPE html>
<?php
    include('header.php');
?>
<link rel="stylesheet" href="css\pswd_validation.css">
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
    <form action="add_member.php" method="post" id="mainForm">
        <fieldset class="fieldset">
            <legend style="font-family: Raleway;">Chasing Arctic - Register</legend>
            <div class="tab"><h5>Name:</h5>
            <p><input type="text" name="fname" placeholder="First name..." oninput="this.className = ''"></p>
            <p><input type="text" name="lname" placeholder="Last name..." oninput="this.className = ''"></p>
            </div>
            <div class="tab"><h5>Contact Info:</h5>
                <p><input type="text" placeholder="E-mail..." name="email" oninput="this.className = ''"></p>
                <p><input type="text" placeholder="Address..." name="addr" oninput="this.className = ''"></p>
                <p><input type="text" placeholder="Phone..." name="phone" oninput="this.className = ''"></p>
            </div>

            <div class="tab"><h5>Login Info:</h5>
                <p><input type="text" id="username" placeholder="Username..." name="username" maxlength="25" oninput="this.className = ''" onBlur="checkAvailability()">
                    <span class="fa fa-cog fa-spin" id="loaderIcon" style="font-size:24px; display:none; color:#0084f0;"></span>
                    <span id="user-availability-status"></span>
                </p>
                <p>
                    <span class="eye_container">
                        <input placeholder="Password..." data-toggle="popover" data-trigger="focus" data-content="Try to pick something that’s not easy to guess." type="password" id="pswd" name="pswd" maxlength="100" size="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninput="this.className = ''"/>                   
                        <a class="input_img" onclick="toggle_pswd()"><img src="https://cdn3.iconfinder.com/data/icons/show-and-hide-password/100/show_hide_password-07-512.png" width="auto" height="35" id="EYE"></a>
                    </span>
                </p>
                <p id="text">WARNING! Caps lock is ON.</p>
                <div id="message" class="js-fade">
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
            </div>

            <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <!-- <span class="step"></span> -->
            </div>
        </fieldset>
    </form>
<script src="js/fields.js"></script>
<script src="js/pswd_validation.js"></script>
<script src="js/step_form.js"></script>
<?php
    include('footer.php');
?>