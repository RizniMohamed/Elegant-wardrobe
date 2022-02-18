    <script>
        function showError(msg) {
            let model = document.getElementById('errorModel');
            let text = document.getElementById('errorMsg');
            text.innerText = msg
            model.classList.replace('hidden', 'block')
            setTimeout(() => {
                model.classList.replace('block', 'hidden')
            }, 2000);
        }
    </script>

    <body>
        <div class="fixed z-50 inset-0 overflow-y-auto flex items-end self-bottom justify-center mb-10">
            <div class=" bg-red-400 rounded-lg overflow-hidden shadow-xl">
                <div class="min-h-full flex justify-center py-4 px-8  ">
                    <div class="flex">
                        <i class="fa-regular fa-face-frown text-bold text-2xl mr-2"></i>
                        <h2 id="errorMsg" class=" text-center text-xl font-bold text-gray-900"></h2>
                    </div>
                </div>
            </div>
        </div>
    </body>