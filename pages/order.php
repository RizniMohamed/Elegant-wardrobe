<script>
    function showOrder() {
        sessionStorage.setItem("currentPage", "order");
        let model = document.getElementById('orderPage');
        model.classList.replace('hidden', 'block')
        hideCart();
        hideKid();
        hideMen();
        hideHome();
        hideWomen();
        hideAboutUs();
        hideReturnPolicy();
        hideTC();
        hidePP();
        hideAdmin();

    }

    function hideOrder() {
        let model = document.getElementById('orderPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>


    <div class="flex flex-col justify-center m-10 bg-gray-300 p-5 rounded-lg">


        <h1 class="font-bold text-lg mb-5">
            Orders
        </h1>


        <div class=" mt-1  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400">
            <p class="w-full ml-10 text-md font-bold ">ID</p>
            <p class="w-full ml-10 text-md font-bold ">Name</p>
            <p class="w-full ml-10 text-md font-bold ">Date</p>
            <p class="w-full ml-10 text-md font-bold ">Status</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">001</p>
            <p class="w-full ml-10 text-md font-semibold ">trouser thirt</p>
            <p class="w-full ml-10 text-md font-semibold ">2000.10.20</p>
            <p class="w-full ml-10 text-md font-semibold ">Ongoing</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">002</p>
            <p class="w-full ml-10 text-md font-semibold ">bag watch cap thsirtt bag watch cap thsirtt bag watch cap thsirtt bag watch cap thsirtt</p>
            <p class="w-full ml-10 text-md font-semibold ">2010.10.10</p>
            <p class="w-full ml-10 text-md font-semibold ">delivered</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">002</p>
            <p class="w-full ml-10 text-md font-semibold ">bag watch cap thsirtt</p>
            <p class="w-full ml-10 text-md font-semibold ">2010.10.10</p>
            <p class="w-full ml-10 text-md font-semibold ">delivered</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">002</p>
            <p class="w-full ml-10 text-md font-semibold ">bag watch cap thsirtt</p>
            <p class="w-full ml-10 text-md font-semibold ">2010.10.10</p>
            <p class="w-full ml-10 text-md font-semibold ">delivered</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">002</p>
            <p class="w-full ml-10 text-md font-semibold ">bag watch cap thsirtt</p>
            <p class="w-full ml-10 text-md font-semibold ">2010.10.10</p>
            <p class="w-full ml-10 text-md font-semibold ">delivered</p>
        </div>

    </div>

</body>