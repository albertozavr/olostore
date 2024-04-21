<?php
require "bd.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>OLO Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Load fonts style after rendering the layout styles  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body class="bg-dark">
    <!-- start header -->
    <?php include("header.php") ?>
    <!-- end header -->

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




    <div id="template-mo-zay-hero-carousel" class="carousel slide " data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="bg-black carousel-inner"> <!-- <div class="bg-black carousel-inner"> -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/goat_banner.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">

                                <h1 class="h1 text-success "><b>Goat Simulator 3</b></h1>
                                <h3 class="h2 text-light"><b>Безумные пасхальные козы в трейлере праздничного обновления</b></h3>
                                <a href="game.php?game_id=1" class="h3 text-decoration-none text-light">
                                Студия Coffee Stain выпустила безумное праздничное обновление Goat Simulator 3 к Пасхе. Теперь мир игры захвачен яйцами, которые привносят в мирный город еще больше сумасшествия.

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/outlast_banner.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success "><b>The outlast : Trials</b></h1>
                                <h3 class="h2 text-light"><b> Это игра из раннего доступа</b></h3>
                                <a href="game.php?game_id=3" class="h3 text-decoration-none text-light">
                                Игры в раннем доступе находятся в разработке и со временем могут существенно измениться. В результате этого во время игры вы можете столкнуться с непредвиденными трудностями или встретить какие-то новые игровые элементы.<br>
                                Вы можете сыграть сейчас, чтобы оценить игру, пока её разрабатывают, или дождаться, когда она примет более завершённую форму.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/GTA_banner.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success "><b>Rockstar здесь!</b></h1>

                                <a href="game.php?game_id=4" class="h3 text-decoration-none text-light">
                                    Мы очень рады официально объявить, <b>что Grand Theft Auto V находится в полной разработке. </b>
                                    Загрузите рабочие столы, фоны, аватары и значки с логотипом Grand Theft Auto V в разделе «Загрузки Rockstar Games».
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Check it out -->
    <section class="bg-black"> <!-- <section class="bg-black "> -->
        <div class="container py-5">
            <div class="row text-center py-3">
                <h1 class="h1 text-light">Рекомендуемое</h1>
            </div>
                <div class="row">
                    <?php
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
    <!-- End Check it out -->


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