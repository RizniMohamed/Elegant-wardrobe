<!-- Clothing  -->
<div class="flex flex-col justify-center mx-10 mb-10  p-5 rounded-lg">
    <button onclick="showAddProduct(1,1)" class="font-bold text-lg mb-5 flex">Clothing <i class="fa-solid fa-circle-plus text-2xl translate-y-1 ml-2 hover:text-green-600 cursor-pointer"></i></button>
    <div class=" mt-1  rounded-md py-2  flex w-full justify-around  border-2 border-gray-200">
        <p class=" w-20 text-md text-center font-bold ">Image</p>
        <p class=" w-96 text-md text-center font-bold ">Name</p>
        <p class=" w-20 text-md text-center font-bold ">Quantity</p>
        <p class=" w-20 text-md text-center font-bold ">Unit price</p>
        <p class=" w-20 text-md text-center font-bold ">Update</p>
        <p class=" w-20 text-md text-center font-bold ">Delete</p>
    </div>
    <?php
    $sql = "SELECT * FROM product WHERE cat_id=1 AND subcat_id=1";
    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                    <form onsubmit="return adminValidate(product_id_name_' . $row['product_id'] . ',product_id_quantity_' . $row['product_id'] . ',product_id_price_' . $row['product_id'] . ')" action="../../PHP/admin.php" method="POST" enctype="multipart/form-data" class=" mt-1 items-center  rounded-md py-2  flex  w-full justify-around border-gray-200 border-2 hover:bg-gray-100 hover-text-black cursor-default">
                        
                        <label for="new_pic_path">
                            <img class=" rounded-lg border  w-20 cursor-pointer border-0 hover:border-4" src="' . $row['image'] . '" alt="">
                        </label>

                        <input type="file" name="new_pic_path" id="new_pic_path" class="hidden">
                        <input name="admin_product_id" type="number" value="' . $row['product_id'] . '"  class="hidden">
                        <input name="old_pic_path" type="text" value="' . $row['image'] . '"  class="hidden">
                        <input name="cat_id" type="text" value="' . $row['cat_id'] . '"  class="hidden">
                        <input name="subcat_id" type="text" value="' . $row['subcat_id'] . '"  class="hidden">
                        
                        <textarea id="product_id_name_' . $row['product_id'] . '" name="admin_product_name" cols=20 rows=1 class=" rounded-md border-2 bg-white p-2 w-96 text-start  text-md font-semibold ">' . $row['name'] . '</textarea>
                        <input id="product_id_quantity_' . $row['product_id'] . '" name="admin_product_quantity" type="number" min=0 value="' . $row['quantity'] . '"   class=" rounded-md border-2 bg-white p-2 w-20 text-center  text-md font-semibold  ">
                        <input id="product_id_price_' . $row['product_id'] . '" name="admin_product_unit_price" type="number" min=0 value="' . $row['unit_price'] . '" class=" rounded-md border-2 bg-white p-2 w-20 text-center  text-md font-semibold  ">
                        <input name="admin_btn_update" type="submit" value="Update" class="cursor-pointer my-2 w-20 bg-gray-500 hover:bg-gray-600 text-white font-bold rounded-md text-sm py-1 ">
                        <input name="admin_btn_delete" type="submit" value="Delete" class="cursor-pointer my-2 w-20 bg-gray-500 hover:bg-red-600 text-white font-bold rounded-md text-sm py-1 ">
                    
                    </form>
                ';
            }
        }
    }

    ?>
</div>

