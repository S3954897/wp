/* Insert your javascript here */
function toggleWireframe() {

    // get references to styleshets with preset id attributes
    let wfs = document.getElementById("wireframecss");
    let sts = document.getElementById("stylecss");

    // toggle disabled state of wireframe stylesheet
    wfs.disabled = !wfs.disabled;

    // set main stylesheet disabled state to be opposite of wireframe stylesheet
    sts.disabled = !wfs.disabled;

    // repeat above code for other stylesheets you want to toggle
}

let button = document.getElementById("bookNowButton")
button.addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("bookNowForm").submit();

})

//Navigation area dynamics
window.onscroll = function() {
    console.clear();
    console.log("Win Y: " + window.scrollY);
    let navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
    let areas = document.getElementsByTagName('main')[0].getElementsByClassName('area');
    for (let i = 0; i<areas.length ; i++) {
        let areaTop = areas[i].offsetTop-100;
        let areaBottom = areas[i].offsetTop+areas[i].offsetHeight-100;
        if (window.scrollY >= areaTop && window.scrollY < areaBottom) {
            navlinks[i].classList.add("current");
        } else {
            navlinks[i].classList.remove("current");
        }
    }
}

//Booking form validation
function validateForm() {
    let name = document.getElementById("user[name]").value;
    let email = document.getElementById("user[email]").value;
    let mobile = document.getElementById("user[mobile]").value;
    if (name == "" || email == "" || mobile == "") {
        alert("All fields must be completed");
        return false;
    } else if (!validateName(name)){
        alert("Not a valid name entry");
        return false;
    } else if (!validateEmail(email)) {
        alert("Not a valid email entry");
        return false;
    } else if (!validatePhone(mobile)) {
        alert("Not a valid phone number entry");
        return false;
    }
}

function validateName(name) {
    let nameRegex = /^[a-z\D]+[a-z\D]*$/i
    return nameRegex.test(String(name));
}

function validateEmail(email) {
    let emailRegex = /^\w+([\.\-]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,3})+$/i;
    return emailRegex.test(String(email));
}

function validatePhone(mobile) {
    let phoneRegex = /^\({0,1}((0|\+61)(\ ){0,1}(2|4|3|7|8)){0,1}\){0,1}(\ ){0,1}[0-9]{2}(\ ){0,1}[0-9]{2}(\ ){0,1}[0-9]{1}(\ ){0,1}[0-9]{3}$/;
    return phoneRegex.test(String(mobile));
}

