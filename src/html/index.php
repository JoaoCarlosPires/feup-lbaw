<?php
    include_once('./common.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Discotech | Homepage</title>
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link href="./css/style2.css" rel="stylesheet">
  <!--CSS Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous" defer>
  </script>
</head>

<body>
  <?php draw_header(); ?>
  <?php draw_nav_bar(); ?>

  <section class="py-5 container text-left" id="aboutUs">
    <div class="row g-5">
      <div class="col-lg-4">
        <img src="./images/vinyl.png" class="img-fluid" alt="Vinyl disc"></a>
      </div>
      <div class="col-lg-8">
        <h1 style="color: #571f70">This week's highlights</h1>
        <p style="color: #571f70" class="fs-2">This weeks's highlights are U2 and Ed Sheeran.</p>
        <br></br>
        <br></br>
        <br></br>
        <a href="./catalog.php">
        <button style="border-color: #571f70; background-color: #571f70; color: white" type="button"
          class="btn btn-primary">
          Tell me more!
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
            Add itemBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
            </path>
          </svg>
        </button></a>
      </div>
    </div>

    <br></br>
    <h1 style="color: #571f70" class="text-center">Top Sales</h1>
    <h4 style="color: #571f70" class="text-center">Based on our clients ratings, we present our top sales. </h4>


    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-6 g-4">
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_pop.png" data-holder-rendered="true"></a>
              <div class="card-body">
                <h5>U2 - Pop</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-primary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_joshua.png"></a>
              <div class="card-body">
                <h5>U2 - Joshua Tree</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-primary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_october.jpg"></a>
              <div class="card-body">
                <h5>U2 - October</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-secondary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_rattle.jpg"></a>
              <div class="card-body">
                <h5>U2 - Rattle&Hum</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-secondary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_war.jpg"></a>
              <div class="card-body">
                <h5>U2 - War</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-secondary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_singles.jfif"></a>
              <div class="card-body">
                <h5>U2 - 18Singles</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-secondary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <br></br>
    <h1 style="color: #571f70" class="text-center">Latest arrivals</h1>
    <h4 style="color: #571f70" class="text-center">Based on the last published products, we present our latest arrivals.
    </h4>


    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2  row-cols-lg-4 row-cols-xl-6 g-4">
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_pop.png" data-holder-rendered="true"></a>
              <div class="card-body">
                <h5>U2 - Pop</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-primary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_joshua.png"></a>
              <div class="card-body">
                <h5>U2 - Joshua Tree</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-primary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_october.jpg"></a>
              <div class="card-body">
                <h5>U2 - October</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-secondary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_rattle.jpg"></a>
              <div class="card-body">
                <h5>U2 - Rattle&Hum</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-secondary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_war.jpg"></a>
              <div class="card-body">
                <h5>U2 - War</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-secondary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box-shadow">
            <a href="./product.php"><img class="card-img-top" src="./images/u2_singles.jfif"></a>
              <div class="card-body">
                <h5>U2 - 18Singles</h5>
                <p class="card-text">U2 album. Greatest hits.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" style="border-color: #571f70; background-color: #571f70; color: white"
                      class="btn btn-sm btn-outline-secondary">Add item</button>
                  </div>
                  <small style="color: black" class="text-muted"><b>19,99€</b></small>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <?php draw_footer(); ?>

</html>