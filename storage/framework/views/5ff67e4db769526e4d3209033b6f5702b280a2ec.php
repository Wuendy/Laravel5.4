
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> Inicio</title>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" Inwardly
 Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="<?php echo e(url('css/css/bootstrap.css')); ?>">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php echo e(url('css/css/owl.carousel.css')); ?>" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo e(url('/css/css/owl.theme.css')); ?>" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo e(url('css/css/style.css')); ?>" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="<?php echo e(url('css/css/prettyPhoto.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('css/css/style6.css')); ?>" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo e(url('/css/css/fontawesome-all.css')); ?>">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!--web font-->
    <link href="<?php echo e(url('//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i')); ?>" rel="stylesheet">
    <!--//web font-->

</head>

<body>
    <!-- banner -->
    <section class="banner" id="home">
        <!-- header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1><a class="navbar-brand" href="index.html">
                <img src="css/images/landmark.svg" style="height:60px;width:60px;">Rashōmon
                </a></h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active cool">
                                <a class="nav-link" href="index.html">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                            </li>
                            <li class="nav-item cool">
                                <a class="nav-link" href="<?php echo e(url('profesor')); ?>">Profesores</a>
                            </li>
                           
                            <li class="nav-item cool">
                                <a class="nav-link" href="gallery.html">Materias</a>
                            </li>
                            

                           <li class="nav-item dropdown cool">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img style="height:25px;width:25px;" src="<?php echo e(url('/css/images/sakura.svg')); ?>"> <?php echo e(Auth::user()->name); ?>

                        </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">
                                        Perfil
                                    </a>
                               
                               
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesion</a><form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                       <?php echo e(csrf_field()); ?>

                                    </form>
                                </div>
                            </li>
                            
                            <!-- /search -->
                           

                            <!-- /search -->

                        </ul>


                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="slider-info bg1">
                        <div class="bs-slider-overlay">
                            <div class="banner-text-w3layouts container">
                                <h5 class="tag text-left mb-3">Aprende Japones</h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Conveniente,<br> practico y <br>   divertido</h4>
                                <!--/sub-content-->
                                <div class="top-content-info">
                                    <div class="top-content-left">
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <!--//sub-content-->
                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="slider-info bg2">
                        <div class="bs-slider-overlay">
                            <div class="banner-text-w3layouts container">
                                <h5 class="tag text-left mb-3">Aprende Japones </h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Practico y<br> conveniente</h4>
                                <!--/sub-content-->
                                <div class="top-content-info">
                                    <div class="top-content-left">
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <!--//sub-content-->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg3">
                        <div class="bs-slider-overlay">
                            <div class="banner-text-w3layouts container">
                                <h5 class="tag text-left mb-3 ">Aprende Japones </h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Creativo y<br> entretenido</h4>
                                <!--/sub-content-->
                                <div class="top-content-info">
                                    <div class="top-content-left">
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <!--//sub-content-->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg4">
                        <div class="bs-slider-overlay">
                            <div class="banner-text-w3layouts container">
                                <h5 class="tag text-left mb-3 ">Aprende Japones</h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Practico y<br> conveniente</h4>
                                <!--/sub-content-->
                                <div class="top-content-info">
                                    <div class="top-content-left">
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="top-gd">
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <!--//sub-content-->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!--//banner-bottom-w3ls-->

    <!---->
    <!--gallery  -->
    <section class="gallery py-md-5 py-4">
        <div class="gallery-inner py-md-5 py-4">
            <h3 class="tittle text-center mb-md-5 mb-4">Latest Art Projects</h3>
            <ul class="portfolio-categ filter pb-5 mb-lg-3 text-center">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" title="Category 1">category 1</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" title="Category 2">category 2</a>
                </li>
                <li class="cat-item-3">
                    <a href="#" title="Category 3">category 3</a>
                </li>
                <li class="cat-item-4">
                    <a href="#" title="Category 4">category 4</a>
                </li>

            </ul>
            <ul class="portfolio-area clearfix">
                <li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
                    <span class="image-block img-hover">
                        <a class="image-zoom" href="css/images/ab.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="css/images/ab.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="css/images/ab2.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="css/images/ab2.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="css/images/ab1.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="css/images/ab1.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
                    <span class="image-block">
                        <a class="image-zoom" href="css/images/ab3.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="css/images/ab3.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="css/images/ab4.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="css/images/ab4.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="css/images/ab6.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="css/images/ab6.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="css/images/ab8.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="css/images/ab8.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="css/images/ab5.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="css/images/ab5.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
    <!-- //gallery -->
    <!-- stats -->

    <section class="banner-bottom-w3ls pb-md-5 pb-4">
        <div class="stats-in-content pb-md-5 pb-4">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-7 left-slider">

                        <div class="row stats-ig-gd">
                            <div class="col-md-4 stats-img">
                                <img src="css/images/ab.jpg" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-4 stats-img">
                                <img src="css/images/ab3.jpg" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-4 stats-img">
                                <img src="css/images/ab9.jpg" class="img-fluid " alt="">
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-5 about-right slider-right-con stats-left">
                        <h4 class="mb-4">Our Stats</h4>
                        <p class="mt-3">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet. </p>
                        <div class="stats_info counter_grid my-3">
                            <div class="icon">
                                <i class="fa fa-home" aria-hidden="true"></i>

                            </div>
                            <div class="icon_info_stats">
                                <p class="counter">545 </p>
                                <h3>Aprende Japones</h3>
                            </div>
                            <div class="clearfix"> </div>

                        </div>
                        <div class="stats_info counter_grid">
                            <div class="icon">
                                <i class="far fa-smile"></i>

                            </div>
                            <div class="icon_info_stats">
                                <p class="counter">250 </p>
                                <h3>Happy Clients</h3>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- //stats -->
    <!-- /testimonials -->
    <div class="testimonials pb-lg-5 pb-4">
        <div class="testimonials-inner container pb-lg-4 pb-3">
            <h3 class="tittle text-center mb-md-5 mb-4">Happy Clients</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonials_grid center">
                            <div class="testimonials_grid-inn">
                                <img src="css/images/team3.jpg" alt=" " class="img-responsive" />
                                <div class="test_social_pos">
                                    <ul class="social_list1">
                                        <li>
                                            <a href="#" class="facebook1">
                                                        <i class="fab fa-facebook-f"></i>

                                                    </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter2">
                                                        <i class="fab fa-twitter"></i>

                                                    </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dribble3">
                                                        <i class="fab fa-dribbble"></i>
                                                    </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Gretchen
                                <span>Customer</span>
                            </h3>
                            <label>United States</label>
                            <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonials_grid text-center">
                            <div class="testimonials_grid-inn">
                                <img src="css/images/team1.jpg" alt=" " class="img-responsive" />
                                <div class="test_social_pos">
                                    <ul class="social_list1">
                                        <li>
                                            <a href="#" class="facebook1">
                                                        <i class="fab fa-facebook-f"></i>

                                                    </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter2">
                                                        <i class="fab fa-twitter"></i>

                                                    </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dribble3">
                                                        <i class="fab fa-dribbble"></i>
                                                    </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Anne Marc
                                <span>Customer</span>
                            </h3>
                            <label>United States</label>
                            <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonials_grid">
                            <div class="testimonials_grid-inn">
                                <img src="css/images/team3.jpg" alt=" " class="img-responsive" />
                                <div class="test_social_pos">
                                    <ul class="social_list1">
                                        <li>
                                            <a href="#" class="facebook1">
                                                        <i class="fab fa-facebook-f"></i>

                                                    </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter2">
                                                        <i class="fab fa-twitter"></i>

                                                    </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dribble3">
                                                        <i class="fab fa-dribbble"></i>
                                                    </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Harry Baker
                                <span>Customer</span>
                            </h3>
                            <label>United States</label>
                            <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="fas fa-long-arrow-alt-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                    <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>

                                </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- /bottom-last -->
    <section class="bottom-last py-5 text-center">
        <div class="container">
            <h3 class="text-uppercase text-white mb-md-5 mb-4">Are you ready to improve your space?</h3>
            <div class="read last">
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                    <i class="fas fa-user"></i> Join Now</a>
            </div>
        </div>
    </section>
    <!-- //bottom-last -->

    <!--/footer-->
    <footer class="footer-main-w3layouts py-md-5 py-4">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row">
                <div class="col-lg-5 footer-grid-w3ls">
                    <h3 class="mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, Cras blandit nibh ut pretium elementum. Duis bibendum convallis nunc a dictum. Quisque ac ipsum porta, ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum. </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h3 class="text-capitalize mb-3">Connect With Social</h3>
                            <p><span class="fab fa-twitter"></span> twitter/@my_website</p>
                            <p><span class="fab fa-instagram"></span> instagram/@my_website</p>
                            <p><span class="fab fa-youtube mb-5"></span> youtube/@my_website</p>
                            <a href="#" class="facebook-footer mr-2"><span class="fab mr-1 fa-facebook-f"></span> Facebook</a>
                            <a href="#" class="twitter-footer"><span class="fab mr-1 fa-twitter"></span> Twitter</a>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-4">Address</h3>
                            <address class="mb-0">
                            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> 8088H 5th Street Parking, King <br>Block, New York City.</p>
                            <p><i class="fas mr-1 fa-phone"></i> +12 445 8453 8088</p>
                            <p><i class="fas mr-1 fa-fax"></i> +11 997 2040 9436 </p>
                            <p><i class="far mr-1 fa-envelope-open"></i> <a href="mailto:info@example.com">info@example.com</a></p>
                        </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls">
                    <h3 class="mb-4">Instagram</h3>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="css/images/banner1.jpg" class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 10 June, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="css/images/banner2.jpg" class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 22 June, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="css/images/banner3.jpg" class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 23 June, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <h3 class="mb-4">We Offer</h3>
                    <ul>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Blandit nibh ut pretium elementum.</li>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Convallis nunc a dictum ipsum.</li>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Ultrices metus sit amet, cursus.</li>
                    </ul>
                    <h3 class="mt-4 mb-4">Newsletter</h3>
                    <p class="mb-3">Subscribe to Our Newsletter to get News, Amazing Offers &amp; More</p>
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Enter your email..." required="">
                        <button class="btn1"><i class="far fa-paper-plane"></i></button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-w3layouts mt-md-5 mt-4 text-center">
            <p>© 2018 Inwardly . All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
        </div>
    </footer>
    <!-- //footer -->
    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-left mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-left pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-left mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-left pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="<?php echo e(url('/js/jquery-2.2.3.min.js')); ?>"></script>
    <script src="<?php echo e(url('/js/search.js')); ?>"></script>
    <!-- /dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- Banner Responsiveslides -->
    <script src="<?php echo e(url('/js/responsiveslides.min.js')); ?>"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- stats -->
    <script src="<?php echo e(url('/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(url('/js/jquery.countup.js')); ?>"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- carousel -->
    <script src="<?php echo e(url('/js/owl.carousel.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 0
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <!-- Smooth-Scrolling-JavaScript -->
    <script src="<?php echo e(url('/js/easing.js')); ?>"></script>
    <script src="<?php echo e(url('/js/move-top.js')); ?>"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll, .navbar li a, .footer li a").click(function(event) {
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //Smooth-Scrolling-JavaScript -->
    <script>
        $(document).ready(function() {
            /*
                                    var defaults = {
                                        containerID: 'toTop', // fading element id
                                        containerHoverID: 'toTopHover', // fading element hover id
                                        scrollSpeed: 1200,
                                        easingType: 'linear' 
                                    };
                                    */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>

    <!-- //Smooth-Scrolling-JavaScript -->
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <!--// end-smoth-scrolling -->
    <script src="<?php echo e(url('/js/jquery-1.7.2.js')); ?>"></script>
    <script src="<?php echo e(url('/js/jquery.quicksand.js')); ?>"></script>
    <script src="<?php echo e(url('/js/script.js')); ?>"></script>
    <script src="<?php echo e(url('/js/jquery.prettyPhoto.js')); ?>"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

    <!-- //js -->
    <script src="<?php echo e(url('/js/bootstrap.js')); ?>"></script>

</body>

</html>