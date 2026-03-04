//console.log("connected");

function collectData() {
  
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
 
  if (!email) {
    document.getElementById("emailErr").innerHTML = "Email is required";
  } else {
    document.getElementById("emailErr").innerHTML = "";
  }

  if (!password) {
    document.getElementById("passwordErr").innerHTML = "Password is required";
  } else {
    document.getElementById("passwordErr").innerHTML = "";
  }
  console.log("Collected data from form");
  console.log(email);
  console.log(password);
  return false;

   alert("Login form submitted");

}