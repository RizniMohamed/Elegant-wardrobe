<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Elegant wardrobe</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .scrollbar::-webkit-scrollbar {
            width: 5px;
        }

        .scrollbar::-webkit-scrollbar-track {
            background: white;
        }

        .scrollbar::-webkit-scrollbar-thumb {
            background: lightblue;
        }
    </style>


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

    <?php require_once "./components/footer.php" ?>


    <!-- Page router  -->
    <script>
        showHome();
        if (localStorage.getItem("women") == "block") showWomen();
        if (localStorage.getItem("cart") == "block") showCart();
        if (localStorage.getItem("order") == "block") showOrder();
        if (localStorage.getItem("men") == "block") showMen();
        if (localStorage.getItem("kid") == "block") showKid();
        if (localStorage.getItem("aboutUs") == "block") showAboutUs();
        if (localStorage.getItem("pp") == "block") showPP();
        if (localStorage.getItem("tc") == "block") showTC();
        if (localStorage.getItem("returnPolicy") == "block") showReturnPolicy();
        if (localStorage.getItem("admin") == "block") showAdmin();

        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>