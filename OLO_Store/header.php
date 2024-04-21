        <!-- Header -->
        <nav class="navbar navbar-expand-lg  navbar-dark shadow pt-0 pb-0 bg-dark">
            <div class="container d-flex justify-content-between align-items-center">

                <a class="navbar-brand text-success logo h1 align-self-center" href="index.php"> <img width="300px" src="./assets/img/logoo.png" alt=""></a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>   
            </button>

                <div id="templatemo_main_nav">
                    
                    <div class="navbar align-self-center ">
                    <?php if (isset($_SESSION['logged_user'])) :?>
                        <a class="nav-link " href="shop.php"> Catalog </a>
                        <a class="nav-link text-success" href="log_out.php">Log Out</a>
                    <?php else: ?>
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