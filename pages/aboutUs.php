<script>
    function showAboutUs() {
        localStorage.setItem("aboutUs", "block");
        let model = document.getElementById('aboutUsPage');
        model.classList.replace('hidden', 'block')
        hideHome();
        hideKid();
        hideMen();
        hideOrder();
        hideWomen();
        hideCart();
        hideReturnPolicy();
        hideTC();
        hidePP();

    }

    function hideAboutUs() {
        localStorage.setItem("aboutUs", "hidden");
        let model = document.getElementById('aboutUsPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>


    <div class="flex flex-col justify-center m-10 bg-gray-300 p-5 rounded-lg">

        <h1 class="font-bold text-lg mb-5">About Us</h1>
        <p class="text-justify font-bold">
            Elegant wardrobe – Sri Lanka’s biggest fashion chain offers a wide range of clothes and accessories for Men, Women and Kids. The retail store houses a range of Homeware and Lifestyle products to compliment a comprehensive family shopping experience for all our customers. Our showrooms are located in strategic cities across the Island, in addition to our head office which is located in Dehiwela. <br><br>



            Elegant wardrobe has been growing from strength to strength over the last 29 years with a team of 1800 people serving millions of customers every year. The retail chain takes pride in its Sri Lankan roots but offers a world-class retail experience that drives customer loyalty while simultaneously setting new benchmarks in customer-centricity to take the art of retailing to a new level.
        </p>


    </div>

</body>