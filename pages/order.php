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
        hideSearch();

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



        <?php
        $user_id = $_SESSION['login']['user_id'];


        $sql = "SELECT *, GROUP_CONCAT(product.name) AS items FROM orders 
                            INNER JOIN order_product as op ON orders.order_id = op.order_id
                            INNER JOIN product ON op.product_id = product.product_id
                            WHERE user_id =$user_id GROUP BY orders.order_id";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {

                echo '
                    <div class=" mt-1  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400">
                        <p class="w-52 ml-10 text-md font-bold ">ID</p>
                        <p class="w-full ml-10 text-md font-bold ">Name</p>
                        <p class="w-full ml-10 text-md font-bold ">Date</p>
                        <p class="w-full ml-10 text-md font-bold ">Status</p>
                    </div>
                ';

                while ($row = $result->fetch_assoc()) {
                    $status = ($row['status'] == '0') ? "Process" : "Delivered";
                    echo  '
                    <div class=" mt-1 items-center  rounded-md py-2 shadow-xl flex w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
                        <p class="w-52 ml-10 text-md font-semibold ">' . $row['order_id'] . '</p>
                        <p class="w-full ml-10 text-md font-semibold ">' . str_replace(',', '<br>', $row['items']) . '</p>
                        <p class="w-full ml-10 text-md font-semibold ">' . $row['date'] . '</p>
                        <p class="w-full ml-10 text-md font-semibold ">' . $status . '</p>
                    </div>
                    ';
                }
            } else {
                echo '
                        <h1 class="flex text-lg cursor-default justify-center h-96 font-bold items-center self-center w-full">No Orders Found</h1>
                    ';
            }
        }


        ?>



    </div>

</body>