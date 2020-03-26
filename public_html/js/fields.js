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