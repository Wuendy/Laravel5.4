<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> </title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    
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
    <link rel="stylesheet" href="<?php echo e(url('/css/css/bootstrap.css')); ?>">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php echo e(url('/css/css/owl.carousel.css')); ?>" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo e(url('/css/css/owl.theme.css')); ?>" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo e(url('/css/css/style.css')); ?>" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="<?php echo e(url('/css/css/prettyPhoto.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('/css/css/style6.css')); ?>" rel='stylesheet' type='text/css' />
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
    <section class="banner-inner" id="home">
        <!-- header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1><a class="navbar-brand" href="index.html">
				<img src="<?php echo e(url('css/images/landmark.svg')); ?>" style="height:60px;width:60px;">  Rashōmon
                </a></h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active cool">
                                <a class="nav-link" href="<?php echo e(url('/home')); ?>">Inicio
                            
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
                            <?php echo e(Auth::user()->name); ?>&nbsp;&nbsp;&nbsp;
                        </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item">
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

                        </ul>


                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->
        <!-- banner -->
        <div class="bs-slider-overlay-inner">
        </div>
    </section>

<?php echo $__env->yieldContent('content'); ?>


<script src="<?php echo e(url('js/jquery-2.2.3.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/search.js')); ?>"></script>
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
    <script src="<?php echo e(url('js/responsiveslides.min.js')); ?>"></script>
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
    <script src="<?php echo e(url('js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/jquery.countup.js')); ?>"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- carousel -->
    <script src="<?php echo e(url('js/owl.carousel.js')); ?>"></script>
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
    <script src="<?php echo e(url('js/easing.js')); ?>"></script>
    <script src="<?php echo e(url('js/move-top.js')); ?>"></script>
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
    <script src="<?php echo e(url('js/jquery-1.7.2.js')); ?>"></script>
    <script src="<?php echo e(url('js/jquery.quicksand.js')); ?>"></script>
    <script src="<?php echo e(url('js/script.js')); ?>"></script>
    <script src="<?php echo e(url('js/jquery.prettyPhoto.js')); ?>"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

    <!-- //js -->
    <script src="<?php echo e(url('js/bootstrap.js')); ?>"></script>

</body>

</html>