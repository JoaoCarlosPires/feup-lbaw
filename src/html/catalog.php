<?php
    include_once('./common.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Discotech | Catalog</title>
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link href="./css/style2.css" rel="stylesheet">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"
        defer></script>
    <meta charset="UTF-8">
</head>

<body>
    <?php draw_header(); ?>
    <?php draw_nav_bar(); ?>
    <div class="py-5 container">
        <div class="row">
            <div class="col-lg-2">
                <form>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Choose Category">
                            <option selected>Category</option>
                            <option value="1">Vinyls</option>
                            <option value="4">Instruments</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="customRange2" class="form-label">Price</label>
                        <input type="range" class="form-range" min="0" max="1000" id="customRange2">
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">ARTIST/BAND</label>
                        <input type="text" id="artist" class="form-control" placeholder="Coldplay">
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">BRAND</label>
                        <select class="form-select" aria-label="Choose Brand">
                            <option selected>Fender</option>
                            <option value="1">Roland</option>
                            <option value="2">Yamaha</option>
                            <option value="3">Gibson</option>
                            <option value="4">Harman</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">RATING</label>
                        <select class="form-select" aria-label="Choose Rating">
                            <option selected>5 stars</option>
                            <option value="1">4 stars</option>
                            <option value="2">3 stars</option>
                            <option value="3">2 stars</option>
                            <option value="4">1 star</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="release_date" class="form-label">Release Date </label>
                        <input type="text" class="form-control" id="release_date" placeholder="27 February 2021">
                    </div>
                    <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                        <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                            class="btn btn-primary">FILTER</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-10">
                <div class="row row-cols-1 row-cols-md-2  row-cols-lg-4 row-cols-xl-6 g-4">
                    <div class="col">
                        <div class="card">
                            <a href="./product.php"><img src="./images/bohemian_rhapsody.png" class="card-img-top"
                                alt="Bohemian Rhapsody cover"></a>
                            <div class="card-body">
                                <h5 class="card-title">Bohemian Rhapsody</h5>
                                <p class="card-text">Queen album. Greatest hits.</p>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" type="submit">Add item</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <a href="./product.php"><img src="./images/ed_divide.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Ed Sheeran - Divide</h5>
                                <p class="card-text">Ed Sheeran album. Greatest hits.</p>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" disabled type="submit">Out of stock</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <a href="./product.php"><img src="./images/ed_mult.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Ed Sheeran - Multiply</h5>
                                <p class="card-text">Ed Sheeran album. Greatest hits.</p>
                                <button href="#" style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" type="submit">Add item</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <a href="./product.php"><img src="./images/u2_joshua.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">U2 - Joshua Tree</h5>
                                <p class="card-text">U2 album. Greatest hits.</p>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" type="submit">Add item</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <a href="./product.php"><img src="./images/u2_october.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">U2 - October</h5>
                                <p class="card-text">U2 album. Greatest hits.</p>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" type="submit">Add item</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <a href="./product.php"><img src="./images/u2_pop.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">U2 - Pop</h5>
                                <p class="card-text">U2 album. Greatest hits.</p>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" type="submit">Add item</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <a href="./product.php"><img src="./images/u2_rattle.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">U2 - Rattle&Hum</h5>
                                <p class="card-text">U2 album. Greatest hits.</p>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" type="submit">Add item</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <a href="./product.php"><img src="./images/u2_singles.jfif" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">U2 - 18Singles</h5>
                                <p class="card-text">U2 album. Greatest hits.</p>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" type="submit">Add item</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="./product.php"><img src="./images/u2_war.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">U2 - War</h5>
                                <p class="card-text">U2 album. Greatest hits.</p>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    class="btn btn-primary" type="submit">Add item</button>
                                <label for="customRange2" class="form-label">25,00€</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php draw_footer(); ?>
</body>

</html>