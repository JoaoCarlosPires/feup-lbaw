<?php
include_once('./common.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Discotech | Checkout</title>
    <!--CSS Bootstrap-->
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/checkout.css">
    <link href="./css/style2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"
            defer></script>
    <meta charset="UTF-8">

</head>

<body>
<?php draw_header(); ?>

<div class="container px-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-5">
            <h4 class="heading">Shopping Basket</h4>
        </div>
        <div class="col-7">
            <div class="row text-right">
                <div class="col-4">
                    <h6 class="mt-2">Type</h6>
                </div>
                <div class="col-4">
                    <h6 class="mt-2">Quantity</h6>
                </div>
                <div class="col-4">
                    <h6 class="mt-2">Price</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center border-top">
        <div class="col-5">
            <div class="row d-flex">
                <div class="book"> <img src="./images/ed_divide.jpg" class="book-img"> </div>
                <div class="my-auto flex-column d-flex pad-left">
                    <h6 class="mob-text">DIVIDE</h6>
                    <p class="mob-text">Ed Sheeran</p>
                </div>
            </div>
        </div>
        <div class="my-auto col-7">
            <div class="row text-right">
                <div class="col-4">
                    <p class="mob-text">Disc</p>
                </div>
                <div class="col-4">
                    <div class="row d-flex justify-content-end px-3">
                        <input type="number" class="mb-0" id="cnt1" value="1"></input>
                    </div>
                </div>
                <div class="col-4">
                    <h6 class="mob-text">9.99€</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center border-top">
        <div class="col-5">
            <div class="row d-flex">
                <div class="book"> <img src="./images/u2_pop.png" class="book-img"> </div>
                <div class="my-auto flex-column d-flex pad-left">
                    <h6 class="mob-text">POP</h6>
                    <p class="mob-text">U2</p>
                </div>
            </div>
        </div>
        <div class="my-auto col-7">
            <div class="row text-right">
                <div class="col-4">
                    <p class="mob-text">Vinyl</p>
                </div>
                <div class="col-4">
                    <div class="row d-flex justify-content-end px-3">
                        <input type="number" class="mb-0" id="cnt1" value="1"></input>
                    </div>
                </div>
                <div class="col-4">
                    <h6 class="mob-text">13.50€</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-7 mt-2">

                    </div>
                    <div class="col-lg-4 mt-2">
                        <div class="row d-flex justify-content-between px-4">
                            <p class="mb-1 text-left">Subtotal</p>
                            <h6 class="mb-1 text-right">23.49€</h6>
                        </div>
                        <div class="row d-flex justify-content-between px-4">
                            <p class="mb-1 text-left">Shipping</p>
                            <h6 class="mb-1 text-right">2.99€</h6>
                        </div>
                        <div class="row d-flex justify-content-between px-4" id="tax">
                            <p class="mb-1 text-left">Total (tax included)</p>
                            <h6 class="mb-1 text-right">26.48€</h6>
                        </div> <form><button formaction="./track-order.php" style="background-color: #571f70; border-color: #571f70"
                                             class="btn-block btn-blue"> <span> <span id="checkout">Checkout</span> <span
                                        id="check-amt"></span> </span> </button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php draw_footer(); ?>

</html>
