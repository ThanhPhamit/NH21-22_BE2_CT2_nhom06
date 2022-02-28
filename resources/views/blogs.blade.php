<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blogs</title>

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

<!-- blogs section starts  -->

<section class="blogs">

    <h1 class="heading"> <span>my</span> blogs </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, illum.</p>
                <a href="#" class="btn"> read more <i class="fas fa-link"></i> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, illum.</p>
                <a href="#" class="btn"> read more <i class="fas fa-link"></i> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, illum.</p>
                <a href="#" class="btn"> read more <i class="fas fa-link"></i> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, illum.</p>
                <a href="#" class="btn"> read more <i class="fas fa-link"></i> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, illum.</p>
                <a href="#" class="btn"> read more <i class="fas fa-link"></i> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, illum.</p>
                <a href="#" class="btn"> read more <i class="fas fa-link"></i> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

</body>
</html>