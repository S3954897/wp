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

});

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

//Seat and Day Pricing calculation
function calcPrice() {
    let seatSelectSTA = document.querySelector("#seatsSTA");
    let selectedOptionSTA = seatSelectSTA.options[seatSelectSTA.selectedIndex];
    let fullPriceSTA = selectedOptionSTA.getAttribute("data-fullprice");
    let discPriceSTA = selectedOptionSTA.getAttribute("data-discprice");
    let seatsValueSTA = selectedOptionSTA.value

    let seatSelectSTP = document.querySelector("#seatsSTP");
    let selectedOptionSTP = seatSelectSTP.options[seatSelectSTP.selectedIndex];
    let fullPriceSTP = selectedOptionSTP.getAttribute("data-fullprice");
    let discPriceSTP = selectedOptionSTP.getAttribute("data-discprice");
    let seatsValueSTP = selectedOptionSTP.value

    let seatSelectSTC = document.querySelector("#seatsSTC");
    let selectedOptionSTC = seatSelectSTC.options[seatSelectSTC.selectedIndex];
    let fullPriceSTC = selectedOptionSTC.getAttribute("data-fullprice");
    let discPriceSTC = selectedOptionSTC.getAttribute("data-discprice");
    let seatsValueSTC = selectedOptionSTC.value

    let seatSelectFCA = document.querySelector("#seatsFCA");
    let selectedOptionFCA = seatSelectFCA.options[seatSelectFCA.selectedIndex];
    let fullPriceFCA = selectedOptionFCA.getAttribute("data-fullprice");
    let discPriceFCA = selectedOptionFCA.getAttribute("data-discprice");
    let seatsValueFCA = selectedOptionFCA.value

    let seatSelectFCP = document.querySelector("#seatsFCP");
    let selectedOptionFCP = seatSelectFCP.options[seatSelectFCP.selectedIndex];
    let fullPriceFCP = selectedOptionFCP.getAttribute("data-fullprice");
    let discPriceFCP = selectedOptionFCP.getAttribute("data-discprice");
    let seatsValueFCP = selectedOptionFCP.value

    let seatSelectFCC = document.querySelector("#seatsFCC");
    let selectedOptionFCC = seatSelectFCC.options[seatSelectFCC.selectedIndex];
    let fullPriceFCC = selectedOptionFCC.getAttribute("data-fullprice");
    let discPriceFCC = selectedOptionFCC.getAttribute("data-discprice");
    let seatsValueFCC = selectedOptionFCC.value

    let daySelect = document.querySelector("#daySelection");
    let dayTime = daySelect.getElementsByTagName("input");
    let dayTimeDisc = "";

    console.clear()
    for (let i=0; i<dayTime.length;i++) {
        if (dayTime[i].checked){
            dayTimeDisc = dayTime[i].getAttribute("data-pricing");
            console.log(dayTimeDisc);
        }
    }
    if (dayTimeDisc === "fullprice") {
        if(seatsValueSTA > 0) {
            console.log("STA Full Price: $"+fullPriceSTA+" Seats:"+seatsValueSTA+" Total:$"+(fullPriceSTA*seatsValueSTA));
        }
        if (seatsValueSTP > 0) {
            console.log("STP Full Price: $"+fullPriceSTP+" Seats:"+seatsValueSTP+" Total:$"+(fullPriceSTP*seatsValueSTP));
        }
        if (seatsValueSTC > 0) {
            console.log("STC Full Price: $"+fullPriceSTC+" Seats:"+seatsValueSTC+" Total:$"+(fullPriceSTC*seatsValueSTC));
        }
        if(seatsValueFCA > 0) {
            console.log("FCA Full Price: $"+fullPriceFCA+" Seats:"+seatsValueFCA+" Total:$"+(fullPriceFCA*seatsValueFCA));
        }
        if (seatsValueFCP > 0) {
            console.log("FCP Full Price: $"+fullPriceFCP+" Seats:"+seatsValueFCP+" Total:$"+(fullPriceFCP*seatsValueFCP));
        }
        if (seatsValueFCC > 0) {
            console.log("FCC Full Price: $"+fullPriceFCC+" Seats:"+seatsValueFCC+" Total:$"+(fullPriceFCC*seatsValueFCC));
        }
    } else if (dayTimeDisc == "discprice") {
        if(seatsValueSTA > 0) {
            console.log("STA Discount Price: $"+discPriceSTA+" Seats:"+seatsValueSTA+" Total:$"+(discPriceSTA*seatsValueSTA));
        }
        if (seatsValueSTP > 0) {
            console.log("STP Discount Price: $"+discPriceSTP+" Seats:"+seatsValueSTP+" Total:$"+(discPriceSTP*seatsValueSTP));
        }
        if (seatsValueSTC > 0) {
            console.log("STC Discount Price: $"+discPriceSTC+" Seats:"+seatsValueSTC+" Total:$"+(discPriceSTC*seatsValueSTC));
        }
        if(seatsValueFCA > 0) {
            console.log("FCA Discount Price: $"+discPriceFCA+" Seats:"+seatsValueFCA+" Total:$"+(discPriceFCA*seatsValueFCA));
        }
        if (seatsValueFCP > 0) {
            console.log("FCP Discount Price: $"+discPriceFCP+" Seats:"+seatsValueFCP+" Total:$"+(discPriceFCP*seatsValueFCP));
        }
        if (seatsValueFCC > 0) {
            console.log("FCC Discount Price: $"+discPriceFCC+" Seats:"+seatsValueFCC+" Total:$"+(discPriceFCC*seatsValueFCC));
        }
    }
}

//Frontend form validation
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

