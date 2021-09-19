<?php
    include_once('./common.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Discotech | Login</title>
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

    <section class="py-5 container text-center" id="login">
        <div class="row g-5">
            <form>
                <div class="row g-3">
                    <div class="col-lg-4 offset-lg-4">
                        <h1 style="color: #571f70">Login</h1>
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <input type="email" style="color: #571f70" class="form-control" id="email" placeholder="e-mail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <input type="password" class="form-control" id="password" placeholder="password">
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                    <form><button formaction="./homepage-login.php" type="submit" style="border-color: #571f70; background-color: #571f70; color: white"
                            class="btn btn-primary btn-lg">Login</button></form>
                    </div>
                </div>
            </form>
            <div class="col-lg-4 offset-lg-4">
                <p> Are you a new custumer? </p>
                <a class="btn btn-primary btn-lg "
                    style="border-color: #571f70; background-color: #571f70; color: white" href="./signup.php"
                    role="button"> Sign up</a>
            </div>
        </div>
    </section>
    <?php draw_footer(); ?>

</html>