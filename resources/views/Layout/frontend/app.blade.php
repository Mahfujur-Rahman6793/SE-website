<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="INFO HTML5 Template">

    <title>Home - Interior Designer</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="../assets/imgs/logo/favicon.png">


    <!-- All CSS files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/progressbar.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/basictable.min.css">
    <link rel="stylesheet" href="../assets/css/master-interior-designer.css">


</head>

<body class="font-heading-glorifydemo">

    <!-- Body Ovelay -->
    <div class="body-overlay"></div>

    <!-- Preloader -->
    @include('Layout.frontend.partial.preloader')

    <!-- Cursor Animation -->
    <div class="cursor1"></div>


    <!-- Sroll to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>


    <!-- Switcher Area Start -->
    @include('Layout.frontend.partial.switcher')
    <!-- Switcher Area End -->

    <!-- Offcanves start -->
    <div class="offcanvas__area">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasOne">
            <button class="offcanvas__close" data-bs-dismiss="offcanvas"><i class="fa-solid fa-xmark"></i></button>
            <div class="offcanvas__body">
                <div class="offcanvas__logo">
                    <a href="{{ url('/pages/index-2') }}">
                        <img src="../assets/imgs/logo/site-logo-light.png" class="show-dark" alt="Offcanvas Logo">
                        <img src="../assets/imgs/logo/site-logo-dark.png" class="show-light" alt="Offcanvas Logo">
                    </a>
                    <p>Create live segments and target the right people for messages based on their behaviors.</p>
                </div>

                <div class="offcanvas__menu-area">
                    <div class="offcanvas__menu-wrapper"></div>
                </div>
                <div class="offcanvas__gallery">
                    <p class="offcanvas__title">gallery</p>
                    <div class="gallery__items">
                        <div class="gallery__item">
                            <a href="#"><img src="../assets/imgs/thumb/gallery.jpg" alt="gallery Image">
                                <span><i class="fa-brands fa-instagram"></i></span></a>
                        </div>
                        <div class="gallery__item">
                            <a href="#"><img src="../assets/imgs/thumb/gallery-2.jpg" alt="gallery Image">
                                <span><i class="fa-brands fa-instagram"></i></span></a>
                        </div>
                        <div class="gallery__item">
                            <a href="#"><img src="../assets/imgs/thumb/gallery-3.jpg" alt="gallery Image">
                                <span><i class="fa-brands fa-instagram"></i></span></a>
                        </div>
                        <div class="gallery__item">
                            <a href="#"><img src="../assets/imgs/thumb/gallery-4.jpg" alt="gallery Image">
                                <span><i class="fa-brands fa-instagram"></i></span></a>
                        </div>
                        <div class="gallery__item">
                            <a href="#"><img src="../assets/imgs/thumb/gallery-5.jpg" alt="gallery Image">
                                <span><i class="fa-brands fa-instagram"></i></span></a>
                        </div>
                        <div class="gallery__item">
                            <a href="#"><img src="../assets/imgs/thumb/gallery-6.jpg" alt="gallery Image">
                                <span><i class="fa-brands fa-instagram"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="offcanvas__media">
                    <p class="offcanvas__title">Follow</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Offcanves end -->
    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <div class="body-wrapper">

                <!-- overlay switcher close  -->
                <div class="overlay-switcher-close"></div>

                {{-- header start --}}

                @include('Layout/frontend/partial/header')

                {{-- header end --}}
                <main>
                    @yield('content')
                </main>


                <!-- Footer section start -->
                @include('Layout.frontend.partial.footer')
                <!-- Footer section end -->
            </div>
        </div>
    </div>



    <!-- All JS files -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- <script src="../assets/js/swiper-bundle.min.js"></script> -->
    <script src="../assets/js/counter.js"></script>
    <!-- <script src="../assets/js/typed.js"></script> -->
    <!-- <script src="../assets/js/mixitup.min.js"></script> -->
    <!-- <script src="../assets/js/progressbar.js"></script> -->
    <script src="../assets/js/gsap.min.js"></script>
    <script src="../assets/js/ScrollSmoother.min.js"></script>
    <script src="../assets/js/ScrollToPlugin.min.js"></script>
    <script src="../assets/js/ScrollTrigger.min.js"></script>
    <script src="../assets/js/SplitText.min.js"></script>
    <script src="../assets/js/TweenMax.min.js"></script>
    <script src="../assets/js/jquery.meanmenu.min.js"></script>
    <!-- <script src="../assets/js/beforeafter.jquery-1.0.0.min.js"></script> -->
    <!-- <script src="../assets/js/basictable.min.js"></script> -->
    <script src="../assets/js/backToTop.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/error-handling.js"></script>
    <script src="../assets/js/offcanvas.js"></script>
    <script src="../assets/js/wc-cursor.js"></script>



</body>


<!-- Mirrored from crowdytheme.com/html/info/info-demo/interior-designer/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 10:38:23 GMT -->

</html>
