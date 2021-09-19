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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous" defer></script>
    <meta charset="UTF-8">
</head>
<body>
    <?php draw_header(); ?> 
    <div class="py-5 container">
        <div class="row">
            <div class="col-lg-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link active" aria-current="page" href="./myprofile.php">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./preferences.php">Preferences</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./account_data.php">Account Data</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link " href="./myprofile_payment_method.php" >Payment Method</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./myprofile_inventory.php">
                        Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./myprofile_my_orders.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                        </svg>
                        My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./myprofile_new_return.php">New Return</a>
                    </li>
                </ul>
                <div class="col">
                <br></br>
                <br></br>
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary btn-lg">Logout </button>
                </div>
            </div>
            <div class="col-lg-10">
            <h3>My Orders</h3>
                <br></br>
                <div class="card" style="border-color: #571f70; background-color: #d9aded; color: 571f70" >
                    <div class="card-body">
                        <div class="card" style="border-color: #571f70">
                            <div class="card-header" style="border-color: #571f70; background-color:#f3defc">20 Feb 2020 23:09:54 Order NO. GSHMA500J00F07</div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-auto">
                                        <img src="./images/bohemian_rhapsody.png" width="50" height="50" alt="Profile Picture"></a>
                                        <p>3 items</p>
                                    </div>
                                    <div class="col">
                                        <p>42,97€</p>                            
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button style="border-color: #571f70; background-color: #571f70; color: white" class="btn btn-primary" type="submit">Return Item</button>
                                        </div>     
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Track</a>  
                                        </div>  
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Repurchase</a>  
                                        </div>                       
                                    </div>

                                    <div class="col-auto">
                                        <h3>Shipped</h3>
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Order Details</a>  
                                        </div>   
                                    </div>   
                                    <div class="col">
                                        <button style="border-color: #571f70; background-color: #571f70; color: white" class="btn btn-primary" type="submit">My Review</button>           
                                    </div>                                 
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #571f70">
                            <div class="card-header" style="border-color: #571f70; background-color:#f3defc">22 Dec 2020 16:01:12 Order NO. GSHM9200U00H23</div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-auto">
                                        <img src="./images/u2_joshua.png" width="50" height="50" alt="Profile Picture"></a>
                                        <p>3 items</p>
                                    </div>
                                    <div class="col">
                                        <p>47,97€</p>                            
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button style="border-color: #571f70; background-color: #571f70; color: white" class="btn btn-primary" type="submit">Return Item</button>
                                        </div>     
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Track</a>  
                                        </div>  
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Repurchase</a>  
                                        </div>                       
                                    </div>

                                    <div class="col-auto">
                                        <h3>Unpaid</h3>
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Order Details</a>  
                                        </div>   
                                    </div>   
                                    <div class="col">
                                        <button style="border-color: #571f70; background-color: #571f70; color: white" class="btn btn-primary" type="submit">My Review</button>           
                                    </div>                                 
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-color: #571f70">
                            <div class="card-header" style="border-color: #571f70; background-color:#f3defc">15 Sep 2020 22:38:24 Order NO. GSHM7300U00F07</div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-auto">
                                        <img src="./images/ed_divide.jpg" width="50" height="50" alt="Profile Picture"></a>
                                        <p>3 items</p>
                                    </div>
                                    <div class="col">
                                        <p>49,97€</p>                            
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button style="border-color: #571f70; background-color: #571f70; color: white" class="btn btn-primary" type="submit">Return Item</button>
                                        </div>     
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Track</a>  
                                        </div>  
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Repurchase</a>  
                                        </div>                       
                                    </div>

                                    <div class="col-auto">
                                        <h3>Delivered</h3>
                                        <div>
                                            <a style="color: #571f70" href="#" class="link-primary">Order Details</a>  
                                        </div>   
                                    </div>   
                                    <div class="col">
                                        <button style="border-color: #571f70; background-color: #571f70; color: white" class="btn btn-primary" type="submit">My Review</button>           
                                    </div>                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="AddItem" tabindex="-1" aria-labelledby="AddNewItem" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddNewItem">Add New Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Select an option </label>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">                                
                                        <option selected>Instrument</option>
                                        <option value="1">Vynil</option>
                                        <option value="2">Disc</option>
                                        <option value="3">Accessories</option>
                                    </select>                                
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Description </label>
                                    <input type="text" class="form-control" id="brand" placeholder="10 years old guitar">
                                </div>
                            </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary">ADD</button>
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
                            <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary">DELETE</button>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <?php draw_footer(); ?> 
</html>

