<script>
    function showWomen() {
        sessionStorage.setItem("currentPage", "women");
        let model = document.getElementById('womenPage');
        model.classList.replace('hidden', 'block')
        hideCart();
        hideKid();
        hideMen();
        hideOrder();
        hideHome();
        hideAboutUs();
        hideReturnPolicy();
        hideTC();
        hidePP();
        hideAdmin();

    }

    function hideWomen() {
        let model = document.getElementById('womenPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>

    <div class="m-5 bg-gray-200 rounded-md p-5">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="flex justify-center">
            <input type="submit" name="btnWomenClothing" class="font-bold text-gray-600 text-2xl mb-5      cursor-pointer hover:text-gray-800" value="Clothing">
            <input type="submit" name="btnWomenFootwear" class="font-bold text-gray-600 text-2xl mb-5 mx-5 cursor-pointer hover:text-gray-800" value="Footwear">
            <input type="submit" name="btnWomenAccessories" class="font-bold text-gray-600 text-2xl mb-5      cursor-pointer hover:text-gray-800" value="Accessories">
        </form>

        <div class="flex flex-wrap justify-between">
            <!-- item -->
            <?php
            if (isset($_POST['btnWomenClothing'])) {
                $_POST['btnWomenClothing'] = null;
                for ($i = 0; $i < 25; $i++) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="https://www.nolimit.lk/storage/dsd-540x600.jpg" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">HUF & DEE Crew Neck Plain</h5>
                        <h5 class="mt-1">LKR 1500</h5>
                        <button class="my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1">Add to cart</button>
                    </div>
                   ';
                }
            }

            if (isset($_POST['btnWomenFootwear'])) {
                $_POST['btnWomenFootwear'] = null;
                for ($i = 0; $i < 25; $i++) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="https://www.nolimit.lk/storage/1-2-53-540x600.jpg" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">HUF & DEE Crew Neck Plain</h5>
                        <h5 class="mt-1">LKR 1500</h5>
                        <button class="my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1">Add to cart</button>
                    </div>
                   ';
                }
            }

            if (isset($_POST['btnWomenAccessories'])) {
                $_POST['btnWomenAccessories'] = null;
                for ($i = 0; $i < 25; $i++) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="https://www.nolimit.lk/storage/online-shoot-0184-imgl9115-540x600.jpg" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">HUF & DEE Crew Neck Plain</h5>
                        <h5 class="mt-1">LKR 1500</h5>
                        <button class="my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1">Add to cart</button>
                    </div>
                   ';
                }
            }

            ?>

        </div>
    </div>

</body>