    <script>
        function showProfile() {
            let model = document.getElementById('profileModel');
            model.classList.replace('hidden', 'block')
        }

        function hideProfile() {
            let model = document.getElementById('profileModel');
            model.classList.replace('block', 'hidden')
        }
    </script>

    <body>
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div onclick="hideProfile()" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-gray-100 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="min-h-full flex items-center justify-center py-8  ">
                        <div class="max-w-md w-full space-y-8">
                            <div class="flex flex-col text-center justify-center">
                                <span class="text-black font-black text-3xl">Elegant wardrobe</span>
                                <img class=" mt-5 rounded-full w-32 h-32 border border-gray-600 p-1 shadow-xl hover:bg-gray-200 cursor-pointer flex self-center block" src="https://cdn1.iconfinder.com/data/icons/user-interface-664/24/User-512.png" alt="prfile">
                            </div>
                            <form  class=" mb-5 " action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <div class="rounded-md shadow-sm flex flex-col">
                                    <input class="p-2 mb-2 rounded-md  " type="text" name="name" id="name" placeholder="Name">
                                    <input class="p-2 mb-2 rounded-md  " type="email" name="email" id="email" placeholder="Email address">
                                    <input class="p-2 mb-2 rounded-md  " type="text" name="password" id="password" placeholder="password">
                                    <input type="submit" value="Update" class="mt-2 cursor-pointer w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none ">
                                    <input onclick="logout()" type="submit" value="Logout" class="mt-2 cursor-pointer w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none ">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>