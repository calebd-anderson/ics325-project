//password validation
var myInput = document.getElementById("pswd");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var el = document.querySelector('.js-fade');
var requirement = 0;

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  if(requirement < 4)
    fadeIn(el);
  else
    document.getElementById("message").style.display = "none";
}
// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {  
  fadeOut(el);
}
// When the user starts to type something inside the password field
myInput.onkeyup = function() {  
  requirement = 0;
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
    requirement++;
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
    requirement--;
  }  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
    requirement++;
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
    requirement--;
  }
  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
    requirement++;
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
    requirement--;
  }  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
    requirement++;
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
    requirement--;
  }
  //test if all criteria are met and remove message if so
  if(requirement >= 4){
    setTimeout(done, 750);
    function done(){
      fadeOut(el);
    }
  }else{
    //stop fade-in flicker
    if(el.style.opacity == 1){
      document.getElementById("message").style.display = "block";
      el.style.opacity = 1;
    }
    else 
      fadeIn(el);
  }
}
// fade out
function fadeOut(el){
  el.style.opacity = 1;
  (function fade() {
    if ((el.style.opacity -= .1) < 0) {
      el.style.display = "none";
    } else {
      requestAnimationFrame(fade);
    }
  })();
}
// fade in
function fadeIn(el, display){
  el.style.opacity = 0;
  el.style.display = display || "block";
  (function fade() {
    var val = parseFloat(el.style.opacity);
    if (!((val += .1) > 1)) {
      el.style.opacity = val;
      requestAnimationFrame(fade);
    }
  })();
}