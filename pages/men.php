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
        hideSearch();

    }

    function hideMen() {
        let model = document.getElementById('menPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>

    <div style="min-height: 31.5vh;" class="m-5 rounded-md p-5">

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
                $sql = "SELECT * FROM product WHERE cat_id=2 AND subcat_id=1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                         echo '
                            <div class="w-56 m-2 border-2 border-gray-200 p-2 rounded-md flex flex-col justify-around">
                                <img src="' . $row['image'] . '" class="w-52 h-56 border rounded-md">
                                <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                                <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                                <div>
                                    <select id="size_' . $row['product_id'] . '" class="w-full py-1 mt-2 bg-white border-2 border-gray-200 rounded-md" id="size">
                                    <option class="select disable hidden" value="Size">Size</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    </select>
                                    <input type="number" id="quantitiy_' . $row['product_id'] . '" min="1" max=' . $row['quantity'] . ' class="w-full rounded-md p-1 my-2 bg-white border-2 border-gray-200" placeholder="Quantity">
                                    <input onclick="isLogin()?addToCart(' . $row['product_id'] . ',\'size_' . $row['product_id'] . '\',\'quantitiy_' . $row['product_id'] . '\',\'' . str_replace("'", "", $row['name'])  . '\',\'' . $row['unit_price'] . '\'):showLogin();" type="button"  value=" Add to cart" class="cursor-pointer my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1" >
                                </div>
                            </div>
                        ';
                    }
                } else {
                    echo '
                        <h1 class="flex text-lg cursor-default justify-center h-96 font-bold items-center self-center w-full">No products Found</h1>
                    ';
                }
            }

            if (isset($_POST['btnMenFootwear'])) {
                $_POST['btnMenFootwear'] = null;
                $sql = "SELECT * FROM product WHERE cat_id=2 AND subcat_id=2";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                         echo '
                            <div class="w-56 m-2 border-2 border-gray-200 p-2 rounded-md flex flex-col justify-around">
                                <img src="' . $row['image'] . '" class="w-52 h-56 border rounded-md">
                                <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                                <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                                <div>
                                    <select id="size_' . $row['product_id'] . '" class="w-full py-1 mt-2 bg-white border-2 border-gray-200 rounded-md" id="size">
                                    <option class="select disable hidden" value="Size">Size</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    </select>
                                    <input type="number" id="quantitiy_' . $row['product_id'] . '" min="1" max=' . $row['quantity'] . ' class="w-full rounded-md p-1 my-2 bg-white border-2 border-gray-200" placeholder="Quantity">
                                    <input onclick="isLogin()?addToCart(' . $row['product_id'] . ',\'size_' . $row['product_id'] . '\',\'quantitiy_' . $row['product_id'] . '\',\'' . str_replace("'", "", $row['name'])  . '\',\'' . $row['unit_price'] . '\'):showLogin();" type="button"  value=" Add to cart" class="cursor-pointer my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1" >
                                </div>
                            </div>
                        ';
                    }
                } else {
                    echo '
                        <h1 class="flex text-lg cursor-default justify-center h-96 font-bold items-center self-center w-full">No products Found</h1>
                    ';
                }
            }

            if (isset($_POST['btnMenAccessories'])) {
                $_POST['btnMenAccessories'] = null;
                $sql = "SELECT * FROM product WHERE cat_id=2 AND subcat_id=3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                         echo '
                            <div class="w-56 m-2 border-2 border-gray-200 p-2 rounded-md flex flex-col justify-around">
                                <img src="' . $row['image'] . '" class="w-52 h-56 border rounded-md">
                                <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                                <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                                <div>
                                    <select id="size_' . $row['product_id'] . '" class="w-full py-1 mt-2 bg-white border-2 border-gray-200 rounded-md" id="size">
                                    <option class="select disable hidden" value="Size">Size</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    </select>
                                    <input type="number" id="quantitiy_' . $row['product_id'] . '" min="1" max=' . $row['quantity'] . ' class="w-full rounded-md p-1 my-2 bg-white border-2 border-gray-200" placeholder="Quantity">
                                    <input onclick="isLogin()?addToCart(' . $row['product_id'] . ',\'size_' . $row['product_id'] . '\',\'quantitiy_' . $row['product_id'] . '\',\'' . str_replace("'", "", $row['name'])  . '\',\'' . $row['unit_price'] . '\'):showLogin();" type="button"  value=" Add to cart" class="cursor-pointer my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1" >
                                </div>
                            </div>
                        ';
                    }
                } else {
                    echo '
                        <h1 class="flex text-lg cursor-default justify-center h-96 font-bold items-center self-center w-full">No products Found</h1>
                    ';
                }
            }

            ?>

        </div>
    </div>

</body>