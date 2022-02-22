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

// Only show admin tab when admin logged in
let navAdmin = document.getElementById('navAdmin')
if (isLogin()) {
    if (JSON.parse(sessionStorage.getItem('login'))['image'] == "") {
        document.getElementById('dpImage').src = 'https://cdn1.iconfinder.com/data/icons/user-interface-664/24/User-512.png'
        document.getElementById('profile_dp').src = 'https://cdn1.iconfinder.com/data/icons/user-interface-664/24/User-512.png'
    } else {
        document.getElementById('dpImage').src = JSON.parse(sessionStorage.getItem('login'))['image']
        document.getElementById('profile_dp').src = JSON.parse(sessionStorage.getItem('login'))['image']
    }

    if (JSON.parse(sessionStorage.getItem('login'))['role'] == 'admin')
        navAdmin.classList.replace('hidden', 'block')
    else
        navAdmin.classList.replace('block', 'hidden')
} else {
    document.getElementById('dpImage').src = 'https://cdn1.iconfinder.com/data/icons/user-interface-664/24/User-512.png'
    document.getElementById('profile_dp').src = 'https://cdn1.iconfinder.com/data/icons/user-interface-664/24/User-512.png'
}

//Prevent resubmission
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}