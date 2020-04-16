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
<fieldset class="fieldset"><legend style="font-family: Raleway;">Chasing Arctic - Register</legend>
    <form action="add_member.php" method="post" id="stepForm">
<!-- Name -->
        <div class="tab"><h5>Name:</h5>
            <p><input class="form-control" type="text" name="fname" placeholder="First name..." oninput="this.className = 'form-control'"></p>
            <p><input class="form-control" type="text" name="lname" placeholder="Last name..." oninput="this.className = 'form-control'"></p>
        </div>
<!-- Contact Info -->
        <div class="tab"><h5>Contact Info:</h5>
            <p><input class="form-control" type="email" placeholder="E-mail..." name="email" oninput="this.className = 'form-control'"></p>
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
                </p>
                <p>
                    <!-- <input id="password" class="form-control" type="password" placeholder="Enter the password"> -->
                    <input id="pswd" class="form-control" tabindex="0" placeholder="Password..." type="password"
                        name="pswd" maxlength="100" size="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        data-animation="true" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Try to pick something that’s not easy to guess." 
                        oninput="this.className = 'form-control'"/>
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
<!-- Buttons -->
        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                <!-- <p><button type="submit" name="submit" class="btn btn-primary">Submit</button></p> -->
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

$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});

</script>