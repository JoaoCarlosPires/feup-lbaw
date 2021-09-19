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
                        <a style="color: #571f70" class="nav-link" href="./admin_manage_products.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
                            </svg>
                            Manage Products</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./admin_manage_ratings.php">Manage Ratings</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link " href="./admin_manual_payments.php">Manual
                            Payments</a>
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
                <h3>Manage Products</h3>
                <div class="container-fluid">
                    <br></br>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button style="border-color: white; background-color: #571f70; color: white"
                            class="btn btn-primary" type="submit">Search</button>
                        <button style="border-color: white; background-color: #571f70; color: white" type="button"
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add new Product
                        </button>
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
                                <label for="name" class="form-label">Name </label>
                            </div>
                            <div class="col">
                                <label for="role" class="form-label">Type </label>
                            </div>
                            <div class="col">
                                <label for="username" class="form-label">Price </label>
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">Date Added </label>
                            </div>
                            <div class="col">
                                <label for="delete" class="form-label"></label>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
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
                                        <p>Queen - Bohemian Rhapsody</p>
                                    </div>
                                    <div class="col">
                                        <p>CD</p>
                                    </div>
                                    <div class="col">
                                        <p>7,99€</p>
                                    </div>
                                    <div class="col">
                                        <p>15/09/2009</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white"
                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#EditProduct">
                                            <img src="./images/edit.png" width="25" height="25" alt="Edit">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add new product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name </label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Electric Guitar 2020 AD45">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type </label>
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected>Chose type</option>
                                        <option value="1">Vinyls</option>
                                        <option value="2">Discs</option>
                                        <option value="3">Acessories</option>
                                        <option value="4">Instruments</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Brand </label>
                                    <input type="text" class="form-control" id="brand" placeholder="Yamaha">
                                </div>
                                <div class="mb-3">
                                    <label for="release_date" class="form-label">Release Date </label>
                                    <input type="text" class="form-control" id="release_date"
                                        placeholder="27 February 2021">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price </label>
                                    <input type="range" class="form-range" min="0" max="1000" id="customRange2">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                                class="btn btn-primary">ADD</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="EditProduct" tabindex="-1" aria-labelledby="EditProductDetails"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="EditProductDetails">Edit Product Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name </label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Electric Guitar 2020 AD45">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type </label>
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected>Chose type</option>
                                        <option value="1">Vinyls</option>
                                        <option value="2">Discs</option>
                                        <option value="3">Acessories</option>
                                        <option value="4">Instruments</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Brand </label>
                                    <input type="text" class="form-control" id="brand" placeholder="Yamaha">
                                </div>
                                <div class="mb-3">
                                    <label for="release_date" class="form-label">Release Date </label>
                                    <input type="text" class="form-control" id="release_date"
                                        placeholder="27 February 2021">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price </label>
                                    <input type="range" class="form-range" min="0" max="1000" id="customRange2">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                                class="btn btn-primary">UPDATE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="DeleteProduct" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="DeleteProduct">Delete product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this product? This action cannot be undone.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                                class="btn btn-primary">DELETE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php draw_footer(); ?>

</html>