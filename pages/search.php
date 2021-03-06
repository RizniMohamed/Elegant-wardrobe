<script>
    function showSearch() {
        sessionStorage.setItem("currentPage", "search");
        let model = document.getElementById('searchPage');
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
        hideWomen();

    }

    function hideSearch() {
        let model = document.getElementById('searchPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>

    <div class="m-5 rounded-md p-5">

        <div class="flex flex-wrap justify-start">

            <!-- item -->
            <?php
            $_POST['btnWomenClothing'] = null;

            $sql = "SELECT * FROM product WHERE name LIKE '" . $_POST['txtsearch'] . "%'";
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
                        <h1 class="flex text-lg cursor-default justify-center h-96 font-bold items-center self-center w-full">No Products Found</h1>
                    ';
            }


            ?>

        </div>
    </div>

</body>