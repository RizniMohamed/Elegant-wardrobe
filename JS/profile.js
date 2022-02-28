function profileValidate() {
    
    let name = document.getElementById('profile_name').value;
    let email = document.getElementById('profile_email').value;
    let password = document.getElementById('profile_password').value;
    let address = document.getElementById('profile_address').value;
    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.!@#\$%\^&\*])(?=.{8,})");

    if (email.length == 0 || password.length == 0 || name.length == 0 || address.length == 0) {
        if (name.length == 0)
            showError('Name cannot be empty');
        if (name.length != 0 && email.length == 0)
            showError('Email cannot be empty')
        if (name.length != 0 && email.length != 0 && password.length == 0)
            showError('Password cannot be empty')
        if (name.length != 0 && email.length != 0 && password.length != 0 && !strongRegex.test(password))
            showError('Passowrd must include 1 number,1 lower letter, 1 upper letter, 1 special charatacter and 8 length')
        if (name.length != 0 && email.length != 0 && password.length != 0 && strongRegex.test(password) && address.length == 0)
            showError('Address cannot be empty')

    } else if (!strongRegex.test(password)){
        showError('Passowrd must include 1 number,1 lower letter, 1 upper letter, 1 special charatacter and 8 length')
    } else {
        sessionStorage.setItem('task', "profile");
        hideProfile();
        return true;
    }
    return false;
}

function profileStatus() {
    if (getDBStatus() == 200) { //succcess
        showSuccess("User updated successfully")
    }
    if (getDBStatus() == 403) { // forbbiden request
        showProfile();
        showError("Email already taken")
    }
    if (getDBStatus() == 400) { // bad request
        showProfile();
        showError("Invalid input values")
    }
    sessionStorage.setItem('db_status', '0')
    sessionStorage.setItem('task', "none");

}