<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


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

<body style="background-color: #e7dede;">
  <?php session_start(); ?>
  <!-- nav -->
  <!-- <nav class="navbar navbar-dark bg-dark"> -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><strong>ATN</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.facebook.com/hoang.nguyenhuu.7330763/" target="_blank">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://btec.fpt.edu.vn/" target="_blank">About Us</a>
          </li>
          <!-- Decentralization / Phân quyền admin-->
          <?php if (isset($_SESSION['admin'])) {
            echo ("<li class='nav-item'>
                <a class='nav-link' href='manageProduct.php' tabindex='-1'>Manage products</a>
              </li>");
          } ?>
          <!-- Decentralization / Phân quyền user-->
          <?php if (isset($_SESSION['admin']) or isset($_SESSION['user'])) {
            echo ("<li class='nav-item'>
                <a class='nav-link' href='cart.php'><i class='fas fa-shopping-cart'></i></a>
              </li>");
          }  ?>
        </ul>
        <!-- Search, Login, Logout -->
        <form action="search.php" method="POST" class="d-flex">
          <input name="input" required class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button name="search" class="btn btn-outline-danger" type="submit"><b>Search</b></button>
        </form>
        <?php
        if (isset($_SESSION['user']) or isset($_SESSION['admin'])) {
          echo "<a style='margin-left: 1%;'  href='delete.php' class='btn btn-warning btn-outline-success'>LogOut</a>";
        } else {
          echo "<a style='margin-left: 1%;'  href='signin.php' class='btn btn-warning btn-outline-success'>LogIn</a>";
        }
        ?>
      </div>
    </div>
    <!-- end nav -->
  </nav><br>
  <?php
  //connect
  require_once("connect.php");
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($con, "select *from product where productId = '$id'");
    $fetch = mysqli_fetch_array($result);
  }
  ?>
  <div class="container-fluid">
    <div class="row">
      <!-- left -->
      <div class="col-lg-5">
        <br>
        <div style="text-transform: uppercase;">
          <h4 style="font-weight: bold;">NAME OF PRODUCT: <span style="font-size: 1.17em;"><?php echo ($fetch['productName']) ?></span></h4>
        </div>
        <div>
          <h4><b>DESCRIBE: </b> <br> <span style="font-size: 1rem; font-family:sans-serif;"><?php echo ($fetch['productDes']) ?></span></h4>
        </div>
      </div>
      <!-- right -->
      <div class="col-lg-7">
        <img src="<?php echo ($fetch['productImg']) ?>" alt="" style="width: 100%; height: 660px;"> <br>
        <h5>PRICE: <b><?php echo ($fetch['productPrice']) ?></b></h5>
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
          <a href="#" class="footer-site-logo d-block mb-4">ATN</a>
          <p>ATN is a Vietnamese company that is selling toys to teenagers in many provinces across Vietnam.
            The company has sales of over $500,000/year. Currently, each shop has its own database to store items
            deals exclusively for that shop. Each store must send sales data to the management monthly and
            It takes a lot of time for management to compile data collected from all stores.
            In addition, the board cannot view real-time stock information updates.</p>
        </div>
        <div class="col-md">
          <ul class="list-unstyled nav-links">
            <li><a href="index.php">Home</a></li>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>