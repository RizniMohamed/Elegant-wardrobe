function adminValidate(name, quantity, price) {
    if (name.value.length == 0 || quantity.value == 0 || price.value == 0) {
        if (name.value.length == 0) {
            showError('name cannot be empty');
        }
        if (name.value.length != 0 && quantity.value == 0) {
            showError('Quantity cannot be empty')
        }

        if (name.value.length != 0 && quantity.value != 0 && price.value == 0) {
            showError('Price cannot be empty')
        }

    } else {
        sessionStorage.setItem('task', "admin");
        return true;
    }

    return false;
}

function adminStatus() {
    if (getDBStatus() == 200) { //succcess
        showSuccess("product updated successfully")
    }
    if (getDBStatus() == 202) { //accepted
        showSuccess("product deleted successfully")
    }
    if (getDBStatus() == 400) { // bad request
        showAdmin();
        showError("Invalid input values")
    }
    sessionStorage.setItem('db_status', '0')
    sessionStorage.setItem('task', "none");

}