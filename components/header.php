<body>
    <!-- Header nav bar -->
    <nav class="bg-gray-800">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <a onclick="hideOrder();hideCart();hideWomen();showHome()" class=" cursor-pointer text-white font-bold text-xl hover:text-gray-200">Elegant wardrobe</a>
                    </div>
                    <div class="flex sm:ml-6 space-x-4">
                        <a onclick="hideCart();hideHome();hideOrder();showWomen();" id="women" class="cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">WOMEN</a>
                        <a id="men" class="cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">MEN</a>
                        <a id="kid" class="cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">KID</a>
                        <a id="" class= "cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">CONTACT US</a>
                    </div>
                </div>
                <input class="px-2 rounded w-2/5 mr-5" type="text" placeholder="&#xF002; Search" id="txtsearch" name="txtsearch" style="font-family:Arial, FontAwesome">
                <i onclick="hideOrder();hideHome();showCart();hideWomen();" class="fa-solid fa-cart-shopping text-white cursor-pointer  mr-5 animate-bounce"></i>
                <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
            </div>
        </div>
    </nav>

    <!-- Women Drop down -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="womenDropdown" class="hidden z-50 pt-3 -translate-y-4 absolute box-border translate-x-52  ml-1 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <input onclick="hideOrder();hideHome();hideCart();showWomen();" type="submit" name="btnClothing" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Clothing">
        <input onclick="hideOrder();hideHome();hideCart();showWomen();" type="submit" name="btnFootwear" class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Footwear">
        <input onclick="hideOrder();hideHome();hideCart();showWomen();" type="submit" name="btnAccessories" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Accessories">
    </form>

    <!-- men Drop down -->
    <div id="menDropdown" class="hidden z-50 pt-3 -translate-y-4 absolute box-border translate-x-72 ml-5 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <a class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer"> Clothing</a>
        <a class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer"> Footwear</a>
        <a class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer"> Accessories</a>
    </div>

    <!-- kid Drop down -->
    <div id="kidDropdown" class="hidden z-50 pt-3 -translate-y-4 absolute box-border translate-x-80 ml-14 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <a class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer"> Clothing</a>
        <a class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer"> Footwear</a>
        <a class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer"> Accessories</a>
    </div>

    <script>
        const showDropdown = (tab) => {
            let dropdown = document.getElementById(tab);
            dropdown.classList.replace("hidden", "block")
        }
        const hideDropdown = (tab) => {
            let dropdown = document.getElementById(tab);
            dropdown.classList.replace("block", "hidden")
        }

        let dropdownID = ['womenDropdown', 'menDropdown', 'kidDropdown']
        let tabID = ['women', 'men', 'kid']
        let i = 0;

        dropdownID.forEach(id => {

            let dropdown = document.getElementById(id)
            dropdown.addEventListener('mouseover', () => showDropdown(id))
            dropdown.addEventListener('mouseout', () => hideDropdown(id))

            let tab = document.getElementById(tabID[i++])
            tab.addEventListener('mouseover', () => showDropdown(id))
            tab.addEventListener('mouseout', () => hideDropdown(id))
        })
    </script>

    

</body>