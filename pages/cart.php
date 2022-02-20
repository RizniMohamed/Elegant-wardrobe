<script>
    function showCart() {
        sessionStorage.setItem("currentPage", "cart");
        let model = document.getElementById('cartPage');
        model.classList.replace('hidden', 'block')
        hideHome();
        hideKid();
        hideMen();
        hideOrder();
        hideWomen();
        hideAboutUs();
        hideReturnPolicy();
        hideTC();
        hidePP();
        hideAdmin();
    }

    function hideCart() {
        let model = document.getElementById('cartPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>


    <div id="cart_items" class="flex flex-col justify-center m-10 bg-gray-300 p-5 rounded-lg">

        <h1 class="font-bold text-lg mb-5">Cart</h1>

        <div class=" mt-1  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400">
            <p class="w-full ml-10 text-md font-bold ">Name</p>
            <p class="w-full ml-10 text-md font-bold ">Unit Price</p>
            <p class="w-full ml-10 text-md font-bold ">Quantity</p>
            <p class="w-full ml-10 text-md font-bold ">Price</p>
        </div>
        
    </div>

</body>