<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <title>Home page</title>
</head>
<!-- body -->

<!-- <body style="background-color: #e7dede;"> -->
<body style="background: url(https://i.pinimg.com/originals/1d/a3/66/1da3663ce1d7d0f6098a31a667e862b4.gif);">
  <style>
    .hover{
        transition: transform 0.2s;
      }
      .hover:hover{
        transform: scale(1.082);
      }
  </style>
  <!-- nav -->
  <!-- <nav class="navbar navbar-dark bg-dark"> -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.htm"><strong>ATN</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.htm">Home Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.facebook.com/hoang.nguyenhuu.7330763/"
              target="_blank">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://btec.fpt.edu.vn/" target="_blank">About Us</a>
          </li>
        </ul>
        <!-- Search, Login, Logout -->
        <form action="search.php" method="POST" class="d-flex">
          <input name="input" required class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button name="search" class="btn btn-outline-danger" type="submit"><b>Search</b></button>
        </form>
        <a style='margin-left: 1%;' href='signin.html' class='btn btn-warning btn-outline-success'>LogIn</a>

      </div>
    </div>
    <!-- end nav -->
  </nav>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="https://kidsland.vn/pub/media/catalog/category/do-choi-mo-hinh.jpg"
          style="height:600px" class="d-block w-100" alt="No photos found">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img
          src="https://d1a9v60rjx2a4v.cloudfront.net/2018/01/21/17_29_29_480_optimus_prime_3d_model_c4d_max_obj_fbx_ma_lwo_3ds_3dm_stl_1878173_o_1.jpg"
          style="height:600px" class="d-block w-100" alt="No photos found">
      </div>
      <div class="carousel-item">
        <img src="http://shiphangchina.com/Media/uploads/me%20va%20be/5a.jpg" class="d-block w-100"
          alt="No photos found" style="height:600px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Container -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <br>
          <div class='col-md-3 hover'>
            <div class='card border-success'>
              <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>MODEL Batman</div>
              <div class='card-body'>
                <p class='card-text'><img src="img/batman.png" class="img-fluid rounded"
                    style="height:13rem; width:100%" /></p>
              </div>
              <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
                <a class='btn btn-warning' href="detail.php">Detail</a>
                <a class='btn btn-primary' href="#">Add to Cart</a>
              </div>
            </div>
          </div>

          <div class='col-md-3 hover'>
            <div class='card border-success'>
              <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>MODEL Ironman</div>
              <div class='card-body'>
                <p class='card-text'><img src="img/ironman.png" class="img-fluid rounded"
                    style="height:13rem; width:100%" /></p>
              </div>
              <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
                <a class='btn btn-warning' href="detail.php">Detail</a>
                <a class='btn btn-primary' href="#">Add to Cart</a>
              </div>
            </div>
          </div>

          <div class='col-md-3 hover'>
            <div class='card border-success'>
              <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>LBX Pantheon</div>
              <div class='card-body'>
                <p class='card-text'><img src="img/lbx pantheon.png" class="img-fluid rounded"
                    style="height:13rem; width:100%" /></p>
              </div>
              <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
                <a class='btn btn-warning' href="detail.php">Detail</a>
                <a class='btn btn-primary' href="#">Add to Cart</a>
              </div>
            </div>
          </div>

          <div class='col-md-3 hover'>
            <div class='card border-success'>
              <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>LBX Hunter</div>
              <div class='card-body'>
                <p class='card-text'><img src="img/lbx hunter.png" class="img-fluid rounded"
                    style="height:13rem; width:100%" /></p>
              </div>
              <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
                <a class='btn btn-warning' href="detail.php">Detail</a>
                <a class='btn btn-primary' href="#">Add to Cart</a>
              </div>
            </div>
          </div>

          <div class='col-md-3 hover'>
            <div class='card border-success'>
              <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>POKEMON WAR</div>
              <div class='card-body'>
                <p class='card-text'><img src="img/pokemon1.png" class="img-fluid rounded"
                    style="height:13rem; width:100%" /></p>
              </div>
              <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
                <a class='btn btn-warning' href="detail.php">Detail</a>
                <a class='btn btn-primary' href="#">Add to Cart</a>
              </div>
            </div>
          </div>

          <div class='col-md-3 hover'>
            <div class='card border-success'>
              <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>Red RaceCar</div>
              <div class='card-body'>
                <p class='card-text'><img src="img/oto đỏ.jpg" class="img-fluid rounded"
                    style="height:13rem; width:100%" /></p>
              </div>
              <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
                <a class='btn btn-warning' href="detail.php">Detail</a>
                <a class='btn btn-primary' href="#">Add to Cart</a>
              </div>
            </div>
          </div>

          <div class='col-md-3 hover'>
            <div class='card border-success'>
              <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>Bugatti Car</div>
              <div class='card-body'>
                <p class='card-text'><img src="img/sieu xe bugatti.png" class="img-fluid rounded"
                    style="height:13rem; width:100%" /></p>
              </div>
              <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
                <a class='btn btn-warning' href="detail.php">Detail</a>
                <a class='btn btn-primary' href="#">Add to Cart</a>
              </div>
            </div>
          </div>

          <div class='col-md-3 hover'>
            <div class='card border-success'>
              <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>LBX Perseus</div>
              <div class='card-body'>
                <p class='card-text'><img src="img/lbx perseus.png" class="img-fluid rounded"
                    style="height:13rem; width:100%" /></p>
              </div>
              <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
                <a class='btn btn-warning' href="detail.php">Detail</a>
                <a class='btn btn-primary' href="#">Add to Cart</a>
              </div>
            </div>
          </div>

        </div> <br>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div style="height: 10vh;" class="content d-flex align-items-center bg-light">
    <h2 class="w-100 text-center"></h2>
  </div>

  <footer class="footer-48201">

    <div class="container">
      <div class="row">
        <div class="col-md-4 pr-md-5">
          <a href="index.htm" class="footer-site-logo d-block mb-4">ATN</a>
          <p>ATN is a Vietnamese company that is selling toys to teenagers in many provinces across Vietnam.
            The company has sales of over $500,000/year. Currently, each shop has its own database to store items
            deals exclusively for that shop. Each store must send sales data to the management monthly and
            It takes a lot of time for management to compile data collected from all stores.
            In addition, the board cannot view real-time stock information updates.</p>
        </div>
        <div class="col-md">
          <ul class="list-unstyled nav-links">
            <li><a href="index.htm">Home</a></li>
            <li><a href="https://btec.fpt.edu.vn/">About Us</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="https://www.facebook.com/hoang.nguyenhuu.7330763/">Contact</a></li>
          </ul>
        </div>
        <div class="col-md">
          <ul class="list-unstyled nav-links">
            <li><a href="#">Clients</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Journal</a></li>
          </ul>
        </div>
        <div class="col-md">
          <ul class="list-unstyled nav-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Partners</a></li>
          </ul>
        </div>
        <div class="col-md text-md-center">
          <ul class="social list-unstyled">
            <li><a href="#"><span class="icon-instagram"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="https://www.facebook.com/hoang.nguyenhuu.7330763/"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-pinterest"></span></a></li>
            <li><a href="#"><span class="icon-dribbble"></span></a></li>
          </ul>
          <p class=""><a href="https://btec.fpt.edu.vn/" class="btn btn-tertiary">Contact Us</a></p>
        </div>
      </div>

      <div class="row ">
        <div class="col-12 text-center">
          <div class="copyright mt-5 pt-5">
            <p><small>&copy; 2021-2022 All Rights Reserved.</small></p>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>

</html>