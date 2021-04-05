function validateForm() {
    var fname = document.getElementById("fname").value;
    var uname = document.getElementById("uname").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var email = document.getElementById("email").value;
    var error = document.getElementById("error");
    var birthday = document.getElementById("birthday");
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    if (fname == "" || uname == "" || pass == "" || cpass == "" || email == ""|| birthday =="") {
        error.innerHTML = "ALL fields required js";
        return false;
    }
    else if (uname.length < 5) {
    error.innerHTML = "User Name should be 5 characters long";
        return false;
    }else if (email.match(mailformat)== false) {
    error.innerHTML = "email should contain @";
    return false;
} else if (pass.length < 8) {
    error.innerHTML = "Password should be 8 characters long";
    return false;
}
else if (pass.value != cpass.value) {
error.innerHTML = "Password should be same";
return false;
}
    else if (document.getElementById("male").checked == false && document.getElementById("female").checked == false && document.getElementById("other").checked == false ) {
    error.innerHTML = "Please select a radio button";
        return false;
}
}
