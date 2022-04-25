<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Minics</title>


  <!-- bootstrap core css -->
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

  <!-- Custom styles for this template -->
  <!-- <link href="css/style.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- responsive style -->
  <!-- <link href="css/responsive.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : demo@gmail.com
                </span>
              </a>
            </div>
            <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
            <div class="user_option_box">
              <a href="" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  My Account
                </span>
              </a>
              <a href="" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Cart
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index">
              <span>
                Minics
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ url('/index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product">Products</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="why">Why Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial">Testimonial</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  @yield('content')

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              <a href="" class="navbar-brand">
                <span>
                  Minics
                </span>
              </a>
            </h5>
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              Address
            </p>
            <p>
              <i class="fa fa-phone" aria-hidden="true"></i>
              +01 1234567890
            </p>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              demo@gmail.com
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              Eligendi sunt, provident, debitis nemo, facilis cupiditate velit libero dolorum aperiam enim nulla iste maxime corrupti ad illo libero minus.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="index">
                  Home
                </a>
              </li>
              <li>
                <a href="about">
                  About
                </a>
              </li>
              <li>
                <a href="product">
                  Products
                </a>
              </li>
              <li>
                <a href="why">
                  Why Us
                </a>
              </li>
              <li>
                <a href="testimonial">
                  Testimonial
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <!-- custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <script>
    const all = document.getElementById('all');
    const show = document.getElementById('productShow');
    const phantrang = document.getElementById('phantrang');
    <?php
    foreach ($product_type as $value) {
    ?>
      const type<?php echo ($value['id']) ?> = document.getElementById('type<?php echo ($value['id']) ?>');
    <?php
    }
    foreach ($product_type as $value) {
    ?>
      type<?php echo ($value['id']) ?>.addEventListener("click", () => {
        if (!type<?php echo ($value['id']) ?>.classList.contains('active')) {
          if (all.classList.contains('active')) {
            all.classList.remove('active');
          }
          <?php
          foreach ($product_type as $valuee) {
          ?>
            if (type<?php echo ($valuee['id']) ?>.classList.contains('active')) {
              type<?php echo ($valuee['id']) ?>.classList.remove('active');
            }
          <?php
          }
          ?>
          type<?php echo ($value['id']) ?>.classList.add('active');
          <?php
          $productsShow = array();
          foreach ($product as $prod) {
            if ($prod['type_id'] == $value['id']) {
              array_push($productsShow, $prod);
            }
          }
          ?>
          show.innerHTML = `      <?php
                                  foreach ($productsShow as $pro) {
                                    if ($pro['type_id'] == $value['id']) {
                                  ?>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <?php
                                      if ($pro->discount->active != 0) {
              ?>
                <div class="product-label">
                  <span class="sale">-<?php echo ($pro->discount->values * 100) ?>%</span>
                </div>
              <?php
                                      }
              ?>
              <div style="position: absolute;"> <img src="http://127.0.0.1:8000/images/<?php echo ($pro['image']) ?>" alt="">
                <!-- <img src="{{ asset('images/<?php echo ($pro['image']) ?>') }}" alt=""> -->
              </div>
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                <?php echo $pro['name'] ?>
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span><?php echo (number_format($pro['price'])) ?>
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
                                    }
                                  }
      ?>`
          phantrang.innerHTML = `    <div class="store-filter clearfix" id="phantrang">
      <ul class="store-pagination" style="margin-top: 40px;">
        <?php
        $sizeLists = count($productsShow);
        var_dump($sizeLists);
        ?>
        <li>1</li>
        <li>2</li>
        <li class="activee">3</li>
        <li>4</li>
      </ul>
    </div>`
        }
      })
    <?php
    }
    ?>
    all.addEventListener("click", () => {
      if (!all.classList.contains('active')) {
        <?php
        foreach ($product_type as $valuee) {
        ?>
          if (type<?php echo ($valuee['id']) ?>.classList.contains('active')) {
            type<?php echo ($valuee['id']) ?>.classList.remove('active');
          }
        <?php
        }
        ?>
        all.classList.add('active');
        <?php
        $productsShow = $product;
        ?>
        show.innerHTML = `      <?php
                                foreach ($productsShow as $value) {
                                ?>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <?php
                                  if ($value->discount->active != 0) {
              ?>
                <div class="product-label">
                  <span class="sale">-<?php echo ($value->discount->values * 100) ?>%</span>
                </div>
              <?php
                                  }
              ?>
              <div style="position: absolute;"> <img src="http://127.0.0.1:8000/images/<?php echo ($value['image']) ?>" alt="">
                <!-- <img src="{{ asset('images/<?php echo ($value['image']) ?>') }}" alt=""> -->
              </div>
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                <?php echo $value['name'] ?>
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span><?php echo (number_format($value['price'])) ?>
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
                                }
      ?>`
      }
    })
  </script>


</body>

</html>