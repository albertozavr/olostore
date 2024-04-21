<?php

ob_start();
require "bd.php";

if (isset($_GET['game_id']) && !empty($_GET['game_id'])) {
    $game = get_game_by_id($_GET['game_id']);
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>OLO store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- 
    Load fonts style after rendering the layout styles  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">


</head>

<body>
    <!-- start header -->
    <?php include("header.php") ?>
    <!-- end header -->

    <!-- Modal -->
    <div class="modal fade bg-gray" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <!-- Open Content -->
        <section class="bg-gray">
            <div class=" container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class=" mb-3">
                            <img src="assets/img/<?php print_r($game['image']) ?>.jpg" class="card-img-top">
                        </div>
                        <div class="row">
                            <iframe width="560" height="315" src="<?php echo ($game['youtube_link']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- col end -->
                    <div class=" col-lg-7 mt-5">
                        <div>
                            <div class=" text-light bg-dark card-body">

                                <h1 class="h1"><?php echo $game['title'] ?></h1>

                                <p class="h2 text-right btn btn-success "><?php echo $game['price'] ?> ₽ </p>
                                <p class="py-2">
                                    <span class="list-inline-item "><strong>Рейтинг: </strong> <?php echo $game['rate'] ?></span>
                                </p>
                                <p class="py-1">
                                    <span class="list-inline-item "><strong>Дата выхода: </strong> <?php echo $game['release_date'] ?></span>
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Разработчик: </h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong><?php
                                                                        $game_developer_id = $game['game_developer_id'];
                                                                        $sql_dev = mysqli_query($conn, "SELECT * FROM `game_developer` WHERE id = " . $game_developer_id);
                                                                        $game_developer = mysqli_fetch_assoc($sql_dev);
                                                                        echo $game_developer['name'] ?></strong></p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h6>Платформа: </h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong><?php echo $game['platform'] ?></strong></p>
                                    </li>
                                </ul>


                                <h6>Описание:</h6>
                                <p><?php echo $game['description'] ?></p>


                                <div class="col d-grid">
                                    <a class="h3 text-decoration-none text-white btn btn-success" href="cart.php?game_id=<?php echo $game['game_id'] ?>">Купить</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Close Content -->

        <section class="bg-black"> <!-- <section class="bg-black "> -->
            <div class="container py-5">
                <div class="row text-center py-3">
                    <h1 class="h1 text-light">Популярное</h1>
                </div>
                <div class="row">
                    <?php
                    $game_id = $game['game_id'];
                    $sql = mysqli_query($conn, 'SELECT * FROM `game`');
                    $count = 0;
                    while (($game = mysqli_fetch_assoc($sql)) && $count < 3) {
                        $count++;
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
        </section>
        <!-- End Article -->

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

        <!-- Start Slider Script -->
        <script src="assets/js/slick.min.js"></script>
        <script>
            $('#carousel-related-product').slick({
                infinite: true,
                arrows: false,
                slidesToShow: 4,
                slidesToScroll: 3,
                dots: true,
                responsive: [{
                    breakpoint: 10,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }]
            });
        </script>
        <!-- End Slider Script -->

</body>

</html>