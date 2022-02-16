<script>
    function showCart() {
        localStorage.setItem("cart", "block");
        let model = document.getElementById('cartPage');
        model.classList.replace('hidden', 'block')
    }

    function hideCart() {
        localStorage.setItem("cart", "hidden");
        let model = document.getElementById('cartPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>


    <div class="flex flex-col justify-center m-10 bg-gray-300 p-5 rounded-lg">

        <h1 class="font-bold text-lg mb-5">Cart</h1>

        <div class=" mt-1  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400">
            <p class="w-full ml-10 text-md font-bold ">Name</p>
            <p class="w-full ml-10 text-md font-bold ">Quantity</p>
            <p class="w-full ml-10 text-md font-bold ">Price</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">trouser thirt</p>
            <p class="w-full ml-10 text-md font-semibold ">2</p>
            <p class="w-full ml-10 text-md font-semibold ">1200</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">trouser thirt</p>
            <p class="w-full ml-10 text-md font-semibold ">2</p>
            <p class="w-full ml-10 text-md font-semibold ">1200</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">trouser thirt</p>
            <p class="w-full ml-10 text-md font-semibold ">2</p>
            <p class="w-full ml-10 text-md font-semibold ">1200</p>
        </div>
        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">trouser thirt</p>
            <p class="w-full ml-10 text-md font-semibold ">2</p>
            <p class="w-full ml-10 text-md font-semibold ">1200</p>
        </div>

        <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
            <p class="w-full ml-10 text-md font-semibold ">Total</p>
            <p class="w-full ml-10 text-md font-semibold "></p>
            <p class="w-full ml-10 text-md font-bold ">1200</p>
        </div>

        <?php
        if (isset($_POST['order'])) {

            echo "hiiiiiiii";
        }


        ?>
        <form class="bg-gray-600  mt-5 py-2 rounded-md hover:bg-gray-800" action="<?php echo ($_SERVER["PHP_SELF"]) ?>" method="post">
            <input id="btnOrder" type="submit" name="order" class="w-full text-white font-bold" value="Order now">
        </form>


    </div>

</body>