<script>
    function showKid() {
        sessionStorage.setItem("currentPage", "kid");
        let model = document.getElementById('kidPage');
        model.classList.replace('hidden', 'block')
        hideCart();
        hideHome();
        hideMen();
        hideOrder();
        hideWomen();
        hideAboutUs();
        hideReturnPolicy();
        hideTC();
        hidePP();
        hideAdmin();

    }

    function hideKid() {
        let model = document.getElementById('kidPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>

    <div class="m-5 bg-gray-200 rounded-md p-5">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="flex justify-center">
            <input type="submit" name="btnKidClothing" class="font-bold text-gray-600 text-2xl mb-5      cursor-pointer hover:text-gray-800" value="Clothing">
            <input type="submit" name="btnKidFootwear" class="font-bold text-gray-600 text-2xl mb-5 mx-5 cursor-pointer hover:text-gray-800" value="Footwear">
            <input type="submit" name="btnKidAccessories" class="font-bold text-gray-600 text-2xl mb-5      cursor-pointer hover:text-gray-800" value="Accessories">
        </form>

        <div class="flex flex-wrap justify-between">
            <!-- item -->
            <?php
            if (isset($_POST['btnKidClothing'])) {
                $_POST['btnKidClothing'] = null;
                $sql = "SELECT * FROM product WHERE cat_id=3 AND subcat_id=1";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="' . $row['image'] . '" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                        <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                        <button class="my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1">Add to cart</button>
                    </div>
                   ';
                }
            }

            if (isset($_POST['btnKidFootwear'])) {
                $_POST['btnKidFootwear'] = null;
                $sql = "SELECT * FROM product WHERE cat_id=3 AND subcat_id=2";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="' . $row['image'] . '" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                        <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                        <button class="my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1">Add to cart</button>
                    </div>
                   ';
                }
            }

            if (isset($_POST['btnKidAccessories'])) {
                $_POST['btnKidAccessories'] = null;
                $sql = "SELECT * FROM product WHERE cat_id=3 AND subcat_id=3";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo '
                   <div class="w-56 m-2 bg-gray-300 p-2 rounded-md">
                        <img src="' . $row['image'] . '" class="w-52 h-56">
                        <h5 class="mt-2 font-semibold">' . $row['name'] . '</h5>
                        <h5 class="mt-1">LKR ' . $row['unit_price'] . '</h5>
                        <button class="my-2 w-full bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1">Add to cart</button>
                    </div>
                   ';
                }
            }

            ?>

        </div>
    </div>

</body>