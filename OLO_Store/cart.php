<?php

ob_start();
require "bd.php";

if (isset($_GET['game_id']) && !empty($_GET['game_id'])) {
    $current_added_game = get_game_by_id($_GET['game_id']);
    if (!empty($current_added_game)) {
        if (!isset($_SESSION['cart_list'])) {
            $_SESSION['cart_list'][] = $current_added_game;
        }
        $game_check = false;

        if (isset($_SESSION['cart_list'])) {
            foreach ($_SESSION['cart_list'] as $value) {
                if ($value['game_id'] == $current_added_game['game_id']) {
                    $game_check = true;
                }
            }
        }

        if (!$game_check) {
            $_SESSION['cart_list'][] = $current_added_game;
        }
    }
}

if (isset($_GET['delete_game_id']) && isset($_SESSION['cart_list'])) {
    if (isset($_SESSION['cart_list'])) {
        foreach ($_SESSION['cart_list'] as $key => $value) {
            if ($value['game_id'] == $_GET['delete_game_id']) {
                unset($_SESSION['cart_list'][$key]);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>OLO store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- 
    Load fonts style after rendering the layout styles  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">


</head>

<body class="bg-black">
    <!-- Header -->
    <?php include("header.php") ?>
    <!-- Close Header -->

    <!-- Start Content -->
    <section class="container py-5">
        <div class="col-lg-12 ">
            <p class="h2 align-self-center text-success">Корзина </p>
            <div class="row">
            <?php
            if (isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0) : ?>
                <?php
                foreach ($_SESSION['cart_list'] as $game) : ?>
                    <div class="col-md-4 ">
                        <div class="card mb-4 product-wap">
                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="<?php echo $game['link'] ?>.php" class="h2 text-success text-decoration-none text-dark"><?php echo $game['title']; ?></a>
                                    <div class="text-muted"><?php echo $game['price']; ?> ₽</div>
                                </div>
                                <div class="col d-grid">
                                    <a class="h3 text-decoration-none text-white btn btn-red" href="cart.php?delete_game_id=<?php echo $game['game_id']; ?>">Удалить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            else : ?>
                <p class="text-light">'Корзина пустая'</p>
            <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- End Content -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>
</html>