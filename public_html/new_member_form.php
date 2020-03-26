<!DOCTYPE html>
<?php
    include('header.php');
?>
<link rel="stylesheet" href="css\pswd_validation.css">
<link rel="stylesheet" href="css\special_form.css">
        <form action="add_member.php" method="post" id="mainForm">
            <fieldset class="fieldset">
                <legend>Chasing Arctic - New Member Register</legend>

                <div class="tab">Name:
                    <p><input type="text" placeholder="First name..." oninput="this.className = ''"></p>
                    <p><input type="text" placeholder="Last name..." oninput="this.className = ''"></p>
                </div>

                <div class="tab">Login info:
                <p><label for="name">Username: </label>
                    <input type="text" id="name" name="username" maxlength="25" size="20" class="required highlightable"/>
                </p>                
                    <p><label for="pswd">Password: </label><span >  
                        <span class="container">                  
                            <input data-toggle="popover" data-trigger="focus" data-content="Try to pick something that’s not easy to guess." type="password" id="pswd" name="pswd" maxlength="100" size="20" class="required highlightable" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>                   
                            <a class="input_img" onclick="toggle_pswd()"><img src="https://cdn3.iconfinder.com/data/icons/show-and-hide-password/100/show_hide_password-07-512.png" width="auto" height="30" id="EYE"></a>
                        </span>
                    </p>                    
                    <p id="text">WARNING! Caps lock is ON.</p>
                    <div id="message">
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                </div>

                <div class="tab">Contact Info:
                    <p><input type="text" placeholder="E-mail..." oninput="this.className = ''"></p>
                    <p><input type="text" placeholder="Phone..." oninput="this.className = ''"></p>
                </div>

                <div style="overflow:auto;">
                <div style="float:right;">
                    <button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button class="btn" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <!-- <span class="step"></span> -->
                </div>
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

//password validation
var myInput = document.getElementById("pswd");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
// myInput.onblur = function() {
//   document.getElementById("message").style.display = "none";
// }

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

<script src="js/form.js"></script>
<?php
    include('footer.php');
?>