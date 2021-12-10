function validate() {

    // Store the data of inputs
    var project_name = document.getElementById("floatingInput").value;
    var project_desc = document.getElementById("exampleFormControlTextarea1").value;
    var check_terms = document.getElementById("terms-agree").checked;
   
    // Quick validation for empty inputs
    if(project_name === "" || project_desc === "") {
        window.alert("Kindly enter project name or project description.");
        return;
    }

    // Quick validation for terms and conditions
    else if (check_terms === false) {
        window.alert("Kindly agree to our terms and conditions.")
        return;        
    }

    else{
        window.alert("Good job! Let's go and change the world.");
        window.location.replace("dashboard.php");
        return;
    }

}




// Clicking the sign in button calls validate function
// document.getElementById("cnp-link").onclick = function () {validate();};


