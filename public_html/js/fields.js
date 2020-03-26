//toggle password
function toggle_pswd() {
    var x = document.getElementById("pswd");
    var y = document.getElementById("EYE");
    if (x.type === "password") {
        x.type = "text";
        y.src = "https://cdn3.iconfinder.com/data/icons/show-and-hide-password/100/show_hide_password-08-512.png";
    } else {
        x.type = "password";
        y.src = "https://cdn3.iconfinder.com/data/icons/show-and-hide-password/100/show_hide_password-07-512.png";
    }    
}

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