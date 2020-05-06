//caps-lock detect
var input = document.getElementById("pswd");
var text = document.getElementById("CapsLk");

input.addEventListener("keyup", function(event) {
    if (event.getModifierState("CapsLock")) {
        text.style.display = "block";
    } else {
        text.style.display = "none"
    }
});
console.log( "ready!" );