// Validate function
function validate() {

    // Store the data of inputs
    var user_email = document.getElementById("uemail").value;
    var user_pass = document.getElementById("upass").value;
    var regx = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+\.([a-z]+)(.[a-z]+)?$/

   
    // Quick validation for empty inputs
    if(user_email === "" || user_pass === "") {
        window.alert("Kindly enter your email address or your password");
        return;
    }

    // Quick validation for email address
    else if(user_email.match(regx)){
        window.alert("Sign in successful !");
        window.location.replace("homepage.php");
        return;
    }
    else{
        window.alert("Sorry! Invalid Email Address");
        return;
    }

}




// Clicking the sign in button calls validate function
// document.getElementById("sign-in").onclick = function () {validate();};


