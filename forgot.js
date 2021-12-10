// Validate function
function validate() {

    // Store the data of inputs
    var user_email = document.getElementById("uemail").value;
    var user_npass = document.getElementById("npass").value;
    var user_cpass = document.getElementById("cpass").value;
    var regx = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+\.([a-z]+)(.[a-z]+)?$/

    // Quick validation for empty inputs
    if(user_email === "" || user_npass === "" || user_cpass === ""){
        window.alert("Kindly enter your email address or your new password");
        return;
    }

    // Quick validation for new password
    else if(user_npass != user_cpass || user_cpass != user_npass){
        window.alert("Passwords don't match! Check confirm new password.")
        return;        
    }

    // Quick validation for email address
    else if(user_email.match(regx)){
        window.alert("Reset password successful !");
        window.location.replace("index.php");
        return;
    }
    else{
        window.alert("Sorry! Invalid Email Address");
        return;
    }

}



// Clicking the sign in button calls validate function
document.getElementById("reset-pass").onclick = function () {validate();};