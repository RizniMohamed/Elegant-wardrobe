    <script>
        function showDelete() {
            let model = document.getElementById('deleteModel');
            model.classList.replace('hidden', 'block')
        }

        function hideDelete() {
            let model = document.getElementById('deleteModel');
            model.classList.replace('block', 'hidden')
        }
    </script>

    <body>
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div onclick="hideDelete()" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                <div class="inline-block align-bottom bg-gray-100 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="min-h-full flex items-center justify-center py-5  ">
                        <div class="max-w-md w-full space-y-4">
                            <div>
                                <h2 class=" text-center text-2xl font-bold text-gray-900">Delete confirmation</h2>
                            </div>
                            <div>
                                <h3 class=" text-xl text-gray-900">Are you sure about the deletion?</h3>
                                <div class="flex justify-end mt-10">
                                    <button onclick="hideDelete()" type="submit" class=" w-24 flex justify-center py-1 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none mr-2">
                                        No
                                    </button>
                                    <button onclick="hideDelete()" type="submit" class=" w-24 flex justify-center py-1 text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-red-700 focus:outline-none">
                                        Yes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>