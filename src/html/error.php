<?php
    include_once('./common.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link href="./css/style2.css" rel="stylesheet">
    <title>Discotech | Error</title>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"
        defer></script>
</head>

<body>
    <?php draw_header(); ?>
    <section class="py-5 container text-center" id="errorMessage">
        <div class="row g-5">
            <div class="col-lg-8 offset-lg-2">
                <h1 style="color: #571f70">Page not found</h1>
                <h2 style="color: #571f70">The page you are looking for is not currently available, we are sorry for the
                    inconvenience.</h2>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="./index.php" role="button"> Return to the homepage</a>
            </div>
        </div>
    </section>
    <?php draw_footer(); ?>

</html>