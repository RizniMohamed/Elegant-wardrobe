function profileValidate() {

    let name = document.getElementById('profile_name').value;
    let email = document.getElementById('profile_email').value;
    let password = document.getElementById('profile_password').value;
    let address = document.getElementById('profile_address').value;

    if (email.length == 0 || password.length == 0 || name.length == 0 || address.length == 0) {
        if (name.length == 0)
            showError('Name cannot be empty');
        if (name.length != 0 && email.length == 0)
            showError('Email cannot be empty')
        if (name.length != 0 && email.length != 0 && password.length == 0)
            showError('Password cannot be empty')
        if (name.length != 0 && email.length != 0 && password.length != 0 && address.length == 0)
            showError('Address cannot be empty')

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