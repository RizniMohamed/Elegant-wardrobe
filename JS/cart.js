//create cart bucket and add items to it
var final_cart_list = [];
var cart = (sessionStorage.getItem('cart') == null) ? [] : JSON.parse(sessionStorage.getItem('cart'));

function addToCart(id, size_id, quantitiy_id, name, unit_price) {
    var size = document.getElementById(size_id).value;
    var quantity = document.getElementById(quantitiy_id).value;
    if ((size != "Size") && (quantity != "")) {
        cart.push({
            "id": id,
            "size": size,
            "quantity": quantity,
            "name": name,
            "unit_price": unit_price,
            "user_id": JSON.parse(sessionStorage.getItem('login'))['user_id'],
            "tot_price": 0,
        });
        final_cart_list = [...new Map(cart.map(v => [v.id, v])).values()] // prevent duplicate entries
        sessionStorage.setItem('cart', JSON.stringify(final_cart_list));
        showSuccess("Product added successfully");
    } else {
        if (size == "Size") {
            showError("Select a size")
        }
        if ((quantity == "") && (size != "Size")) {
            showError("Quantity cannot be empty")
        }
    }
}

//Display cart list
var rollNo = 1;
function createItem(product_id, product_name, product_unitPrice, product_quantity, product_price) {
    const div = document.createElement("div");
    div.className = " mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default"

    const name = document.createElement("p");
    name.className = "w-full ml-10 text-md font-semibold "
    const text_name = document.createTextNode(product_name);
    name.appendChild(text_name);

    const unit_price = document.createElement("p");
    unit_price.className = "w-full ml-10 text-md font-semibold "
    const text_unit_price = document.createTextNode(product_unitPrice);
    unit_price.appendChild(text_unit_price);

    const quantity = document.createElement("p");
    quantity.className = "w-full ml-10 text-md font-semibold "
    const text_quantity = document.createTextNode(product_quantity);
    quantity.appendChild(text_quantity);

    const price = document.createElement("p");
    price.className = "w-full ml-10 text-md font-semibold "
    if (product_name == "Total") price.className = "w-full ml-10 text-md font-bold "
    const text_price = document.createTextNode(product_price);
    price.appendChild(text_price);

    
    const btnDelete = document.createElement("button");
    btnDelete.className = "text-white w-20 -translate-x-3  font-bold bg-gray-600 my-2 py-1 text-sm rounded-md hover:bg-gray-800 "
    const text_delete = document.createTextNode("Delete");
    btnDelete.onclick = () => {
        let list = JSON.parse(sessionStorage.getItem('cart'))
        list = list.filter((i) => i.id != product_id)
        sessionStorage.setItem('cart', JSON.stringify(list))
        window.location.reload();

    }
    btnDelete.appendChild(text_delete);

    const btn = document.createElement('div')
    btn.className = "w-full ml-10 flex "
    if (product_name != "Total")  btn.appendChild(btnDelete);


    div.appendChild(name)
    div.appendChild(unit_price)
    div.appendChild(quantity)
    div.appendChild(price)
    div.appendChild(btn)

    cart_items.appendChild(div);
}

var cart_items = document.getElementById('cart_items');

var cart_list = JSON.parse(sessionStorage.getItem('cart'));
var cart_total = 0;
if (cart_list != null && cart_items != null) {
    cart_list.map(e => {
        e.tot_price = (e.unit_price * e.quantity)
        createItem(e.id, e.name, e.unit_price, e.quantity, e.tot_price);
        cart_total += e.tot_price;
        return e;
    });
    

    createItem("","Total", "", "",  cart_total);



    var cart_form_input = document.createElement("input");
    cart_form_input.type = "button"
    cart_form_input.onclick = () => showCreditCard()
    cart_form_input.name = "order"
    cart_form_input.className = "w-full text-white cursor-pointer font-bold bg-gray-600 my-2 py-2 text-sm rounded-md hover:bg-gray-800 "
    cart_form_input.value = "Order now"

    var cart_form_input_temp = document.getElementById("cart_order_list");
    cart_form_input_temp.value = JSON.stringify(cart_list)


    cart_items.appendChild(cart_form_input);
}


function cartStatus() {
    if (getDBStatus() == 200) { //succcess
        sessionStorage.removeItem('cart')
        showHomeOnly();
        showSuccess("Order added successfully")
    }
    if (getDBStatus() == 400) { // bad request
        showCart();
        showError("Invalid input values")
    }
    sessionStorage.setItem('db_status', '0')
    sessionStorage.setItem('task', "none");

}