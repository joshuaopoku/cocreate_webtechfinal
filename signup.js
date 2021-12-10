// Validate function
function validate() {

    // Store the data of inputs
    var fullName = document.getElementById("fullname").value;
    var user_name = document.getElementById("uname").value;
    var user_email = document.getElementById("uemail").value;
    var user_dob = document.getElementById("udate").value;
    var user_pass = document.getElementById("upass").value;
    var user_gender = document.forms["userForm"]["inlineRadioOptions"];
    var regx = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+\.([a-z]+)(.[a-z]+)?$/

    // Quick validation for empty inputs
    if(fullName === "" || user_name === "" || user_email === "" || user_pass === "" || user_dob === "") {
        window.alert("Kindly enter all your details");
        return;
    }

    // Quick validation for gender
    else if(user_gender[0].checked == false && user_gender[1].checked == false) {
        window.alert("Kindly choose your gender");
        return;
    }

    // Quick validation for email address
    else if(user_email.match(regx)){
        window.alert("Sign up successful !");
        window.location.replace("homepage.php");
        return;
    }
    else{
        window.alert("Sorry! Invalid Email Address");
        return;
    }


}



// Clicking the sign in button calls validate function
// document.getElementById("sign-up").onclick = function () {validate();};