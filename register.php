<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<title>Form Validation with JavaScript</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">
  <form method="POST" action="index.php" onsubmit="return Validate()" name="vform">
  	<div id="username_div">
      <label>Username</label> <br>
  	  <input type="text" name="username" class="textInput">
  	  <div id="name_error"></div>
  	</div>

  	<div id="email_div">
      <label>Email</label> <br>
  	  <input type="email" name="email" class="textInput">
  	  <div id="email_error"></div>
  	</div>

  	<div id="password_div">
      <label>Password</label> <br>
  	  <input type="password" name="password" class="textInput">
  	</div>

  	<div id="pass_confirm_div">
      <label>Password confirm</label> <br>
  	  <input type="password" name="password_confirm" class="textInput">
  	  <div id="password_error"></div>
  	</div>

  	<div>
  	  <input type="submit" name="register" value="Register" class="btn">
  	</div>
  </form>	
</div>

</body>
</html>
<script type="scripts.js"></script>
<!-- JAVASCRIPT -->
<script type="text/javascript">
  // GETTING ALL INPUT TEXT OBJECTS
  var username = document.forms["vform"]["username"];
  var email = document.forms["vform"]["email"];
  var password = document.forms["vform"]["password"];
  var password_confirmation = document.forms["vform"]["password_confirmation"];

  // GETTING ALL ERROR DISPLAY OBJECTS
  var name_error = document.getElementById("name_error");
  var email_error = document.getElementById("email_error");
  var password_error = document.getElementById("password_error");

  // SETTING ALL EVENT LISTENER
  username.addEventListener("blur", nameVerify, true);
  email.addEventListener("blur", emailVerify, true);
  password.addEventListener("blur", passwordVerify, true);

  // validation function
  function Validate() {
    // username validation
    if (username.value == "") {
      username.style.border = "1px solid red";
      name_error.textContent = "Username is required";
      username.focus();
      return false;
    }

    // email validation
    if (email.value == "") {
      email.style.border = "1px solid red";
      email_error.textContent = "Email is required";
      email.focus();
      return false;
    }

    // password validation
    if (password.value == "") {
      password.style.border = "1px solid red";
      password_error.textContent = "Password is required";
      password.focus();
      return false;
    }
  }

  // check if the two password match
  if (password.value != password_confirmation.value) {
    password.style.border = "1px solid red";
    password_confirmation.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }

// event handler functions
function nameVerify() {
  if (username.value != "") {
    username.style.border = "1px solid #5E6E66";
    name_error.innerHTML = "";
    return true;
  }
}

function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5E6E66";
    email_error.innerHTML = "";
    return true;
  }
}

function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5E6E66";
    password_error.innerHTML = "";
    return true;
  }
}

</script>