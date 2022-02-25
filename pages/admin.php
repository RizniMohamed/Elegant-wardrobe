<script>
    function showAdmin() {
        sessionStorage.setItem("currentPage", "admin");
        let model = document.getElementById('adminPage');
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
        hideAboutUs();
        hideSearch();


    }

    function hideAdmin() {
        let model = document.getElementById('adminPage');
        model.classList.replace('block', 'hidden')
    }
</script>

<body>


    <div style="min-height: 31.5vh;" class="m-5 rounded-md p-5">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="flex justify-center">
            <input type="submit" name="btnAdminWomen" class="font-bold text-gray-600 text-2xl mb-5      cursor-pointer hover:text-gray-800" value="Women">
            <input type="submit" name="btnAdminMen" class="font-bold text-gray-600 text-2xl mb-5 mx-5 cursor-pointer hover:text-gray-800" value="Men">
            <input type="submit" name="btnAdminKid" class="font-bold text-gray-600 text-2xl mb-5      cursor-pointer hover:text-gray-800" value="Kid">
        </form>

        <?php

        if (isset($_POST['btnAdminWomen'])) {
            $_POST['btnAdminWomen'] = null;
            require_once "./components/admin/women.php";
        }
        if (isset($_POST['btnAdminMen'])) {
            $_POST['btnAdminMen'] = null;
            require_once "./components/admin/men.php";
        }
        if (isset($_POST['btnAdminKid'])) {
            $_POST['btnAdminKid'] = null;
            require_once "./components/admin/kid.php";
        }

        ?>





    </div>

</body>