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
                            </div>

                            <?php
                            if (isset($_SESSION)) {
                                echo '
                                    <form onsubmit=" return profileValidate();" class=" mb-5 " action="../PHP/profile.php" method="POST" enctype="multipart/form-data">
                                        <div class="rounded-md shadow-sm flex flex-col">
                                            <input type="file" name="dp_path" id="productAdd_new_pic_path" 
                                            class=" rounded-md py-1 my-2 w-full text-start text-gray-400  text-md font-semibold 
                                                    file:mr-4 file:py-1 file:px-4
                                                    file:rounded-md file:border-0
                                                    file:bg-white
                                                    file:text-gray-500
                                                    placeholder:text-gray-800
                                                    hover:file:bg-gray-200
                                                    hover:file:text-gray-800
                                                    hover:file:cursor-pointer
                                            ">

                                            <input value="' . $_SESSION['login']['name'] . '" class="p-2 mb-2 rounded-md  " type="text" name="profile_name" id="profile_name" placeholder="Name">
                                            <input value="' . $_SESSION['login']['email'] . '" class="p-2 mb-2 rounded-md  " type="email" name="profile_email" id="profile_email" placeholder="Email address">
                                            <input value="' . $_SESSION['login']['password'] . '" class="p-2 mb-2 rounded-md  " type="text" name="profile_password" id="profile_password" placeholder="password">
                                            <input type="submit" name="btnProfileUpdate" value="Update" class="mt-2 cursor-pointer w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none ">
                                            <input onclick="logout()" type="button" value="Logout" class="mt-2  cursor-pointer w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none ">
                                        </div>
                                    </form>
                                    ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>