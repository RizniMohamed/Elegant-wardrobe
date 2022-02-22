function addProductValidate(image, name, quantity, price) {

    if (image.value == 0 || name.value.length == 0 || quantity.value == 0 || price.value == 0) {
        if (image.value.length == 0)
            showError('Product image cannot be empty');
        if (image.value.length != 0 && name.value.length == 0)
            showError('Product name cannot be empty');
        if (image.value.length != 0 && name.value.length != 0 && quantity.value == 0)
            showError('Quantity cannot be empty')
        if (image.value.length != 0 && name.value.length != 0 && quantity.value != 0 && price.value == 0)
            showError('Price cannot be empty')
    } else {
        sessionStorage.setItem('task', "addProduct");
        return true;
    }

    return false;
}

function addProductStatus() {
    if (getDBStatus() == 200) { //succcess
        showSuccess("product created successfully")
    }
    if (getDBStatus() == 400) { // bad request
        showAdmin();
        showError("Invalid input values")
    }
    sessionStorage.setItem('db_status', '0')
    sessionStorage.setItem('task', "none");

}