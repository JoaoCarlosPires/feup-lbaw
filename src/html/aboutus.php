<?php
    include_once('./common.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Discotech | About Us</title>
    <!--CSS Bootstrap-->
    <link rel="stylesheet" href="./css/footer.css">
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
    <section class="py-5 container text-center" id="aboutUs">
        <div class="row g-5">
            <div class="col-lg-4">
                <img src="./images/vinyl.png" class="img-fluid" alt="Vinyl disc"></a>
            </div>
            <div class="col-lg-8">
                <h1 style="color: #571f70">About us</h1>
                <p style="color: #571f70" class="fs-2">Discotech is an online shop where you can increase your musical
                    collection, buying discs, in an <b>easy, accessible, safe</b> and <b>customizable</b> way.</p>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="./index.php" role="button"> Return to the homepage</a>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="./catalog.php" role="button"> Go to the Catalog</a>
            </div>
        </div>


    </section>
    <?php draw_footer(); ?>

</html>