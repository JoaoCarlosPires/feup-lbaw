<?php
    include_once('./common.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Discotech | Admin</title>
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
    <div class="py-5 container">
        <div class="row">
            <div class="col-lg-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link active" aria-current="page"
                            href="./admin_manage_users.php">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./admin_manage_products.php">Manage
                            Products</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./admin_manage_ratings.php">Manage Ratings</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link " href="./admin_manual_payments.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
                            </svg>
                            Manual Payments</a>
                    </li>
                </ul>
                <div class="col">
                    <br></br>
                    <br></br>
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                        class="btn btn-primary btn-lg">Logout </button>
                </div>
            </div>
            <div class="col-lg-10">
                <h3>Manual Payments</h3>
                <br></br>
                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button style="border-color: #571f70; background-color: #571f70; color: white"
                            class="btn btn-primary" type="submit">Search</button>
                    </form>
                    <br></br>
                </div>
                <div class="card" style="border-color: #571f70; background-color: #d9aded; color: 571f70">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <img src="./images/transparent.png" width="50" height="50" alt="Icon"></a>
                            </div>
                            <div class="col">
                                <label for="purchase_code" class="form-label">Purchase Code </label>
                            </div>
                            <div class="col">
                                <label for="user" class="form-label">User </label>
                            </div>
                            <div class="col">
                                <label for="product" class="form-label">Product </label>
                            </div>
                            <div class="col">
                                <label for="confirm" class="form-label"></label>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>AFGS5647XSJ1</p>
                                    </div>
                                    <div class="col">
                                        <p>john_cena</p>
                                    </div>
                                    <div class="col">
                                        <p>Queen - Bohemian Rhapsosy</p>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button type="button" class="btn btn-success">CONFIRM</button>
                                            <button type="button" class="btn btn-danger">DENY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php draw_footer(); ?>

</html>