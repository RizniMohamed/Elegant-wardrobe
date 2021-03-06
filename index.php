<?php
require_once "./PHP/config.php";
session_start();
if (!isset($_POST['txtsearch'])) $_POST['txtsearch'] = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Elegant wardrobe</title>
    <link rel="icon" href="./Resource/logo.png" class="rounded-full">

    <!-- Tailwind css -->
    <script src="./JS/tailwind/01.js"></script>
    <link rel="stylesheet" href="./Style/import/01.css" />
    <link rel="stylesheet" href="./Style/import/02.css" />
    <link rel="stylesheet" href="./Style/import/03.css" />
    <script src="./JS/tailwind/02.js"></script>

    <!-- fontawsome icon (internet required) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./Style/icons/js/all.min.js"></script>

    <!-- css  -->
    <link rel="stylesheet" href="./Style/main.css">

    <!-- Js for do operations with pre defiend functions -->
    <script src="./JS/cart.js"></script>
    <script src="./JS/login.js"></script>
    <script src="./JS/admin.js"></script>
    <script src="./JS/register.js"></script>
    <script src="./JS/profile.js"></script>
    <script src="./JS/addProduct.js"></script>


</head>

<body class="scrollbar">


    <?php require_once "./components/header.php" ?>

    <!-- Pages -->
    <div id="homePage" class="hidden">
        <?php require_once "./pages/home.php" ?>
    </div>
    <div id="orderPage" class="hidden">
        <?php require_once "./pages/order.php" ?>
    </div>
    <div id="cartPage" class="hidden">
        <?php require_once "./pages/cart.php" ?>
    </div>
    <div id="womenPage" class="hidden">
        <?php require_once "./pages/women.php" ?>
    </div>
    <div id="menPage" class="hidden">
        <?php require_once "./pages/men.php" ?>
    </div>
    <div id="kidPage" class="hidden">
        <?php require_once "./pages/kid.php" ?>
    </div>
    <div id="aboutUsPage" class="hidden">
        <?php require_once "./pages/aboutUs.php" ?>
    </div>
    <div id="returnPolicy" class="hidden">
        <?php require_once "./pages/returnPolicy.php" ?>
    </div>
    <div id="tcPage" class="hidden">
        <?php require_once "./pages/tc.php" ?>
    </div>
    <div id="ppPage" class="hidden">
        <?php require_once "./pages/pp.php" ?>
    </div>
    <div id="adminPage" class="hidden">
        <?php require_once "./pages/admin.php" ?>
    </div>
    <div id="searchPage" class="hidden">
        <?php require_once "./pages/search.php" ?>
    </div>

    <!-- Components -->
    <div id="loginModel" class="hidden">
        <?php require_once "./components/login.php" ?>
    </div>
    <div id="registerModel" class="hidden">
        <?php require_once "./components/register.php" ?>
    </div>
    <div id="creditCardModel" class="hidden">
        <?php require_once "./components/creditCard.php" ?>
    </div>
    <div id="deleteModel" class="hidden">
        <?php require_once "./components/delete.php" ?>
    </div>
    <div id="successModel" class="hidden">
        <?php require_once "./components/success.php" ?>
    </div>
    <div id="errorModel" class="hidden">
        <?php require_once "./components/error.php" ?>
    </div>
    <div id="contactUsModel" class="hidden">
        <?php require_once "./components/contactUs.php" ?>
    </div>
    <div id="profileModel" class="hidden">
        <?php require_once "./components/profile.php" ?>
    </div>
    <div id="addProductModel" class="hidden">
        <?php require_once "./components/productAdd.php" ?>
    </div>

    <?php require_once "./components/footer.php" ?>


    <!-- Js for do operations with ids -->
    <script src="./JS/login.js"></script>
    <script src="./JS/admin.js"></script>
    <script src="./JS/main.js"></script>
    <script src="./JS/register.js"></script>
    <script src="./JS/profile.js"></script>
    <script src="./JS/cart.js"></script>
    <script src="./JS/addProduct.js"></script>

    <script>
        router();
        task_status();

        //task process
        function task_status() {
            if (sessionStorage.getItem("task") == "register") registerStatus();
            if (sessionStorage.getItem("task") == "profile") profileStatus();
            if (sessionStorage.getItem("task") == "cart") cartStatus();
            if (sessionStorage.getItem("task") == "admin") adminStatus();
            if (sessionStorage.getItem("task") == "addProduct") addProductStatus();
        }
    </script>
</body>

</html>