    <script>
        function showError() {
            let model = document.getElementById('errorModel');
            model.classList.replace('hidden', 'block')
            setTimeout(() => {
                model.classList.replace('block', 'hidden')
            }, 2000);
        }
    </script>

    <body>
        <div class="fixed z-10 inset-0 overflow-y-auto flex items-end self-bottom justify-center mb-10">
            <div class=" bg-red-400 rounded-lg overflow-hidden shadow-xl">
                <div class="min-h-full flex justify-center py-4 px-8  ">
                    <div class="flex">
                        <i class="fa-regular fa-face-frown text-bold text-2xl mr-2"></i>
                        <h2 class=" text-center text-xl font-bold text-gray-900">Error occured</h2>
                    </div>
                </div>
            </div>
        </div>
    </body>