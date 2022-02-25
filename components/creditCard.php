    <script>
        function showCreditCard() {
            let model = document.getElementById('creditCardModel');
            model.classList.replace('hidden', 'block')
        }

        function hideCreditCard() {
            let model = document.getElementById('creditCardModel');
            model.classList.replace('block', 'hidden')
        }
    </script>

    <body>
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div onclick="hideCreditCard()" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-gray-100 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="min-h-full flex items-center justify-center py-8  ">
                        <div class="max-w-md w-full space-y-8">
                            <div>
                                <h2 class="my-6 text-center text-2xl font-bold text-gray-900">Payment Methods</h2>
                            </div>

                            <form action="../PHP/cart.php" method="post" class="">

                                <div class="flex w-full justify-between mb-5 mt-14">
                                    <!-- VISA -->
                                    <div class="py-1 px-2 rounded-full bg-gray-300 flex w-44  justify-center items-center">
                                        <input onclick="
                                        divVisa.classList.replace('hidden','block');
                                        ccNumber.required = true;
                                        ccCVC.required = true;
                                        ccExp.required = true;
                                        " type="radio" id="VISA" name="rb_payment" value="2" class="cursor-pointer" required>
                                        <label for="VISA" class="font-semibold text-md mx-1 cursor-pointer">VISA</label>
                                    </div>

                                    <!-- Cash on delivery -->
                                    <div class="py-1 px-2 rounded-full bg-gray-300 flex w-44 justify-center   items-center">
                                        <input onclick="
                                        divVisa.classList.replace('block','hidden');
                                        ccNumber.required = false;
                                        ccCVC.required = false;
                                        ccExp.required = false;
                                        " type="radio" id="COD" name="rb_payment" value="1" class="cursor-pointer" required>
                                        <label for="COD" class="font-semibold text-md mx-1 cursor-pointer ">Cash On Delivery</label>
                                    </div>

                                </div>

                                <div id="divVisa" class="rounded-md shadow-sm mb-4 hidden">
                                    <input id="ccNumber" name="ccNumber" type="number" autocomplete="cc-number" required class="mb-2 w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md  sm:text-sm" placeholder="Card number">
                                    <div class="flex">
                                        <input id="ccExp" name="ccExp" type="month" autocomplete="cc-exp" required class="mb-2 w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none  focus:z-10 sm:text-sm mr-2" placeholder="Expire date">
                                        <input id="ccCVC" name="ccCVC" type="number" autocomplete="cc-csc" required class="mb-2 w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none  focus:z-10 sm:text-sm" placeholder="CVC">
                                    </div>
                                </div>

                                <input type="text" name="cart_order_list" id="cart_order_list" class="hidden">
                                <input onclick="sessionStorage.setItem('task', 'cart')" type="submit" value="Pay" class=" cursor-pointer w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>