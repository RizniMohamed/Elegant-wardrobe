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

    <script>
        showHome();
        if (localStorage.getItem("women") == "block") {
            hideHome();
            hideOrder();
            hideCart();
            showWomen();
        }
        if (localStorage.getItem("cart") == "block") {
            hideHome();
            hideOrder();
            hideWomen();
            showCart();
        }
        if (localStorage.getItem("order") == "block") {
            hideHome();
            hideCart();
            hideWomen();
            showOrder();
        }
    </script>


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

    <?php require_once "./components/footer.php" ?>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>