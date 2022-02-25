function signupValidate() {
    let email = (document.getElementById('register_email').value)
    let password = (document.getElementById('register_password').value)
    let confirmPassword = (document.getElementById('register_confirmPassword').value)
    if (email.length == 0 || password.length == 0 || confirmPassword.length == 0) {
        if (email.length == 0)
            showError('Email cannot be empty')
        if (email.length != 0 && password.length == 0)
            showError('Password cannot be empty')
        if (email.length != 0 && password.length != 0) {
            var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.!@#\$%\^&\*])(?=.{8,})");
            if (strongRegex.test(password)) {
                if (email.length != 0 && password.length != 0 && confirmPassword.length == 0)
                    showError('Confirm password cannot be empty')
            } else {
                showError('Passowrd must include 1 number,1 lower letter, 1 upper letter, 1 special charatacter and 8 length')
            }
        }


    } else if ((password != confirmPassword)) {
        showError('Passwords not match')
    } else {
        sessionStorage.setItem('task', "register");
        hideRegister();
        return true;
    }
    return false;
}

function registerStatus() {
    if (getDBStatus() == 200) { //succcess
        showSuccess("User created successfully")
        showLogin();
    }
    if (getDBStatus() == 400) { // bad request
        showRegister();
        showError("Invalid input values")
    }
    if (getDBStatus() == 403) { // foribiden
        showRegister();
        showError("User exits with this email")
    }

    sessionStorage.setItem('db_status', '0')
    sessionStorage.setItem('task', "none");


}