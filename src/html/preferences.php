<?php
    include_once('./common.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/footer.css">
  <link href="./css/style2.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.google.com/specimen/Montserrat?preview.text_type=custom">

  <title>Discotech | Profile</title>
  <!--CSS Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous" defer>
  </script>

</head>

<body>
  <?php draw_header(); ?>


  <div class="py-5 container">
    <div class="row">
      <div class="col-lg-2">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a style="color: #571f70" class="nav-link active" aria-current="page" href="./myprofile.php">Personal
              Information</a>
          </li>
          <li class="nav-item">
            <a style="color: #571f70" class="nav-link" href="./preferences.php"><svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
              </svg>Preferences</a>
          </li>
          <li class="nav-item">
            <a style="color: #571f70" class="nav-link" href="./account_data.php">Account Data</a>
          </li>
          <li class="nav-item">
            <a style="color: #571f70" class="nav-link " href="./myprofile_payment_method.php">Payment Method</a>
          </li>
          <li class="nav-item">
            <a style="color: #571f70" class="nav-link" href="./myprofile_inventory.php">Inventory</a>
          </li>
          <li class="nav-item">
            <a style="color: #571f70" class="nav-link" href="./myorders.php">My Orders</a>
          </li>
          <li class="nav-item">
            <a style="color: #571f70" class="nav-link" href="./myprofile_new_return.php">New Return</a>
          </li>
        </ul>
        <div class="col">
          <br></br>
          <br></br>
          <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
            class="btn btn-primary btn-lg">Logout </button>
        </div>
      </div>
      <div class="col-lg-5">
        <h3>Preferences</h3>
        <div class="container-fluid">
        <form>
                        <label for="name" class="form-label">Select Favorite Type </label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">                                
                            <option selected>Discs</option>
                            <option value="1">Vinyl</option>
                            <option value="2">Instruments</option>
                            <option value="3">Accessories</option>
                        </select>  
                        <div class="mb-3">
                            <label for="reason" class="form-label">Tags</label><br>
                            <input type="text" name="tags" value="Pop/Rock"></input>
                        </div>
                    </form>
                    <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                        <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary">SUBMIT</button>
                    </div> 
        </div>
      </div>

    </div>
  </div>


  <?php draw_footer(); ?>

</html>