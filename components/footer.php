<body>
    <!-- footer -->
    <div class="bg-gray-800 h-96 flex mt-5 border-box p-14 flex">
        <div class="w-60">
            <div class="flex-shrink-0 flex items-center cursor-default">
                <span class="text-white font-bold text-xl">Elegant wardrobe</span>
            </div>
            <p class="text-white mt-5 text-justify cursor-default">
                Sri Lanka’s biggest fashion chain offers a wide range of clothes and accessories for Men, Women and Kids. The retail store houses a range of Homeware and Lifestyle products to compliment a comprehensive family shopping experience for all our customers.
            </p>
            <div class="text-white mt-2">
                <i class="text-blue-400 text-2xl fa-brands fa-facebook-square cursor-pointer"></i>
                <i class="text-blue-400 text-2xl fa-brands fa-instagram-square cursor-pointer"></i>
            </div>
        </div>

        <div class=" flex flex-col ml-16">
            <h3 class="text-white font-bold cursor-default">Useful Links</h3>
            <a onclick="showAboutUs()" class="text-white hover:text-gray-400 cursor-pointer cursor-pointer mt-5">About us</a>
            <a onclick="showReturnPolicy()" class="text-white hover:text-gray-400 cursor-pointer cursor-pointer mt-2">Return policy</a>
            <a onclick="showTC()" class="text-white hover:text-gray-400 cursor-pointer cursor-pointer mt-2">Terms and condition</a>
            <a onclick="showPP()" class="text-white hover:text-gray-400 cursor-pointer cursor-pointer mt-2">Privacy policy</a>
        </div>

        <div class=" flex flex-col ml-16">
            <h3 class="text-white font-bold cursor-default">Whats In Store</h3>
            <form class="flex flex-col items-start" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input onclick="showWomen();" type="submit" name="btnWomenClothing" class="text-white hover:text-gray-400 cursor-pointer cursor-pointer mt-5 bg-gray-800" value="Women">
                <input onclick="showMen();" type="submit" name="btnMenClothing" class="text-white hover:text-gray-400 cursor-pointer cursor-pointer mt-2 bg-gray-800" value="Men">
                <input onclick="showKid();" type="submit" name="btnKidClothing" class="text-white hover:text-gray-400 cursor-pointer cursor-pointer mt-2 bg-gray-800" value="Kid">
            </form>
        </div>


        <div class=" flex flex-col ml-16">
            <h3 class="text-white font-bold cursor-default">My Account</h3>
            <a onclick="isLogin()?showProfile():showLogin()" class="text-white cursor-pointer hover:text-gray-400 cursor-pointer mt-5">My profile</a>
            <a onclick="isLogin()?showOrder():showLogin();" class="text-white cursor-pointer hover:text-gray-400 cursor-pointer mt-2">Orders</a>
        </div>

        <div class="flex justify-center w-2/5 h-12 self-center">
            <img class="mx-5" src="https://www.nolimit.lk/storage/general/bestweb.png" alt="">
            <img src="https://www.nolimit.lk/storage/general/visa.png" alt="">
            <img class="mx-5" src="https://www.nolimit.lk/storage/general/american-express.png" alt="">
        </div>
    </div>

</body>