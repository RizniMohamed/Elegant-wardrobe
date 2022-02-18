function signupValidate() {
    let email = (document.getElementById('register_email').value)
    let password = (document.getElementById('register_password').value)
    let confirmPassword = (document.getElementById('register_confirmPassword').value)
    if (email.length == 0 || password.length == 0 || confirmPassword.length == 0) {
        if (email.length == 0)
            showError('Email cannot be empty')
        if (email.length != 0 && password.length == 0)
            showError('Password cannot be empty')
        if (email.length != 0 && password.length != 0 && confirmPassword.length == 0)
            showError('Confirm password cannot be empty')

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
    if (getDBStatus() == 200){
        showHomeOnly();
        showSuccess("User created successfully")
    }
    if (getDBStatus() == 400) {
        showRegister();
        showError("Invalid input values")
    }

    sessionStorage.setItem('db_status', '0')
    sessionStorage.setItem('task', "none");


}