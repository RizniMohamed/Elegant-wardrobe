function loginValidate() {
    let email = (String)(document.getElementById('login_email').value)
    let password = (String)(document.getElementById('login_password').value)
    if (email.length == 0 || password.length == 0) {
        if (email.length == 0)
            showError('Email cannot be empty')
        if (email.length != 0 && password.length == 0)
            showError('Password cannot be empty')
    } else {
        hideLogin();
        return true;
    }
    return false;
}

//Get database status code
// 200 - success
// 400 - bad request
// 403 - forbidden request
function getDBStatus() {
    if ((sessionStorage.getItem('db_status') != null) && (sessionStorage.getItem('db_status') != 0)) {
        return parseInt(sessionStorage.getItem('db_status'))
    }
    return false;
}

function isLogin() {
    if (sessionStorage.getItem('login') != null ) {
        if (JSON.parse(sessionStorage.getItem('login'))['status']) return true;
    }
    if (getDBStatus() == 404) { //Not found
        sessionStorage.setItem('db_status', '0')
        showError("Invalid Credintials");
        showLogin();
    }

    return false
}

function logout() {
    sessionStorage.removeItem('login')
    showHomeOnly();
    window.location.reload();
}

