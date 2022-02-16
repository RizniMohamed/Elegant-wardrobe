    <script>
        function showRegister() {
            let model = document.getElementById('registerModel');
            model.classList.replace('hidden', 'block')
        }

        function hideRegister() {
            let model = document.getElementById('registerModel');
            model.classList.replace('block', 'hidden')
        }
    </script>

    <body>
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-gray-100 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="min-h-full flex items-center justify-center py-8  ">
                        <div class="max-w-md w-full space-y-8">
                            <div>
                                <div class="flex justify-center">
                                    <span class="text-black font-black text-3xl">Elegant wardrobe</span>
                                </div>
                                <h2 class="mt-6 text-center text-2xl font-bold text-gray-900">Sign up</h2>
                            </div>
                            <form class=" space-y-6" action="#" method="POST">
                                <div class="rounded-md shadow-sm -space-y-px">
                                    <div>
                                        <input id="email-address" name="email" type="email" autocomplete="email" required class=" w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md  sm:text-sm" placeholder="Email address">
                                    </div>
                                    <div>
                                        <input id="password" name="password" type="password" autocomplete="current-password" required class="mt-2 w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none  focus:z-10 sm:text-sm" placeholder="Password">
                                    </div>
                                    <div>
                                        <input id="password" name="password" type="password" autocomplete="current-password" required class="mt-2 w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none  focus:z-10 sm:text-sm" placeholder="Confirm password">
                                    </div>
                                </div>

                                <div>
                                    <button onclick="hideRegister()" type="submit" class=" w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none ">
                                        Sign up
                                    </button>
                                </div>

                                <div>
                                    <a onclick="showLogin();hideRegister()" href="#" class="text-blue-400 hover:text-blue-700 font-bold justify-center flex">Do you have an account? Sign in</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>