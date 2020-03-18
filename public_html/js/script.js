//nav menu
function openNav() {
    document.getElementById("websiteNav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "260px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
    document.getElementById("websiteNav").style.width = "0";
    document.getElementById("main").style.marginLeft= "10%";
    document.body.style.backgroundColor = "white";
}

//event listening for form errors
window.addEventListener('load', function () {
    const fields = document.getElementsByClassName('hilightable');
    for (let i = 0; i < fields.length; i++) {
        fields[i].addEventListener('focus', setBackground);
        fields[i].addEventListener('blur', setBackground);
    }

    // add listeners for classes with required ...
    var rfields = document.getElementsByClassName('required');
    //removes css class .error on change
    for (let i = 0; i < rfields.length; i++) {
        rfields[i].addEventListener('change', function (e) {
            this.classList.remove('error');
        });
    }
    //listens for submit button then adds css class .error appropriately
    document.getElementById('mainForm').addEventListener('submit',
        function (e) {
            for (let i = 0; i < rfields.length; i++) {
                if (rfields[i].value == null || rfields[i].value == "") {
                    // the field was empty. Stop form submission
                    e.preventDefault();
                    // Now tell the user something went wrong
                    rfields[i].classList.add('error');
                }
            }
        });

function setBackground() {
    this.classList.toggle('highlight');
}
});