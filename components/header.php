<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../JS/header.js" async></script>
</head>

<body>
    <!-- Header nav bar -->
    <nav class="bg-gray-800">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-white font-bold text-xl">Elegant wardrobe</span>
                    </div>
                    <div class="flex sm:ml-6 space-x-4">
                        <a href="#" id="home" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">HOME</a>
                        <a href="#" id="women" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">WOMEN</a>
                        <a href="#" id="men" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">MEN</a>
                        <a href="#" id="kid" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">KID</a>
                        <a href="#" id="" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">CONTACT US</a>
                    </div>
                    <input class="px-2 rounded w-2/5 ml-5" type="text" placeholder="&#xF002; Search" id="txtsearch" name="txtsearch" style="font-family:Arial, FontAwesome">
                </div>
                <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
            </div>
        </div>
    </nav>

    <!-- Home Drop down -->
    <div id="homeDropdown" class="hidden pt-3 -translate-y-4 absolute  box-border translate-x-48 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <a href="#" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Clothing</a>
        <a href="#" class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Footwear</a>
        <a href="#" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Accessories</a>
    </div>

    <!-- Women Drop down -->
    <div id="womenDropdown" class="hidden pt-3 -translate-y-4 absolute box-border translate-x-72 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <a href="#" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Clothing</a>
        <a href="#" class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Footwear</a>
        <a href="#" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Accessories</a>
    </div>

    <!-- men Drop down -->
    <div id="menDropdown" class="hidden pt-3 -translate-y-4 absolute box-border translate-x-96 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <a href="#" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Clothing</a>
        <a href="#" class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Footwear</a>
        <a href="#" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Accessories</a>
    </div>

    <!-- kid Drop down -->
    <div id="kidDropdown" class="hidden pt-3 -translate-y-4 absolute box-border translate-x-96 ml-16 rounded-b-lg bg-gray-800 shadow-xl flex w-min flex-col ">
        <a href="#" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Clothing</a>
        <a href="#" class="px-5      font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Footwear</a>
        <a href="#" class="px-5 my-2 font-bold text-sm text-white hover:text-gray-400 cursor-pointer">Accessories</a>
    </div>



</body>

</html>