<body>
    <!-- Header nav bar -->
    <nav class="bg-gray-800">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <a onclick="showHomeOnly()" class=" cursor-pointer text-white font-bold text-xl hover:text-gray-200">Elegant wardrobe</a>
                    </div>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="flex sm:ml-6 space-x-4">
                        <input type="submit" onclick="showWomen();" id="women" name="btnWomenClothing" class="cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" value="WOMEN">
                        <input type="submit" onclick="showMen();" id="men" name="btnMenClothing" class="cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" value="MEN">
                        <input type="submit" onclick="showKid();" id="kid" name="btnKidClothing" class="cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" value="KID">
                        <input type="button" onclick="showContactUs()" class="cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" value="CONTACT US">
                        <input type="submit" onclick="showAdmin()" name="btnAdminWomen" class="cursor-pointer text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" value="ADMIN PANEL">
                    </form>
                </div>
                <input class="px-2 rounded w-2/5 mr-5" type="text" placeholder="&#xF002; Search" id="txtsearch" name="txtsearch" style="font-family:Arial, FontAwesome">
                <i onclick="showCart();" class="fa-solid fa-cart-shopping text-white cursor-pointer  mr-5 animate-bounce"></i>
                <button onclick="showProfile()" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
            </div>
        </div>
    </nav>

    <!-- Women Drop down -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="womenDropdown" class="hidden z-50 pt-3 -translate-y-4 absolute box-border translate-x-52  ml-1 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <input onclick="showWomen();" type="submit" name="btnWomenClothing" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Clothing">
        <input onclick="showWomen();" type="submit" name="btnWomenFootwear" class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Footwear">
        <input onclick="showWomen();" type="submit" name="btnWomenAccessories" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Accessories">
    </form>

    <!-- men Drop down -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="menDropdown" class="hidden z-50 pt-3 -translate-y-4 absolute box-border translate-x-72 ml-5 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <input onclick="showMen();" type="submit" name="btnMenClothing" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Clothing">
        <input onclick="showMen();" type="submit" name="btnMenFootwear" class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Footwear">
        <input onclick="showMen();" type="submit" name="btnMenAccessories" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Accessories">
    </form>

    <!-- kid Drop down -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="kidDropdown" class="hidden z-50 pt-3 -translate-y-4 absolute box-border translate-x-80 ml-14 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <input onclick="showKid();" type="submit" name="btnKidClothing" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Clothing">
        <input onclick="showKid();" type="submit" name="btnKidFootwear" class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Footwear">
        <input onclick="showKid();" type="submit" name="btnKidAccessories" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer text-left" value="Accessories">
    </form>

    <!-- show drop downs  -->
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