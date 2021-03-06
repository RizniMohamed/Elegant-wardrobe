<script>
    function showHome() {
        let model = document.getElementById('homePage');
        model.classList.replace('hidden', 'block')
    }

    function showHomeOnly() {
        sessionStorage.setItem("currentPage", "home");
        showHome();
        hideCart();
        hideKid();
        hideMen();
        hideOrder();
        hideWomen();
        hideAboutUs();
        hideReturnPolicy();
        hideTC();
        hidePP();
        hideAdmin();
        hideSearch();

    }

    function hideHome() {
        let model = document.getElementById('homePage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>

    <!-- Carousal -->
    <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-light relative" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="1" aria-label="Slide 1"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner relative w-full overflow-hidden">

            <div class="carousel-item active relative float-left w-full">
                <img src="../Resource/banner1.jpg" class=" block w-full" alt="Camera" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="../Resource/banner2.jpg" class=" block w-full" alt="Camera" />
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat animate-pulse" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat animate-pulse" aria-hidden="true"></span>
            <span class="visually-hidden ">Next</span>
        </button>

    </div>

    <!-- Categories  -->
    <div class="flex flex-col items-center ">
        <h1 class="font-bold text-4xl my-10">Categories</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="flex">
            <button type="submit" name="btnWomenClothing">
                <img onclick="showWomen();" src="../Resource/cat_women.jpg" class="w-96 h-52 hover:scale-110 transition duration-700 cursor-pointer" alt="">
            </button>
            <button type="submit" name="btnMenClothing">
                <img onclick="showMen();" src="../Resource/cat_men.jpg" class="w-96 h-52 hover:scale-110 transition duration-700 mx-7 cursor-pointer" alt="">
            </button>
            <button type="submit" name="btnKidClothing">
                <img onclick="showKid();" src="../Resource/cat_kid.jpg" class="w-96 h-52 hover:scale-110 transition duration-700 cursor-pointer" alt="">
            </button>
        </form>

    </div>

</body>