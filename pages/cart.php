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
        hideSearch();

    }

    function hideCart() {
        let model = document.getElementById('cartPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>


    <div id="cart_items" class="flex  flex-col m-10  p-5 rounded-lg">

        <div class="flex items-center mb-5">
            <h1 class="font-bold text-lg ">Cart</h1>
            <i onclick="window.location.reload()" class="ml-2 rounded-full p-1 shadow-2xl border-2   text-gray-500 hover:bg-gray-200 cursor-pointer  fa-solid fa-arrows-rotate"></i>
        </div>

        <div id="order_header" class=" mt-1  rounded-md py-2 flex w-full justify-around border-2 border-gray-200">
            <p class="w-full ml-10 text-md font-bold ">Name</p>
            <p class="w-full ml-10 text-md font-bold ">Unit Price</p>
            <p class="w-full ml-10 text-md font-bold ">Quantity</p>
            <p class="w-full ml-10 text-md font-bold ">Price</p>
            <p class="w-full ml-10 text-md font-bold ">Delete</p>
        </div>

    </div>

</body>