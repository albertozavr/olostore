<?php
require "bd.php";
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
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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



    <!-- Start Content -->
    <section class="container py-5 ">
        <div class="row">



            <div class="col-lg-12">
                <p class="h2 align-self-center text-white"> Каталог </p>
                <div class="row">
                    <?php
                    $sql = mysqli_query($conn, 'SELECT * FROM `game`');
                    while ($game = mysqli_fetch_assoc($sql)) {
                    ?>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card mb-4 product-wap">
                                <div class="card h-75 rounded-0">
                                    <img class="card-img-top rounded-1 img-fluid h-100" src="assets/img/<?php print_r($game['image']) ?>.jpg">
                                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white mt-2" href="game.php?game_id=<?php echo $game['game_id'] ?>"><i class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="cart.php?game_id=<?php echo $game['game_id'] ?>"><i class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-2 mx-3">
                                    <a href="<?php echo $game['link'] ?>.php" class="h2 text-success text-decoration-none text-dark"><?php echo $game['title']; ?></a>
                                    <div class="text-muted"><?php echo $game['price']; ?> ₽</div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                    
                </div>

            </div>
        </div>
    </section>
    <!-- End Content -->

    <!-- Start Footer -->
    <?php include("footer.php") ?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>