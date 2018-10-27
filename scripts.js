// Selecting all text elements
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];

// Selecting all error display elements
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');

// Setting all event listeners
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);

// Validation function
function Validate() {
  // Validate username
  if (username.value == "") {
  	username.style.border = "1px solid red";
  	document.getElementById('username_div').style.color = "red";
  	name_error.textContent = "Username is required";
  	username.focus();
  	return false;
  }
  // Validate username
  if (username.value.length < 3) {
  	username.style.border = "1px solid red";
  	document.getElementById("username_div").style.color = "red";
  	name_error.textContent = "Username must be at least 3 characters";
  	username.focus();
  	return false;
  }

  // Validate email
  if (email.value == "") {
  	email.style.border = "1px solid red";
  	document.getElementById("email_div").style.color = "red";
  	email_error.textContent = "Email is required";
  	email.focus();
  	return false;
  }
}