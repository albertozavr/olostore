<?php

require "bd.php";

if (isset($data['signin'])) {
    $errors = array();
    $showError = True;
    $user = R::findOne('users', 'email = ?', array($data['email']));

    if (trim($data['email']) == '') {
        $errors[] = 'Set Email';
    }
    if (trim($data['password']) == '') {
        $errors[] = 'Set Password';
    }


    if ($user) {
        if (password_verify($data['password'], $user->password)) {
            $_SESSION['logged_user'] = $user;
        } else {
            $errors[] = 'Wrong password';
        }
    } else {
        $errors[] = 'User does not exist';
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
    <nav class="navbar navbar-expand-lg navbar-dark shadow pt-0 pb-0 bg-dark">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php"> <img width="300px" src="./assets/img/logoo.png" alt=""></a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="templatemo_main_nav">

                <div class="navbar align-self-center ">
                    <?php if (isset($_SESSION['logged_user'])) : ?>
                        <a class="nav-link " href="shop.php"> Catalog </a>
                        <a class="navbar-brand text-success logo h2 align-self-center" href="index.php"> Welcome, <?php echo $user->login; ?>!</a>
                        <a class="nav-link text-success" href="log_out.php">Log Out</a>
                    <?php else : ?>
                        <a class="nav-link" href="shop.php"> Catalog </a>
                        <a class="nav-link" href="reg.php"> Sign Up </a>
                        <a class="nav-icon position-top text-decoration-none" href="auth.php">
                            <i class="fa fa-fw fa-user mr-3"></i>

                        </a>
                    <?php endif; ?>

                    <a class="nav-icon position-top text-decoration-none" href="cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down mr-1"></i>
                    </a>


                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-dark" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-u">
        <div class="footer_user bg-gray">
            <div class="bg-gray items">
                <form action="auth.php" method="post">
                    <h1 class="text-success">Авторизация</h1>
                    <input class="search" type="text" name="email" placeholder="email"> <br>
                    <input class="search" type="text" name="password" placeholder="password"> <br>
                    <button class="btn btn-success" type="submit" name="signin"> Войти</button>
                </form>
                <p class="text-light pt-3">
                    <?php if ($showError) {
                        echo showError($errors);
                    } ?></p>
            </div>
        </div>
    </div>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

</body>

</html>