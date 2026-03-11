let errorCounter = 0;

function collectData() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var emailErr = document.getElementById("emailErr");
    var passwordErr = document.getElementById("passwordErr");
    var countDisplay = document.getElementById("wrongCount");

    emailErr.innerHTML = "";
    passwordErr.innerHTML = "";

    var isValid = true;

    if (!email.includes("@")) {
        emailErr.innerHTML = "Email must contain '@'";
        isValid = false;
    }

    if (password.length < 6) {
        passwordErr.innerHTML = "Password have less than 6 character";
        isValid = false;
    } else if (!password.includes("#")) {
        passwordErr.innerHTML = "Password must contain #";
        isValid = false;
    }

    if (isValid) {
        alert("Form Submitted Successfully!");
        return true;
    } 
    else {
        errorCounter++;
        countDisplay.innerHTML = errorCounter;
        return false;
    }
}