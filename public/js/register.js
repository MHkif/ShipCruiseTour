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

function validateName(text) {
  if (text == "") {
    return false;
  }
  return true;
}

function matchedPasswords(conf_pass, pass) {
  if (conf_pass != pass) {
    return false;
  }
  return true;
}

function validate(event) {
  let form = document.getElementById("formRegister");
  let erremail = document.getElementById("emailER");
  let errpassword = document.getElementById("passwordER");
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let confirm_password = document.getElementById("Confirm_password").value;
  let f_name = document.getElementById("first_name").value;
  let l_name = document.getElementById("last_name").value;
  let f_nameERR = document.getElementById("fnameER");
  let l_nameERR = document.getElementById("lnameER");
  let con_passER = document.getElementById("Con_passER");
  let checkEmail = document.getElementById("checkEmail");
  let divy = document.getElementById("divy");
  event.preventDefault();
  let bol = true;

  if (
    f_name == "" &&
    l_name == "" &&
    email == "" &&
    password == "" &&
    confirm_password == ""
  ) {
    return alert("All Fields Must be Filled");
  }

  erremail.innerText = "";
  if (!validateEmail(email)) {
    erremail.innerText = email + " is not valid a Email";
    erremail.style.color = "red";
    erremail.classList.add("py-1");
    checkEmail.remove();
    bol = false;
  }
  if (email == "") {
    erremail.innerText = "Field must not be empty";
    erremail.style.color = "red";
    erremail.classList.add("py-1");
    checkEmail.remove();
    bol = false;
  }

  errpassword.innerText = "";
  if (!validatePassword(password)) {
    errpassword.innerText = "Password is not valid";
    errpassword.style.color = "red";
    errpassword.classList.add("py-1");
    bol = false;
  }

  if (password == "") {
    errpassword.innerText = "Field must not be empty";
    errpassword.style.color = "red";
    errpassword.classList.add("py-1");
    bol = false;
  }

  l_nameERR.innerText = "";
  if (!validateName(l_name)) {
    l_nameERR.innerText = l_name + " is not valid";
    l_nameERR.style.color = "red";
    l_nameERR.classList.add("py-1");
    bol = false;
  }
  if (l_name == "") {
    l_nameERR.innerText = "Field must not be empty";
    l_nameERR.style.color = "red";
    l_nameERR.classList.add("py-1");
    bol = false;
  }

  f_nameERR.innerText = "";
  if (!validateName(f_name)) {
    f_nameERR.innerText = f_name + " is not valid";
    f_nameERR.style.color = "red";
    f_nameERR.classList.add("py-1");
    bol = false;
  }

  if (f_name == "") {
    f_nameERR.innerText = "Field must not be empty";
    f_nameERR.style.color = "red";
    f_nameERR.classList.add("py-1");
    bol = false;
  }

  con_passER.innerText = "";
  if (!matchedPasswords(confirm_password, password)) {
    con_passER.innerText = "Password does not match";
    con_passER.style.color = "red";
    con_passER.classList.add("py-1");
    bol = false;
  }

  if (bol) {
    form.submit();
  }

  return false;
}
