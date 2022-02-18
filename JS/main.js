//Page router
function router() {
    showHome();
    if (sessionStorage.getItem("currentPage") == "women") showWomen();
    if (sessionStorage.getItem("currentPage") == "cart") showCart();
    if (sessionStorage.getItem("currentPage") == "order") showOrder();
    if (sessionStorage.getItem("currentPage") == "men") showMen();
    if (sessionStorage.getItem("currentPage") == "kid") showKid();
    if (sessionStorage.getItem("currentPage") == "aboutUs") showAboutUs();
    if (sessionStorage.getItem("currentPage") == "pp") showPP();
    if (sessionStorage.getItem("currentPage") == "tc") showTC();
    if (sessionStorage.getItem("currentPage") == "returnPolicy") showReturnPolicy();
    if (sessionStorage.getItem("currentPage") == "admin") showAdmin();
}

//task process
function task_status() {
    if (sessionStorage.getItem("task") == "register") registerStatus();

}

// Only show admin tab when admin logged in
let navAdmin = document.getElementById('navAdmin')
if (isLogin()) {
    if (JSON.parse(sessionStorage.getItem('login'))['role'] == 'admin')
        navAdmin.classList.replace('hidden', 'block')
    else
        navAdmin.classList.replace('block', 'hidden')
}

//Prevent resubmission
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}