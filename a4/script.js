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
if (button){
    button.addEventListener("click", function(event){
        event.preventDefault();
        document.getElementById("bookNowForm").submit();
    });
}


//Navigation area dynamics
window.onscroll = function() {
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

// Seats pricing information
window.onload = function() {
    if (window.location.href.indexOf("index.php") !== -1) {
        let outputFullPriceSTA = document.getElementById("displayFullPriceSTA");
        let outputDiscPriceSTA = document.getElementById("displayDiscPriceSTA");
        let priceAttr = adultStandardSeat["price"];
        let fullPriceStr = priceAttr.match(/data-fullprice="(.*?)"/)[1];
        let discPriceStr = priceAttr.match(/data-discprice="(.*?)"/)[1];
        let fullPrice = parseFloat(fullPriceStr);
        let discPrice = parseFloat(discPriceStr);
        outputFullPriceSTA.innerHTML = `$${fullPrice.toFixed(2)}`;
        outputDiscPriceSTA.innerHTML = `$${discPrice.toFixed(2)}`;

        let outputFullPriceSTP = document.getElementById("displayFullPriceSTP");
        let outputDiscPriceSTP = document.getElementById("displayDiscPriceSTP");
        priceAttr = concessionStandardSeat["price"];
        fullPriceStr = priceAttr.match(/data-fullprice="(.*?)"/)[1];
        discPriceStr = priceAttr.match(/data-discprice="(.*?)"/)[1];
        fullPrice = parseFloat(fullPriceStr);
        discPrice = parseFloat(discPriceStr);
        outputFullPriceSTP.innerHTML = `$${fullPrice.toFixed(2)}`;
        outputDiscPriceSTP.innerHTML = `$${discPrice.toFixed(2)}`;

        let outputFullPriceSTC = document.getElementById("displayFullPriceSTC");
        let outputDiscPriceSTC = document.getElementById("displayDiscPriceSTC");
        priceAttr = childStandardSeat["price"];
        fullPriceStr = priceAttr.match(/data-fullprice="(.*?)"/)[1];
        discPriceStr = priceAttr.match(/data-discprice="(.*?)"/)[1];
        fullPrice = parseFloat(fullPriceStr);
        discPrice = parseFloat(discPriceStr);
        outputFullPriceSTC.innerHTML = `$${fullPrice.toFixed(2)}`;
        outputDiscPriceSTC.innerHTML = `$${discPrice.toFixed(2)}`;

        let outputFullPriceFCA = document.getElementById("displayFullPriceFCA");
        let outputDiscPriceFCA = document.getElementById("displayDiscPriceFCA");
        priceAttr = adultFirstClassSeat["price"];
        fullPriceStr = priceAttr.match(/data-fullprice="(.*?)"/)[1];
        discPriceStr = priceAttr.match(/data-discprice="(.*?)"/)[1];
        fullPrice = parseFloat(fullPriceStr);
        discPrice = parseFloat(discPriceStr);
        outputFullPriceFCA.innerHTML = `$${fullPrice.toFixed(2)}`;
        outputDiscPriceFCA.innerHTML = `$${discPrice.toFixed(2)}`;

        let outputFullPriceFCP = document.getElementById("displayFullPriceFCP");
        let outputDiscPriceFCP = document.getElementById("displayDiscPriceFCP");
        priceAttr = concessionFirstClassSeat["price"];
        fullPriceStr = priceAttr.match(/data-fullprice="(.*?)"/)[1];
        discPriceStr = priceAttr.match(/data-discprice="(.*?)"/)[1];
        fullPrice = parseFloat(fullPriceStr);
        discPrice = parseFloat(discPriceStr);
        outputFullPriceFCP.innerHTML = `$${fullPrice.toFixed(2)}`;
        outputDiscPriceFCP.innerHTML = `$${discPrice.toFixed(2)}`;

        let outputFullPriceFCC = document.getElementById("displayFullPriceFCC");
        let outputDiscPriceFCC = document.getElementById("displayDiscPriceFCC");
        priceAttr = childFirstClassSeat["price"];
        fullPriceStr = priceAttr.match(/data-fullprice="(.*?)"/)[1];
        discPriceStr = priceAttr.match(/data-discprice="(.*?)"/)[1];
        fullPrice = parseFloat(fullPriceStr);
        discPrice = parseFloat(discPriceStr);
        outputFullPriceFCC.innerHTML = `$${fullPrice.toFixed(2)}`;
        outputDiscPriceFCC.innerHTML = `$${discPrice.toFixed(2)}`;
    }
}


//Seat and Day Pricing calculation
function calcPrice() {
    let seatSelectSTA = document.querySelector("#seatsSTA");
    let selectedOptionSTA = seatSelectSTA.options[seatSelectSTA.selectedIndex];
    let fullPriceSTA = selectedOptionSTA.getAttribute("data-fullprice");
    let discPriceSTA = selectedOptionSTA.getAttribute("data-discprice");
    let seatsValueSTA = selectedOptionSTA.value;

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

    let bookingTotalPrice = 0;

    console.clear();
    //loop to read radio option for day/time
    for (let i=0; i<dayTime.length;i++) {
        if (dayTime[i].checked){
            dayTimeDisc = dayTime[i].getAttribute("data-pricing");
        }
    }
    if (dayTimeDisc === "fullprice") {
        if(seatsValueSTA > 0) {
            bookingTotalPrice += (fullPriceSTA*seatsValueSTA)
            console.log("STA Full Price: $"+fullPriceSTA+" Seats:"+seatsValueSTA+" Total:$"+(fullPriceSTA*seatsValueSTA));
        }
        if (seatsValueSTP > 0) {
            bookingTotalPrice += (fullPriceSTP*seatsValueSTP)
            console.log("STP Full Price: $"+fullPriceSTP+" Seats:"+seatsValueSTP+" Total:$"+(fullPriceSTP*seatsValueSTP));
        }
        if (seatsValueSTC > 0) {
            bookingTotalPrice += (fullPriceSTC*seatsValueSTC)
            console.log("STC Full Price: $"+fullPriceSTC+" Seats:"+seatsValueSTC+" Total:$"+(fullPriceSTC*seatsValueSTC));
        }
        if(seatsValueFCA > 0) {
            bookingTotalPrice += (fullPriceFCA*seatsValueFCA)
            console.log("FCA Full Price: $"+fullPriceFCA+" Seats:"+seatsValueFCA+" Total:$"+(fullPriceFCA*seatsValueFCA));
        }
        if (seatsValueFCP > 0) {
            bookingTotalPrice += (fullPriceFCP*seatsValueFCP)
            console.log("FCP Full Price: $"+fullPriceFCP+" Seats:"+seatsValueFCP+" Total:$"+(fullPriceFCP*seatsValueFCP));
        }
        if (seatsValueFCC > 0) {
            bookingTotalPrice += (fullPriceFCC*seatsValueFCC)
            console.log("FCC Full Price: $"+fullPriceFCC+" Seats:"+seatsValueFCC+" Total:$"+(fullPriceFCC*seatsValueFCC));
        }
    } else if (dayTimeDisc == "discprice") {
        if(seatsValueSTA > 0) {
            bookingTotalPrice += (discPriceSTA*seatsValueSTA)
            console.log("STA Discount Price: $"+discPriceSTA+" Seats:"+seatsValueSTA+" Total:$"+(discPriceSTA*seatsValueSTA));
        }
        if (seatsValueSTP > 0) {
            bookingTotalPrice += (discPriceSTP*seatsValueSTP)
            console.log("STP Discount Price: $"+discPriceSTP+" Seats:"+seatsValueSTP+" Total:$"+(discPriceSTP*seatsValueSTP));
        }
        if (seatsValueSTC > 0) {
            bookingTotalPrice += (discPriceSTC*seatsValueSTC)
            console.log("STC Discount Price: $"+discPriceSTC+" Seats:"+seatsValueSTC+" Total:$"+(discPriceSTC*seatsValueSTC));
        }
        if(seatsValueFCA > 0) {
            bookingTotalPrice += (discPriceFCA*seatsValueFCA)
            console.log("FCA Discount Price: $"+discPriceFCA+" Seats:"+seatsValueFCA+" Total:$"+(discPriceFCA*seatsValueFCA));
        }
        if (seatsValueFCP > 0) {
            bookingTotalPrice += (discPriceFCP*seatsValueFCP)
            console.log("FCP Discount Price: $"+discPriceFCP+" Seats:"+seatsValueFCP+" Total:$"+(discPriceFCP*seatsValueFCP));
        }
        if (seatsValueFCC > 0) {
            bookingTotalPrice += (discPriceFCC*seatsValueFCC)
            console.log("FCC Discount Price: $"+discPriceFCC+" Seats:"+seatsValueFCC+" Total:$"+(discPriceFCC*seatsValueFCC));
        }
    }
    if (bookingTotalPrice > 0){
        console.log(bookingTotalPrice)
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

function showAlert(message) {
    alert (message);
}

// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Get the "Remember me" checkbox
    console.log("Hit 1");
    const rememberMeCheckbox = document.getElementById('rememberMe');
    const forgetMeCheckbox = document.getElementById('forgetMe');

    // Add an event listener to the "Remember me" checkbox
    rememberMeCheckbox.addEventListener('change', function() {
        console.log(this.checked);

        if (this.checked) {
            console.log("Hit 3");
            // Get the user details from the form
            const name = document.getElementById('user[name]').value;
            const email = document.getElementById('user[email]').value;
            const phone = document.getElementById('user[mobile]').value;

            // Store the user details in local storage
            localStorage.setItem('name', name);
            localStorage.setItem('email', email);
            localStorage.setItem('phone', phone);
        } else {
            console.log("Hit 4");
            // Clear the user details from local storage
            localStorage.removeItem('name');
            localStorage.removeItem('email');
            localStorage.removeItem('phone');
        }
    });

    forgetMeCheckbox.addEventListener('change', function() {
        console.log(this.checked);

        if (this.checked) {
            console.log("Hit 4");
            // Clear the user details from local storage
            localStorage.removeItem('name');
            localStorage.removeItem('email');
            localStorage.removeItem('phone');
        }
    });

    // Check if the user's details should be remembered
    if (localStorage.getItem('name') && localStorage.getItem('email') && localStorage.getItem('phone')) {
        document.getElementById('user[name]').value = localStorage.getItem('name');
        document.getElementById('user[email]').value = localStorage.getItem('email');
        document.getElementById('user[mobile]').value = localStorage.getItem('phone');
        rememberMeCheckbox.checked = true;
    }
});
