<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    
<!-- navbar section starts  -->

<nav class="navbar">
    <a href="{{ url('/home') }}"> <i class="fas fa-home"></i> <span>home</span> </a>
    <a href="{{ url('/about') }}"> <i class="fas fa-user"></i> <span>about</span> </a>
    <a href="{{ url('/portfolio') }}"> <i class="fas fa-briefcase"></i> <span>portfolio</span> </a>
    <a href="{{ url('/blogs') }}"> <i class="fas fa-blog"></i> <span>blogs</span> </a>
    <a href="{{ url('/contact') }}"> <i class="fas fa-address-book"></i> <span>contact</span> </a>
</nav>

<!-- navbar section ends -->

<!-- portfolio section starts  -->

<section class="portfolio">

    <h1 class="heading"> <span>my</span> work </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/img-1.jpg" alt="">
            <div class="content">
                <h3>project 01</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, praesentium.</p>
                <a href="#">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-2.jpg" alt="">
            <div class="content">
                <h3>project 02</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, praesentium.</p>
                <a href="#">read more</a>
            </div>
        </div>
       
        <div class="box">
            <img src="images/img-3.jpg" alt="">
            <div class="content">
                <h3>project 03</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, praesentium.</p>
                <a href="#">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-4.jpg" alt="">
            <div class="content">
                <h3>project 04</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, praesentium.</p>
                <a href="#">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-5.jpg" alt="">
            <div class="content">
                <h3>project 05</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, praesentium.</p>
                <a href="#">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-6.jpg" alt="">
            <div class="content">
                <h3>project 06</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, praesentium.</p>
                <a href="#">read more</a>
            </div>
        </div>

    </div>

    <a href="#" class="btn"> load more <i class="fas fa-redo"></i> </a>
    
</section>

<!-- portfolio section ends -->

</body>
</html>