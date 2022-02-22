    <script>
        function showAddProduct() {
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
                        <div class="max-w-md w-full space-y-8">
                            <div>
                                <div class="flex justify-center">
                                    <span class="text-black font-black text-3xl">Elegant wardrobe</span>
                                </div>
                                <h2 class="mt-6 text-center text-2xl font-bold text-gray-900">Add product</h2>
                            </div>
                            
                            <form onsubmit="return false" action="../../PHP/admin.php" method="POST" enctype="multipart/form-data" class=" mt-1 items-center  rounded-md py-2 shadow-xl flex flex-col  w-full justify-around bg-gray-400 hover:bg-white hover-text-black cursor-default">
                        
                                <label for="new_pic_path">
                                    <img class=" rounded-lg  w-20 cursor-pointer border-0 hover:border-4" src="" alt="product image">
                                </label>
                                
                                <textarea id="product_id_name" name="admin_product_name" cols=20 rows=1 
                                class=" rounded-md bg-gray-300 p-2 w-96 text-start  text-md font-semibold "></textarea>
                                <input id="product_id_quantity" name="admin_product_quantity" type="number" min=0   
                                class=" rounded-md bg-gray-300 p-2 w-20 text-center  text-md font-semibold  ">
                                <input id="product_id_price'" name="admin_product_unit_price" type="number" min=0 
                                class=" rounded-md bg-gray-300 p-2 w-20 text-center  text-md font-semibold  ">

                                <input name="admin_btn_delete" type="submit" value="Save"  class="cursor-pointer my-2 w-20 bg-gray-600 hover:bg-gray-800 text-white font-bold rounded-md text-sm py-1 ">
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>