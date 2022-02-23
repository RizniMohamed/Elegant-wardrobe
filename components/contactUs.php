    <script>
        function showContactUs() {
            let model = document.getElementById('contactUsModel');
            model.classList.replace('hidden', 'block')
        }

        function hideContactUs() {
            let model = document.getElementById('contactUsModel');
            model.classList.replace('block', 'hidden')
        }
    </script>

    <body>
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div onclick="hideContactUs()" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-gray-100 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="min-h-full flex items-center justify-center py-8  ">
                        <div class="max-w-md w-full space-y-8">
                            <div>
                                <div class="flex justify-center">
                                    <span class="text-black font-black text-3xl">Elegant wardrobe</span>
                                </div>
                                <h2 class="mt-6 text-center text-2xl font-bold text-gray-900">Contact Us</h2>
                            </div>
                            <form onsubmit="showSuccess('Mail sent successfully');" class=" space-y-6" action="#" method="#">
                                <div class="rounded-md shadow-sm -space-y-px flex flex-col">
                                    <input class="p-2" type="text" name="name" id="name" placeholder="Name" required>
                                    <br><input class="p-2 " type="email" name="email" id="email" placeholder="Email address" required>
                                    <br><textarea class="p-2 " name="message" id="message" placeholder="Message" cols="30" rows="5" required></textarea>
                                </div>

                                <div>
                                    <input type="submit" value="Send" class="cursor-pointer w-full flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none ">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>