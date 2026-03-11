console.log("connected");

let users = [];
let virtualCount = 0;
let inpersonCount = 0;

function collectData() {
  const name = document.getElementById("fullname").value;
  const email = document.getElementById("email").value;

  let virtual = document.getElementById("virtual").checked;
  let inperson = document.getElementById("inperson").checked;

  console.log("Collected data from form");
  console.log(name);
  console.log(email);

  if (!name || name.length < 6 || name.length > 100) {
    document.getElementById("nameErr").innerHTML =
      "Name must be between 6 and 100 characters";
  } else {
    document.getElementById("nameErr").innerHTML = "";
  }

  if (!email || !email.includes("@")) {
    document.getElementById("emailErr").innerHTML =
      "Enter a valid email";
  } else {
    document.getElementById("emailErr").innerHTML = "";
  }

  if (!virtual && !inperson) {
    document.getElementById("typeErr").innerHTML =
      "Select your attendance type";
  } else {
    document.getElementById("typeErr").innerHTML = "";
  }

  if (name && email && (virtual || inperson)) {
    users.push(email);

    if (virtual) {
      virtualCount++;
    }

    if (inperson) {
      inpersonCount++;
    }
  }

  return false;
}

function getEmail() {
  const email = document.getElementById("email").value;
  console.log("Given email is...", email);
}

function showAnalytics() {
  const panel = document.getElementById("analyticsPanel");

  if (panel.style.display == "none") {
    panel.style.display = "block";

    document.getElementById("total").innerHTML = users.length;
    document.getElementById("virtualNum").innerHTML = virtualCount;
    document.getElementById("inpersonNum").innerHTML = inpersonCount;

    document.getElementById("btn").innerHTML = "Hide Event Analytics";
  } else {
    panel.style.display = "none";
    document.getElementById("btn").innerHTML = "Show Event Analytics";
  }
}