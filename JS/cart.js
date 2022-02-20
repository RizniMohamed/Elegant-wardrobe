var cart = [];

function addToCart(id,size_id,quantitiy_id) {
    var size = document.getElementById(size_id).value;
    var quantity = document.getElementById(quantitiy_id).value;
    if(size != "Size"){
        cart.push({
            "id" : id,
            "size" : size,
        });
        final_cart_list = [...new Map(cart.map(v => [v.id, v])).values()] // prevent duplicate entries
        showSuccess("Product added successfully");
        console.log(final_cart_list);
    }else{
        showError("Select a size")
    }
}
