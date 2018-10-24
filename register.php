<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">
  <form method="POST" action="index.php" onsubmit="return Validate()" name="vform">
  	<div>
  	  <input type="text" name="username" class="textInput" placeholder="Username">
  	  <div id="name_error" class="val_error"></div>
  	</div>
  	<div>
  	  <input type="email" name="email" class="textInput" placeholder="Email">
  	  <div id="email_error" class="val_error"></div>
  	</div>
  	<div>
  	  <input type="password" name="password" class="textInput" placeholder="Password">
  	</div>
  	<div>
  	  <input type="password" name="password_confirmation" class="textInput" placeholder="Password confirmation">
  	  <div id="password_error" class="val_error"></div>
  	</div>
  	<div>
  	  <input type="submit" value="Register" class="btn" name="register">
  	</div>
  </form>	
</div>

</body>
</html>

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