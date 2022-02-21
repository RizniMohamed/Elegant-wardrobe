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

        <div class="flex flex-wrap justify-start">

            <!-- item -->
            <?php
            $_SESSION['cart'] =  array();
            if (isset($_POST['btnWomenClothing'])) {
                $_POST['btnWomenClothing'] = null;

                $sql = "SELECT * FROM product WHERE cat_id=1 AND subcat_id=1";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md flex flex-col justify-around">
                        <img src="' . $row['image'] . '" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                        <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                        <div>
                            <select id="size_' . $row['product_id'] . '" class="w-full py-1 mt-2 bg-gray-200" id="size">
                            <option class="select disable hidden" value="Size">Size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            </select>
                            <input type="number" id="quantitiy_' . $row['product_id'] . '" min="1" max=' . $row['quantity'] . ' class="w-full px-1 my-2 bg-gray-200" placeholder="Quantity">
                            <input onclick="isLogin()?addToCart(' . $row['product_id'] . ',\'size_' . $row['product_id'] . '\',\'quantitiy_' . $row['product_id'] . '\',\'' . str_replace("'", "", $row['name'])  . '\',\'' . $row['unit_price'] . '\'):showLogin();" type="button"  value=" Add to cart" class="cursor-pointer my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1" >
                        </div>
                    </div>
                   ';
                }
            }

            if (isset($_POST['btnWomenFootwear'])) {
                $_POST['btnWomenFootwear'] = null;

                $sql = "SELECT * FROM product WHERE cat_id=1 AND subcat_id=2";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md flex flex-col justify-around">
                        <img src="' . $row['image'] . '" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                        <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                        <div>
                            <select id="size_' . $row['product_id'] . '" class="w-full py-1 mt-2 bg-gray-200" id="size">
                            <option class="select disable hidden" value="Size">Size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            </select>
                            <input type="number" id="quantitiy_' . $row['product_id'] . '" min="1" max=' . $row['quantity'] . ' class="w-full px-1 my-2 bg-gray-200" placeholder="Quantity">
                            <input onclick="isLogin()?addToCart(' . $row['product_id'] . ',\'size_' . $row['product_id'] . '\',\'quantitiy_' . $row['product_id'] . '\',\'' . str_replace("'", "", $row['name'])  . '\',\'' . $row['unit_price'] . '\'):showLogin();" type="button"  value=" Add to cart" class="cursor-pointer my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1" >
                        </div>
                    </div>
                   ';
                }
            }

            if (isset($_POST['btnWomenAccessories'])) {
                $_POST['btnWomenAccessories'] = null;
                $sql = "SELECT * FROM product WHERE cat_id=1 AND subcat_id=3";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md flex flex-col justify-around">
                        <img src="' . $row['image'] . '" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                        <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                        <div>
                            <select id="size_' . $row['product_id'] . '" class="w-full py-1 mt-2 bg-gray-200" id="size">
                            <option class="select disable hidden" value="Size">Size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            </select>
                            <input type="number" id="quantitiy_' . $row['product_id'] . '" min="1" max=' . $row['quantity'] . ' class="w-full px-1 my-2 bg-gray-200" placeholder="Quantity">
                            <input onclick="isLogin()?addToCart(' . $row['product_id'] . ',\'size_' . $row['product_id'] . '\',\'quantitiy_' . $row['product_id'] . '\',\'' . str_replace("'", "", $row['name'])  . '\',\'' . $row['unit_price'] . '\'):showLogin();" type="button"  value=" Add to cart" class="cursor-pointer my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1" >
                        </div>
                    </div>
                   ';
                }
            }

            ?>

        </div>
    </div>

</body>