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
        });
        final_cart_list = [...new Map(cart.map(v => [v.id, v])).values()] // prevent duplicate entries
        sessionStorage.setItem('cart', JSON.stringify(final_cart_list));
        showSuccess("Product added successfully");
        console.log(final_cart_list);
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
var cart_items = document.getElementById('cart_items');

function createItem(product_name, product_quantity, product_price) {
    const div = document.createElement("div");
    div.className = " mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default"

    const name = document.createElement("p");
    name.className = "w-full ml-10 text-md font-semibold "
    const text_name = document.createTextNode(product_name);
    name.appendChild(text_name);

    const quantity = document.createElement("p");
    quantity.className = "w-full ml-10 text-md font-semibold "
    const text_quantity = document.createTextNode(product_quantity);
    quantity.appendChild(text_quantity);

    const price = document.createElement("p");
    price.className = "w-full ml-10 text-md font-semibold "
    const text_price = document.createTextNode(product_price);
    price.appendChild(text_price);

    div.appendChild(name)
    div.appendChild(quantity)
    div.appendChild(price)

    cart_items.appendChild(div);
}
var cart_list = JSON.parse(sessionStorage.getItem('cart'));
var cart_total_price = 0;
if (cart_list != null) {
    cart_list.forEach(e => {
        createItem(e.name, e.quantity, e.unit_price);
        cart_total_price = parseInt(cart_total_price) + parseInt(e.unit_price)

    });
}
createItem("Total", "", cart_total_price);

var cart_form = document.createElement("form");
cart_form.className = "bg-gray-600  mt-5 py-2 rounded-md hover:bg-gray-800"
cart_form.action = "/index.php"
cart_form.method = "POST"

var cart_form_input = document.createElement("input");
cart_form_input.type="submit"
cart_form_input.name="order"
cart_form_input.className ="w-full text-white font-bold "
cart_form_input.value ="Order now"

cart_form.appendChild(cart_form_input);

cart_items.appendChild(cart_form);
