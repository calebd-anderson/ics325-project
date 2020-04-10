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
                <p><input type="email" placeholder="E-mail..." name="email" oninput="this.className = ''"></p>
                <p><input type="text" placeholder="Address..." name="addr" oninput="this.className = ''"></p>
                <p><input class="phone_us" type="tel" placeholder="Phone..." name="phone" oninput="this.className = ''"></p>
            </div>

            <div class="tab"><h5>Login Info:</h5>
                <p><input type="text" id="username" placeholder="Username..." name="username" maxlength="25" oninput="this.className = ''" onBlur="checkAvailability()">
                    <span class="fa fa-cog fa-spin" id="loaderIcon" style="font-size:24px; display:none; color:#0084f0;"></span>
                    <span id="user-availability-status"></span>
                </p>
                <p>
                    <span class="eye_container">
                        <input tabindex="0" placeholder="Password..." data-animation="true" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Try to pick something that’s not easy to guess." type="password" id="pswd" name="pswd" maxlength="100" size="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
                        <a class="input_img" onclick="toggle_pswd()">
                            <span id="eye">
                                <svg class="bi bi-eye" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                        </a>
                    </span>
                    <?php //echo "$pswdErr";?>
                </p>
                <p id="CapsLk">WARNING! Caps lock is ON.</p>
                <div id="message" class="js-fade">
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
            </div>

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
      <script src="js/jquery.mask.min.js"></script>
<script>
$( document ).ready(function() {
    console.log( "ready!" );
});
$(document).ready(function(){
  $('.phone_us').mask('(000) 000-0000');
});
</script>