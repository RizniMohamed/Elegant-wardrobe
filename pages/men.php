<script>
    function showMen() {
        sessionStorage.setItem("currentPage", "men");
        let model = document.getElementById('menPage');
        model.classList.replace('hidden', 'block')
        hideCart();
        hideKid();
        hideHome();
        hideOrder();
        hideWomen();
        hideAboutUs();
        hideReturnPolicy();
        hideTC();
        hidePP();
        hideAdmin();

    }

    function hideMen() {
        let model = document.getElementById('menPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>

    <div class="m-5 bg-gray-200 rounded-md p-5">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="flex justify-center">
            <input type="submit" name="btnMenClothing" class="font-bold text-gray-600 text-2xl mb-5      cursor-pointer hover:text-gray-800" value="Clothing">
            <input type="submit" name="btnMenFootwear" class="font-bold text-gray-600 text-2xl mb-5 mx-5 cursor-pointer hover:text-gray-800" value="Footwear">
            <input type="submit" name="btnMenAccessories" class="font-bold text-gray-600 text-2xl mb-5      cursor-pointer hover:text-gray-800" value="Accessories">
        </form>

        <div class="flex flex-wrap justify-between">
            <!-- item -->
            <?php
            if (isset($_POST['btnMenClothing'])) {
                $_POST['btnMenClothing'] = null;
                for ($i = 0; $i < 25; $i++) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="https://www.nolimit.lk/storage/t-shirt-20th-jan-2022/15-0063-w0a0174-540x600.jpg" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">HUF & DEE Crew Neck Plain</h5>
                        <h5 class="mt-1">LKR 1500</h5>
                        <button class="my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1">Add to cart</button>
                    </div>
                   ';
                }
            }

            if (isset($_POST['btnMenFootwear'])) {
                $_POST['btnMenFootwear'] = null;
                for ($i = 0; $i < 25; $i++) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="https://www.nolimit.lk/storage/online-shoott-bra3-0082-w0a5637-1-540x600.jpg" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">HUF & DEE Crew Neck Plain</h5>
                        <h5 class="mt-1">LKR 1500</h5>
                        <button class="my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1">Add to cart</button>
                    </div>
                   ';
                }
            }

            if (isset($_POST['btnMenAccessories'])) {
                $_POST['btnMenAccessories'] = null;
                for ($i = 0; $i < 25; $i++) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="https://www.nolimit.lk/storage/products/NOLIMIT-Online_0107__W0A4860-540x600.jpg" class="w-52 h-56">
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