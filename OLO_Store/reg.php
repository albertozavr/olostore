<?php
require "bd.php";

$data = array();

if (isset($_POST['signup'])) {
    $errors = array();
    $showError = True;

    if (trim($_POST['login']) == '') {
        $errors[] = 'Set Login';
    }
    if (trim($_POST['email']) == '') {
        $errors[] = 'Set Email';
    }
    if (trim($_POST['password']) == '') {
        $errors[] = 'Set Password';
    }
    if (trim($_POST['password']) != trim($_POST['password_2'])) {
        $errors[] = 'Incorrect Password';
    }
    if (R::count('users', 'email = ?', array($_POST['email'])) > 0) {
        $errors[] = 'Existing email';
    }
    if (empty($errors)) {
        $user = R::dispense('users');
        $user->login = $_POST['login'];
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        R::store($user);
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

    </div>
    <div class="container-u">
        <div class="footer_user bg-gray">
            <div class="bg-gray items">
                <form action="reg.php" method="post" >
                    <h1 class="text-success">Регистрация </h1>
                    <input class="search" type="text" name="login" placeholder="login"> <br>
                    <input class="search" type="text" name="email" placeholder="email"> <br>
                    <input class="search" type="text" name="password" placeholder="password"> <br>
                    <input class="search" type="text" name="password_2" placeholder="password confirm"> <br>
                    <button class="btn btn-success" type="submit" name="signup"> Зрегистрироваться</button>
                </form>
                <p class="text-light pt-3">
                    <?php if ($showError) {
                        echo showError($errors);
                    } ?>
                </p>
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