<?php

/**
 * Draws header for all pages
 */
function draw_header()
{ ?>
    <div id="page-container">
        <div id="content-wrap">
            <header style="background-color: #571f70" class="card-header">
                <nav class="navbar navbar-expand-md">
                    <div class="navbar w-100 order-1 order-md-0 ">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./index.php"><img src="./images/logo.png" width="150" height="25" alt="Home Page"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar w-100 order-3 ">
                        <ul class="navbar-nav ms-auto">
                            <li><input type="text" placeholder="Search.."></li>
                            <li class="nav-item dropdown">
                                <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./images/profile.png" width="25" height="25" alt="Profile">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="./login.php">Login</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="./signup.php">Signup</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./preferences.php"><img src="./images/favourites.png" width="25" height="25" alt="Favourites"></a>
                            </li>
                            <li class="nav-item">
                                <div class="my_cart_wrapper">
                                    <div class="my_cart_button">
                                        <img src="./images/mycart.png" width="25" height="25" alt="" class="img-responsive">

                                    </div>
                                    <div class="my_cart_popup">
                                        <div class="my_cart_item clearfix">
                                            <figure>
                                                <img src="" alt="" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">
                                                    <img src="./images/ed_divide.jpg" width="50" height="50" alt="" class="img-responsive"> ED SHEERAN - DIVIDE
                                                </div>
                                                <div class="txt2">1 x 9.99€</div>
                                            </div>
                                        </div>
                                        <div class="my_cart_item clearfix">
                                            <figure>
                                                <img src="" alt="" class="img-responsive">
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">
                                                    <img src="./images/u2_pop.png" width="50" height="50" alt="" class="img-responsive"> U2 - POP</a>
                                                </div>
                                                <div class="txt2">1 x 13.50€</div>
                                            </div>
                                        </div>
                                        <div class="my_cart_shipping clearfix">
                                            <div class="left">Shipping</div>
                                            <div class="right">2.99€</div>
                                        </div>
                                        <div class="my_cart_subtotal clearfix">
                                            <div class="left">Total</div>
                                            <div class="right">26.48€</div>
                                        </div>
                                        <a href="./checkout.php" class="my_cart_check_out">Check Out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>




            </header>

        <?php }

    function draw_header2()
    { ?>
            <div id="page-container">
                <div id="content-wrap">
                    <header style="background-color: #571f70" class="card-header">
                        <nav class="navbar navbar-expand-md">
                            <div class="navbar w-100 order-1 order-md-0 ">
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./index.php"><img src="./images/logo.png" width="150" height="25" alt="Home Page"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar w-100 order-3 ">
                                <ul class="navbar-nav ms-auto">

                                    <li><input type="text" placeholder="Search.."></li>
                                    <li class="nav-item dropdown">
                                        <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="./images/profile.png" width="25" height="25" alt="Profile">
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="./myprofile.php">My Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="./index.php">Logout</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="./preferences.php"><img src="./images/favourites.png" width="25" height="25" alt="Favourites"></a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="my_cart_wrapper">
                                            <div class="my_cart_button">
                                                <img src="./images/mycart.png" width="25" height="25" alt="" class="img-responsive">

                                            </div>
                                            <div class="my_cart_popup">
                                                <div class="my_cart_item clearfix">
                                                    <figure>
                                                        <img src="" alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">
                                                            <img src="./images/ed_divide.jpg" width="50" height="50" alt="" class="img-responsive">ED SHEERAN - DIVIDE
                                                        </div>
                                                        <div class="txt2">1 x 9.99€</div>
                                                    </div>
                                                </div>
                                                <div class="my_cart_item clearfix">
                                                    <figure>
                                                        <img src="" alt="" class="img-responsive">
                                                    </figure>
                                                    <div class="caption">
                                                        <div class="txt1">
                                                            <img src="./images/u2_pop.png" width="50" height="50" alt="" class="img-responsive">U2 - POP</a>
                                                        </div>
                                                        <div class="txt2">1 x 13.50€</div>
                                                    </div>
                                                </div>
                                                <div class="my_cart_shipping clearfix">
                                                    <div class="left">Shipping</div>
                                                    <div class="right">2.99€</div>
                                                </div>
                                                <div class="my_cart_subtotal clearfix">
                                                    <div class="left">Total</div>
                                                    <div class="right">26.48€</div>
                                                </div>
                                                <a href="./checkout.php" class="my_cart_check_out">Check Out</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>




                    </header>

                <?php }

            /**
             * Draws nav bar for all pages
             */
            function draw_nav_bar()
            { ?>
                    <nav class="navbar navbar-expand-md">
                        <div style="padding-top: -100px; background-color: #bc72e3" class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link  dropdown-toggle" href="./catalog.php" data-toggle="dropdown">Vinyl </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./catalog.php">Rock/Pop</a></li>
                                            <li><a class="dropdown-item" href="./catalog.php"> Jazz </a></li>
                                            <li><a class="dropdown-item" href="./catalog.php"> Hip-hop </a></li>
                                            <li><a class="dropdown-item" href="./catalog.php"> Eletronic </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link  dropdown-toggle" href="./catalog.php" data-toggle="dropdown">Discs </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./catalog.php">Rock/Pop</a></li>
                                            <li><a class="dropdown-item" href="./catalog.php"> Jazz </a></li>
                                            <li><a class="dropdown-item" href="./catalog.php"> Hip-hop </a></li>
                                            <li><a class="dropdown-item" href="./catalog.php"> Eletronic </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link  dropdown-toggle" href="./catalog.php" data-toggle="dropdown">Instruments
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./catalog.php">Flutes</a></li>
                                            <li><a class="dropdown-item" href="./catalog.php"> Guitar </a></li>
                                            <li><a class="dropdown-item" href="./catalog.php"> Drums </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link  dropdown-toggle" href="./catalog.php" data-toggle="dropdown">Accessories
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./catalog.php">Microphone</a></li>
                                            <li><a class="dropdown-item" href="./catalog.php">Headphones </a></li>
                                            <li><a class="dropdown-item" href="./catalog.php">Audio Interface </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="col-lg-4 d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button style="color: white; border-color: transparent" class="btn" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>


                <?php }

            /**
             * Draws footer for all pages
             */
            function draw_footer()
            { ?>
                </div>
                <footer style="position: relative; bottom: 0; width: 100%; height: 2.5rem;  ">
                    <nav style="background-color: #571f70" class="navbar navbar-expand-md">
                        <div class="navbar w-100 order-1 order-md-0">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a style="color: white" class="nav-link" href="#">@2021 Copyright All Rights
                                        Reserved</a>
                                </li>

                            </ul>
                        </div>
                        <div class="mx-auto order-0">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="./index.php"><img src="./images/logo.png" width="150" height="25" alt="Profile"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar w-100 order-3">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a style="color: white" class="nav-link" href="./aboutus.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: white" class="nav-link" href="#">Contacts</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: white" class="nav-link" href="#">Social Media</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </footer>
            </div>
        </div>

    <?php }

    ?>