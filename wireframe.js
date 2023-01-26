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

// let button = document.getElementById("bookNowButton")
// button.addEventListener("click", function(event){
//   event.preventDefault();
//   document.getElementById("bookNowForm").submit();
// })

function validateForm() {
  var name = document.getElementById("user[name]").value;
  var email = document.getElementById("user[email]").value;
  var mobile = document.getElementById("user[mobile]").value;
  if (name == "" || email == "" || mobile == "") {
    alert("Name and Email must be filled out");
    return false;
  }
}