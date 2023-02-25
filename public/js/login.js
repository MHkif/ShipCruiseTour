function validateEmail(email) {
  let res =
    /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)$/;
  return res.test(email);
}

function validatePassword(password) {
  let res = /^[a-zA-Z0-9]+$/;
  return res.test(password);
}

function validatenumber(number) {
  let res = /[-+]?[0-9]*.?[0-9]+/;
  return res.test(number);
}

function validate(event) {
  let form = document.getElementById("formlogin");
  let erremail = document.getElementById("emailER");
  let errpassword = document.getElementById("passwordER");
  let email = document.getElementById("email").value;
  let emailField = document.getElementById("email");
  let password = document.getElementById("password").value;
  event.preventDefault();
  let bol = true;

  if (email == "" && password == "") {
    // bol = false;
    return alert("All Fields Must be Filled");
  }

  erremail.innerText = "";
  if (!validateEmail(email)) {
    erremail.innerText = email + " is not valid a Email";
    erremail.style.color = "red";
    bol = false;
  }

  errpassword.innerText = "";
  if (!validatePassword(password)) {
    errpassword.innerText = "Password is not valid";
    errpassword.style.color = "red";
    bol = false;
  }

  if (password == "") {
    errpassword.innerText = "Field must not be empty";
    errpassword.style.color = "red";
    bol = false;
  }

  if (email == "") {
    erremail.innerText = "Sir, How you suppose to login without an email .";
    erremail.style.color = "red";
    emailField.style.borderColor = "red";
    bol = false;
  }

  if (bol) {
    form.submit();
  }

  return false;
}
