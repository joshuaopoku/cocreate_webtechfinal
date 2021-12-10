/* Reserved for home page */


// Get the element
const element = document.getElementById('log-out');

// Checking if the element is clicked, if so, do alert('logout successful')
element.addEventListener("click", () => {
	window.alert("Logout successful !");
    window.location.replace("index.php");
    return;
});




// Validate function for email list
function validate() {

    // Store the data of inputs
    var user_email = document.getElementById("inlineFormInputGroupUsername").value;
    var regx = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+\.([a-z]+)(.[a-z]+)?$/

   
    // Quick validation for empty inputs
    if(user_email === "") {
        window.alert("Kindly enter your email address or your preference");
        return;
    }

    // Quick validation for email address
    else if(user_email.match(regx)){
        window.alert("Thank you for subscribing!");
        return;
    }
    else{
        window.alert("Sorry! Invalid Email Address");
        return;
    }

}




// Clicking the sign in button calls validate function
document.getElementById("sub-btn").onclick = function () {validate();};