<!-- Footwear  -->
<div class="flex flex-col justify-center mx-10 mb-10  p-5 rounded-lg">
    <button onclick="showAddProduct(1,2)" class="font-bold text-lg mb-5 flex">Footwear <i class="fa-solid fa-circle-plus text-2xl translate-y-1 ml-2 hover:text-green-600 cursor-pointer"></i></button>
    <div class=" mt-1  rounded-md py-2  flex w-full justify-around  border-2 border-gray-200 " >
        <p class=" w-20 text-md text-center font-bold ">Image</p>
        <p class=" w-96 text-md text-center font-bold ">Name</p>
        <p class=" w-20 text-md text-center font-bold ">Quantity</p>
        <p class=" w-20 text-md text-center font-bold ">Unit price</p>
        <p class=" w-20 text-md text-center font-bold ">Update</p>
        <p class=" w-20 text-md text-center font-bold ">Delete</p>
    </div>
    <?php
    $sql = "SELECT * FROM product WHERE cat_id=1 AND subcat_id=2";
    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               echo '
                    <form onsubmit="return adminValidate(product_id_name_' . $row['product_id'] . ',product_id_quantity_' . $row['product_id'] . ',product_id_price_' . $row['product_id'] . ')" action="../../PHP/admin.php" method="POST" enctype="multipart/form-data" class=" mt-1 items-center  rounded-md py-2  flex  w-full justify-around border-gray-200 border-2 hover:bg-gray-100 hover-text-black cursor-default">
                        
                        <label for="new_pic_path">
                            <img class=" rounded-lg border  w-20 cursor-pointer border-0 hover:border-4" src="' . $row['image'] . '" alt="">
                        </label>

                        <input type="file" name="new_pic_path" id="new_pic_path" class="hidden">
                        <input name="admin_product_id" type="number" value="' . $row['product_id'] . '"  class="hidden">
                        <input name="old_pic_path" type="text" value="' . $row['image'] . '"  class="hidden">
                        <input name="cat_id" type="text" value="' . $row['cat_id'] . '"  class="hidden">
                        <input name="subcat_id" type="text" value="' . $row['subcat_id'] . '"  class="hidden">
                        
                        <textarea id="product_id_name_' . $row['product_id'] . '" name="admin_product_name" cols=20 rows=1 class=" rounded-md border-2 bg-white p-2 w-96 text-start  text-md font-semibold ">' . $row['name'] . '</textarea>
                        <input id="product_id_quantity_' . $row['product_id'] . '" name="admin_product_quantity" type="number" min=0 value="' . $row['quantity'] . '"   class=" rounded-md border-2 bg-white p-2 w-20 text-center  text-md font-semibold  ">
                        <input id="product_id_price_' . $row['product_id'] . '" name="admin_product_unit_price" type="number" min=0 value="' . $row['unit_price'] . '" class=" rounded-md border-2 bg-white p-2 w-20 text-center  text-md font-semibold  ">
                        <input name="admin_btn_update" type="submit" value="Update" class="cursor-pointer my-2 w-20 bg-gray-500 hover:bg-gray-600 text-white font-bold rounded-md text-sm py-1 ">
                        <input name="admin_btn_delete" type="submit" value="Delete" class="cursor-pointer my-2 w-20 bg-gray-500 hover:bg-red-600 text-white font-bold rounded-md text-sm py-1 ">
                    
                    </form>
                ';
            }
        }
    }

    ?>
</div>

<!-- Accessorites  -->
<div class="flex flex-col justify-center mx-10 mb-10  p-5 rounded-lg">
    <button onclick="showAddProduct(1,3)" class="font-bold text-lg mb-5 flex">Accessories <i class="fa-solid fa-circle-plus text-2xl translate-y-1 ml-2 hover:text-green-600 cursor-pointer"></i></button>
    <div class=" mt-1  rounded-md py-2  flex w-full justify-around  border-2 border-gray-200">
        <p class=" w-20 text-md text-center font-bold ">Image</p>
        <p class=" w-96 text-md text-center font-bold ">Name</p>
        <p class=" w-20 text-md text-center font-bold ">Quantity</p>
        <p class=" w-20 text-md text-center font-bold ">Unit price</p>
        <p class=" w-20 text-md text-center font-bold ">Update</p>
        <p class=" w-20 text-md text-center font-bold ">Delete</p>
    </div>
    <?php
    $sql = "SELECT * FROM product WHERE cat_id=1 AND subcat_id=3";
    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               echo '
                    <form onsubmit="return adminValidate(product_id_name_' . $row['product_id'] . ',product_id_quantity_' . $row['product_id'] . ',product_id_price_' . $row['product_id'] . ')" action="../../PHP/admin.php" method="POST" enctype="multipart/form-data" class=" mt-1 items-center  rounded-md py-2  flex  w-full justify-around border-gray-200 border-2 hover:bg-gray-100 hover-text-black cursor-default">
                        
                        <label for="new_pic_path">
                            <img class=" rounded-lg border  w-20 cursor-pointer border-0 hover:border-4" src="' . $row['image'] . '" alt="">
                        </label>

                        <input type="file" name="new_pic_path" id="new_pic_path" class="hidden">
                        <input name="admin_product_id" type="number" value="' . $row['product_id'] . '"  class="hidden">
                        <input name="old_pic_path" type="text" value="' . $row['image'] . '"  class="hidden">
                        <input name="cat_id" type="text" value="' . $row['cat_id'] . '"  class="hidden">
                        <input name="subcat_id" type="text" value="' . $row['subcat_id'] . '"  class="hidden">
                        
                        <textarea id="product_id_name_' . $row['product_id'] . '" name="admin_product_name" cols=20 rows=1 class=" rounded-md border-2 bg-white p-2 w-96 text-start  text-md font-semibold ">' . $row['name'] . '</textarea>
                        <input id="product_id_quantity_' . $row['product_id'] . '" name="admin_product_quantity" type="number" min=0 value="' . $row['quantity'] . '"   class=" rounded-md border-2 bg-white p-2 w-20 text-center  text-md font-semibold  ">
                        <input id="product_id_price_' . $row['product_id'] . '" name="admin_product_unit_price" type="number" min=0 value="' . $row['unit_price'] . '" class=" rounded-md border-2 bg-white p-2 w-20 text-center  text-md font-semibold  ">
                        <input name="admin_btn_update" type="submit" value="Update" class="cursor-pointer my-2 w-20 bg-gray-500 hover:bg-gray-600 text-white font-bold rounded-md text-sm py-1 ">
                        <input name="admin_btn_delete" type="submit" value="Delete" class="cursor-pointer my-2 w-20 bg-gray-500 hover:bg-red-600 text-white font-bold rounded-md text-sm py-1 ">
                    
                    </form>
                ';
            }
        }
    }

    ?>
</div>