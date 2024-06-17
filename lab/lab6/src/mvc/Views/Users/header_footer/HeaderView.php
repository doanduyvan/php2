<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <base href="<?= WEB_ROOT ?>">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Eiser ecommerce</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/css/bootstrap.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/vendors/linericon/style.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/css/themify-icons.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/css/flaticon.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/css/style.css" />
  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/lib/css/responsive.css" />

  <!-- my css -->

  <link rel="stylesheet" href="<?= WEB_ROOT ?>public/css/users.css" />
  <link rel="stylesheet" href="public/css/toast_loading.css">
  <script src="public/js/toast_loading.js"></script>

</head>

<body>

      <!-- toast -->
      <div id="toasts"></div>
    <!-- loading -->
    <div class="loading" id="loading">
        <div class="load">
            <div class="load1">
                <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
                    <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
                    <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
                    <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
                    <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
                </svg>
            </div>
        </div>
    </div>

  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: +01 256 25 235</p>
              <p>email: info@eiser.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                <li>
                  <a href="cart.html">
                    gift card
                  </a>
                </li>
                <li>
                  <a href="tracking.html">
                    track order
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="img/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROOT ?>home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= WEB_ROOT ?>shop" class="nav-link">Shop</a>


                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="<?= WEB_ROOT ?>blog" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>

                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="tracking.html">Tracking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-search" aria-hidden="true"></i>
                    </a>
                  </li>

                <style>
                  .acart{
                    position: relative;
                  }
                  .acart .pcart{
                    position: absolute;
                    width: 20px;
                    height: 20px;
                    top: 15px;
                    right: -12px;
                    background-color: white;
                    box-shadow: 0 0 2px gray;
                    color: #71CD14;
                    border-radius: 50%;
                    font-weight: 600;
                  }
                </style>

                  <li class="nav-item">
                    <a href="shop/cart" class="icons acart">
                     
                      <i class="ti-shopping-cart">
                         <p class="pcart" id="quantityproduct">
                          <?= $_SESSION['cart']['quantity'] ?? "0" ?>
                         </p>
                      </i>

                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="" class="icons">
                      <i class="ti-heart" aria-hidden="true"></i>
                    </a>
                  </li>

                  <li class="nav-item dv_account">

                    <a href="" class="icons">
                      <i class="ti-user" aria-hidden="true"></i>
                    </a>

                    <!-- <a href="auth/signin" class="icons">
                      <i class="ti-user" aria-hidden="true"></i>
                    </a> -->

                    <?php
                    if (isset($_SESSION['account'])) {
                    ?>
                      <div class="div1">
                        <p><?= $_SESSION['account']['name'] ?></p>
                        <a href="auth/signout">Log out</a>
                      </div>
                    <?php
                    } else {
                    ?>
                      <div class="div1">
                        <a href="auth/signin">Sign in</a>
                        <a href="auth/signup">Sign up</a>
                      </div>
                    <?php
                    }
                    ?>




                  </li>

                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->