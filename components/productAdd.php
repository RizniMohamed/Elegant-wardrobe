    <script>
        function showAddProduct(cat_id, subcat_id) {

            document.getElementById('productAdd_cat_id').value = cat_id;
            document.getElementById('productAdd_subcat_id').value = subcat_id;

            let model = document.getElementById('addProductModel');
            model.classList.replace('hidden', 'block')
        }

        function hideAddProduct() {
            let model = document.getElementById('addProductModel');
            model.classList.replace('block', 'hidden')
        }

    </script>


    <body>
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div onclick="hideAddProduct()" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-gray-100 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="min-h-full flex items-center justify-center py-8  ">
                        <div class="max-w-md w-full">

                            <h2 class="mt-2 text-center text-2xl font-bold text-gray-900">Add product</h2>

                            <form onsubmit="return addProductValidate(productAdd_new_pic_path,productAdd_id_name,productAdd_id_quantity,productAdd_id_price)" action="../../PHP/productAdd.php" method="POST" enctype="multipart/form-data" class="mt-10 flex flex-col items-center">

                                <input id="productAdd_cat_id" name="productAdd_cat_id" type="text" class="hidden">
                                <input id="productAdd_subcat_id" name="productAdd_subcat_id" type="text" class="hidden">
                                <input type="file" name="productAdd_new_pic_path" id="productAdd_new_pic_path" class=" rounded-md py-1 mt-2 w-full text-start text-gray-400  text-md font-semibold 
                                 file:mr-4 file:py-1 file:px-4
                                 file:rounded-md file:border-0
                                 file:bg-white
                                 file:text-gray-400
                                 placeholder:text-gray-800
                                 hover:file:bg-gray-200
                                 hover:file:text-gray-800
                                 hover:file:cursor-pointer
                                ">

                                <textarea placeholder="Product name" id="productAdd_id_name" name="productAdd_product_name" cols=20 rows=1 class=" rounded-md border-2 border-gray-200 p-1 mt-2 w-full text-start  text-md font-semibold "></textarea>
                                <input placeholder="Quantity" id="productAdd_id_quantity" name="productAdd_product_quantity" type="number" min=0 class=" rounded-md border-2 border-gray-200 p-1 mt-2 w-full text-start  text-md font-semibold  ">
                                <input placeholder="Unit price" id="productAdd_id_price" name="productAdd_product_unit_price" type="number" min=0 class=" rounded-md border-2 border-gray-200 p-1 mt-2 w-full text-start  text-md font-semibold  ">

                                <input name="admin_btn_delete" type="submit" value="Save" class=" w-full cursor-pointer mt-5 p-2  bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm ">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>