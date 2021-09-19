<!DOCTYPE html>
<html>


<head>
    <?php

    include 'common.php';
    include 'includes.php';
    ?>
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

</head>

<body>
    <?php draw_header(); ?>

    <div class="container mt-5">

        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <img class="photo-album w-20" src="images/1.jpg" alt="Third slide">
            </div>
            <div class="col col-lg-2">
                <h1 id="title">Toxicity</h1>
                <p>S.O.A.D</p>
            </div>
            <div class="col-md-auto">
                <h2 id="order">Order no. #85165486</h2>
                <p id="order-no">Estimated delivery time 28/02-02/03</p>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-column">
        <div class="row">
            <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
            <div class="container-progress ">
                <div class="card-body">
                    <div
                        class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="pe-7s-cart"></i></div>
                            </div>
                            <h4 class="step-title">Confirmed Order</h4>
                        </div>
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="pe-7s-config"></i></div>
                            </div>
                            <h4 class="step-title">Processing Order</h4>
                        </div>
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="pe-7s-medal"></i></div>
                            </div>
                            <h4 class="step-title">Quality Check</h4>
                        </div>
                        <div class="step">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="pe-7s-car"></i></div>
                            </div>
                            <h4 class="step-title">Product in Transit</h4>
                        </div>
                        <div class="step">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="pe-7s-home"></i></div>
                            </div>
                            <h4 class="step-title">Product Delivered</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container  d-flex justify-content-center align-items-center">
            <div class="progress-shipping mb-5">
                <div class="row row-cols-auto mb-2">
                    <div class="col-2">
                        <p id="date">22 Feb 2021</p>
                    </div>
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <h5>Order placed</h5>
                    </div>
                </div>
                <div class="row row-cols-auto mb-2">
                    <div class="col-2">
                        <p id="date">22 Feb 2021</p>
                    </div>
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <h5>Package left the warehouse</h5>
                    </div>
                </div>
                <div class="row row-cols-auto mb-2">
                    <div class="col-2">
                        <p id="date">22 Feb 2021</p>
                    </div>
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <h5>Shipped</h5>
                        <p>Final package sterilisation and inspection completed, package shipped.</p>
                    </div>
                </div>
                <div class="row row-cols-auto mb-2">
                    <div class="col-2">
                        <p id="date">22 Feb 2021</p>
                    </div>
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <h5>Arrived</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php draw_footer(); ?>

</html>