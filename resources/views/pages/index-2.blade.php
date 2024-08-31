<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from crowdytheme.com/html/info/info-demo/interior-designer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 10:38:32 GMT -->

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
                    <a href="{{ url('pages/index-2') }}">
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

                <!-- Header area start -->
                {{-- <header class="intDesigner-header pos-abs zi-9">
                    <div class="intDesigner-header__inner">
                        <div class="intDesigner-header__logo">
                            <a href="{{ url('pages/index-2') }}">
                                <img src="../assets/imgs/interior-designer/logo.png" alt="Site Logo">
                            </a>
                        </div>
                        <div class="intDesigner-header__nav">
                            <nav class="main-menu menu-light">
                                <ul>
                                    <li><a href="{{ url('pages/index-2') }}">home</a>
                                        <ul class="dp-menu">
                                            <li><a href="{{ url('pages/index-2') }}">Interior Designer</a></li>
                                            <li><a href="{{ url('pages/index-light') }}">Architect</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('pages/about') }}">about</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="dp-menu">
                                            <li><a href="{{ url('pages/index-2') }}">home dark</a></li>
                                            <li><a href="{{ url('pages/index-light') }}">home light</a></li>
                                            <li><a href="{{ url('pages/about') }}">about dark</a></li>
                                            <li><a href="{{ url('pages/about-light') }}">about light</a></li>
                                            <li><a href="{{ url('pages/service') }}">service dark</a></li>
                                            <li><a href="{{ url('pages/service-light') }}">service light</a></li>
                                            <li><a href="{{ url('pages/service-details') }}">service details dark</a>
                                            </li>
                                            <li><a href="{{ url('pages/service-details-light') }}">service details
                                                    light</a></li>
                                            <li><a href="{{ url('pages/blog') }}">blog dark</a></li>
                                            <li><a href="{{ url('pages/blog-light') }}">blog light</a></li>
                                            <li><a href="{{ url('pages/blog-details') }}">blog details dark</a></li>
                                            <li><a href="{{ url('pages/blog-details-light') }}">blog details light</a>
                                            </li>
                                            <li><a href="{{ url('pages/contact') }}">contact dark</a></li>
                                            <li><a href="{{ url('pages/contact-light') }}">contact light</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">project</a>
                                        <ul class="dp-menu">
                                            <li><a href="{{ url('pages/project') }}">project dark</a></li>
                                            <li><a href="{{ url('pages/project-light') }}">project light</a></li>
                                            <li><a href="{{ url('pages/project-details') }}">project details dark</a>
                                            </li>
                                            <li><a href="{{ url('pages/project-details-light') }}">project details
                                                    light</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('pages/contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="intDesigner-header__others">
                            <div class="intDesigner-header__navicon">
                                <button id="open_offcanvas" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasOne">
                                    <img src="../assets/imgs/interior-designer/bar-light.png" alt="menu bar"></button>
                            </div>
                        </div>
                    </div>
                </header> --}}
                @include('Layout/frontend/partial/header')
                <!-- Header area end -->


                <main>
                    <!-- hero area start  -->
                    <section class="intDesigner-hero__area pt-150 pb-150">
                        <div class="intDesigner-hero__area-bg">
                            <div class="intDesigner-hero__overlay"></div>
                            <div class="has_image_zoom cf_image h-100 overflow-hidden">
                                <img src="../assets/imgs/interior-designer/hero-bg.jpg" alt="image">
                            </div>
                        </div>
                        <div class="container">
                            <div class="intDesigner-hero__content-wrapper">
                                <div class="intDesigner-hero__titlewrap">
                                    <h1 class="intDesigner-hero__subtitle has_text_reveal_anim">Experienced and
                                        creative</h1>
                                    <h2 class="intDesigner-hero__title has_char_anim" data-delay="0.7 ">Interior <br>
                                        Designer</h2>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- hero area end  -->

                    <!-- about area start  -->
                    <section class="intDesigner-about__area pt-150 pb-150">
                        <h3 class="side-title">02 - ABOUT</h3>
                        <div class="cf_image intDesigner-about__area-bg">
                            <img src="../assets/imgs/interior-designer/dot-bg.png" alt="image">
                        </div>
                        <div class="container">
                            <div class="intDesigner-about__sec-title-wrapper d-none">
                                <div class="opacity" style="opacity: 1;">
                                    <h3 class="sec-sub-title-18">Experienced and creative</h3>
                                    <h2 class="sec-title-18">Interior <br> Designer</h2>
                                </div>

                            </div>
                            <div class="intDesigner-about__area-inner">
                                <div class="cf_image intDesigner-about__thumb img_anim_reveal">
                                    <img src="../assets/imgs/interior-designer/about-thumb.jpg" alt="image">
                                </div>
                                <div class="intDesigner-about__text-wrapper">
                                    <h3 class="intDesigner-about__title has_text_reveal_anim">I am <br>
                                        Watson</h3>
                                    <div class="cf_text intDesigner-about__text has_fade_anim">
                                        <p>Everything happens for a reason to change so that you can learn to let go,
                                            things go wrong so
                                            that
                                            you appreciate them. When necessary we offer the best dental restorative
                                            materials and procedures.
                                            My technology allows you to see the results of your treatment, and us to see
                                            detail not available
                                            to
                                            the naked eye. </p>
                                    </div>
                                    <div class="cf_image intDesigner-about__sticker has_fade_anim">
                                        <img src="../assets/imgs/interior-designer/interior-studio-sticker.png"
                                            class="show-light" alt="image">
                                        <img src="../assets/imgs/interior-designer/interior-studio-sticker-light.png"
                                            class="show-dark" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- about area end  -->

                    <!-- project area start  -->
                    <section class="intDesigner-project__area">
                        <h3 class="side-title">03 - Portfolio</h3>
                        <div class="container">
                            <div class="intDesigner-project__area-title-box mb-110">
                                <div class="intDesigner-project__sec-title-wrapper">
                                    <h3 class="sec-sub-title-18 mb-50 has_char_anim">My Featured</h3>
                                    <h2 class="sec-title-18 has_text_reveal_anim">Work</h2>
                                </div>
                                <div class="intDesigner-services__box has_fade_anim">
                                    <span class="years-since">Since 2014</span>
                                    <div class="intDesigner-services__list">
                                        <ul>
                                            <li>Interior Design</li>
                                            <li>Planning</li>
                                            <li>Decoration</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="intDesigner-portfolio__items">
                                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                                    <div class="intDesigner-portfolio__info">
                                        <div class="intDesigner-portfolio__thumb">
                                            <a href="project-details.html">
                                                <div class="cf_image">
                                                    <img src="../assets/imgs/interior-designer/project-1.jpg"
                                                        alt="Portfolio Image">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="interior-portfolio__content has_fade_anim">
                                            <a href="{{ url('pages/project-details') }}">
                                                <h3 class="intDesigner-portfolio__title text-uppercase">Drawing Room
                                                </h3>
                                            </a>
                                            <p>Natre, New York <br> - 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                                    <div class="intDesigner-portfolio__info">
                                        <div class="intDesigner-portfolio__thumb">
                                            <a href="project-details.html">
                                                <div class="cf_image">
                                                    <img src="../assets/imgs/interior-designer/project-3.jpg"
                                                        alt="Portfolio Image">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="interior-portfolio__content has_fade_anim">
                                            <a href="project-details.html">
                                                <h3 class="intDesigner-portfolio__title text-uppercase">Bathroom</h3>
                                            </a>
                                            <p>Natre, New York <br> - 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                                    <div class="intDesigner-portfolio__info">
                                        <div class="intDesigner-portfolio__thumb">
                                            <a href="project-details.html">
                                                <div class="cf_image">
                                                    <img src="../assets/imgs/interior-designer/project-5.jpg"
                                                        alt="Portfolio Image">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="interior-portfolio__content has_fade_anim">
                                            <a href="project-details.html">
                                                <h3 class="intDesigner-portfolio__title">Kitchen Room</h3>
                                            </a>
                                            <p>Natre, New York <br> - 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                                    <div class="intDesigner-portfolio__info">
                                        <div class="intDesigner-portfolio__thumb">
                                            <a href="project-details.html">
                                                <div class="cf_image">
                                                    <img src="../assets/imgs/interior-designer/project-2.jpg"
                                                        alt="Portfolio Image">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="interior-portfolio__content has_fade_anim">
                                            <a href="project-details.html">
                                                <h3 class="intDesigner-portfolio__title">Bedroom</h3>
                                            </a>
                                            <p>Natre, New York <br> - 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                                    <div class="intDesigner-portfolio__info">
                                        <div class="intDesigner-portfolio__thumb">
                                            <a href="project-details.html">
                                                <div class="cf_image">
                                                    <img src="../assets/imgs/interior-designer/project-4.jpg"
                                                        alt="Portfolio Image">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="interior-portfolio__content has_fade_anim">
                                            <a href="project-details.html">
                                                <h3 class="intDesigner-portfolio__title">Dinning Space</h3>
                                            </a>
                                            <p>Natre, New York <br> - 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                                    <div class="intDesigner-portfolio__info">
                                        <div class="intDesigner-portfolio__thumb">
                                            <a href="project-details.html">
                                                <div class="cf_image">
                                                    <img src="../assets/imgs/interior-designer/project-6.jpg"
                                                        alt="Portfolio Image">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="interior-portfolio__content has_fade_anim">
                                            <a href="project-details.html">
                                                <h3 class="intDesigner-portfolio__title">Reading Room</h3>
                                            </a>
                                            <p>Natre, New York <br> - 2019</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- project area end  -->

                    <!-- fact area start  -->
                    <section class="intDesigner-fact__area pt-150 pb-140 zi-1">
                        <div class="container">
                            <div class="intDesigner-counter__items-wrapper">
                                <div class="intDesigner-counter__item has_fade_anim">
                                    <h3 class="intDesigner-counter__number wc-counter ">23<span>+</span></h3>
                                    <div class="cf_text intDesigner-counter__text">
                                        <p>years Experiences <br>
                                            With over 800 <a href="url('pages/project')"><span
                                                    class="dancer_hover_text" data-cursor="-exclusion -lg">projects
                                                    <span class="dancer_hover_img"
                                                        style="background-image: url(../assets/imgs/interior-designer/project-4.jpg);"></span>
                                                </span></a> <br>
                                            completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- fact area end  -->

                    <!-- services area start  -->
                    <section class="intDesigner-service__area pt-150 pb-150 dark">
                        <h3 class="side-title">04 - Services </h3>
                        <div class="container">
                            <div class="intDesigner-service__sec-title-wrapper mb-120">
                                <h3 class="sec-sub-title-18 has_char_anim">Capabilities</h3>
                                <h2 class="sec-title-18 has_text_reveal_anim">Services</h2>
                            </div>
                            <div class="intDesigner-service__items">
                                <div class="intDesigner-service__name-wrapper">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="first-tab" data-bs-toggle="tab"
                                                data-bs-target="#first" type="button" role="tab"
                                                aria-controls="first" aria-selected="true">
                                                <div class="intDesigner-service__name has_fade_anim">
                                                    <span class="intDesigner-service__number">01</span>
                                                    <h3 class="intDesigner-service__title" data-animation="sheen">
                                                        Lighting Design</h3>
                                                </div>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="second-tab" data-bs-toggle="tab"
                                                data-bs-target="#second" type="button" role="tab"
                                                aria-controls="second" aria-selected="false">
                                                <div class="intDesigner-service__name has_fade_anim">
                                                    <span class="intDesigner-service__number">02</span>
                                                    <h3 class="intDesigner-service__title" data-animation="sheen">
                                                        Custom Furniture</h3>
                                                </div>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="third-tab" data-bs-toggle="tab"
                                                data-bs-target="#third" type="button" role="tab"
                                                aria-controls="third" aria-selected="false">
                                                <div class="intDesigner-service__name has_fade_anim">
                                                    <span class="intDesigner-service__number">03</span>
                                                    <h3 class="intDesigner-service__title" data-animation="sheen">
                                                        Cabinetry Design</h3>
                                                </div>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="fourth-tab" data-bs-toggle="tab"
                                                data-bs-target="#fourth" type="button" role="tab"
                                                aria-controls="fourth" aria-selected="false">
                                                <div class="intDesigner-service__name has_fade_anim">
                                                    <span class="intDesigner-service__number">04</span>
                                                    <h3 class="intDesigner-service__title" data-animation="sheen">
                                                        Artwork Design</h3>
                                                </div>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="fifth-tab" data-bs-toggle="tab"
                                                data-bs-target="#fifth" type="button" role="tab"
                                                aria-controls="fifth" aria-selected="false">
                                                <div class="intDesigner-service__name has_fade_anim">
                                                    <span class="intDesigner-service__number">05</span>
                                                    <h3 class="intDesigner-service__title" data-animation="sheen">Wall
                                                        Covering</h3>
                                                </div>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="intDesigner-service__content-wrapper">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="first" role="tabpanel"
                                            aria-labelledby="first-tab">
                                            <div class="intDesigner-service__content">
                                                <a href="service-details.html">
                                                    <div
                                                        class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                                        <img src="../assets/imgs/interior-designer/service-01.jpg"
                                                            alt="service image">
                                                    </div>
                                                </a>
                                                <div class="cf_text intDesigner-service__text has_fade_anim">
                                                    <p>You can hire any one of us individually, or as a team.
                                                        No matter the project scope, we can leverage our roster of
                                                        vetted professionals to assemble
                                                        the
                                                        ideal team for every project.</p>
                                                </div>
                                                <div class="cf_btn intDesigner-service__btn has_fade_anim">
                                                    <a href="service-details.html"
                                                        class="wc-btn-default btn-hover-divide">Know More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="second" role="tabpanel"
                                            aria-labelledby="second-tab">
                                            <div class="intDesigner-service__content">
                                                <a href="service-details.html">
                                                    <div
                                                        class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                                        <img src="../assets/imgs/interior-designer/service-02.jpg"
                                                            alt="service image">
                                                    </div>
                                                </a>
                                                <div class="cf_text intDesigner-service__text has_fade_anim">
                                                    <p>You can hire any one of us individually, or as a team.
                                                        No matter the project scope, we can leverage our roster of
                                                        vetted professionals to assemble
                                                        the
                                                        ideal team for every project.</p>
                                                </div>
                                                <div class="cf_btn intDesigner-service__btn has_fade_anim">
                                                    <a href="service-details.html"
                                                        class="wc-btn-default btn-hover-divide">Know More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="third" role="tabpanel"
                                            aria-labelledby="third-tab">
                                            <div class="intDesigner-service__content">
                                                <a href="service-details.html">
                                                    <div
                                                        class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                                        <img src="../assets/imgs/interior-designer/service-03.jpg"
                                                            alt="service image">
                                                    </div>
                                                </a>
                                                <div class="cf_text intDesigner-service__text has_fade_anim">
                                                    <p>You can hire any one of us individually, or as a team.
                                                        No matter the project scope, we can leverage our roster of
                                                        vetted professionals to assemble
                                                        the
                                                        ideal team for every project.</p>
                                                </div>
                                                <div class="cf_btn intDesigner-service__btn has_fade_anim">
                                                    <a href="service-details.html"
                                                        class="wc-btn-default btn-hover-divide">Know More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fourth" role="tabpanel"
                                            aria-labelledby="fourth-tab">
                                            <div class="intDesigner-service__content">
                                                <a href="service-details.html">
                                                    <div
                                                        class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                                        <img src="../assets/imgs/interior-designer/service-04.jpg"
                                                            alt="service image">
                                                    </div>
                                                </a>
                                                <div class="cf_text intDesigner-service__text has_fade_anim">
                                                    <p>You can hire any one of us individually, or as a team.
                                                        No matter the project scope, we can leverage our roster of
                                                        vetted professionals to assemble
                                                        the
                                                        ideal team for every project.</p>
                                                </div>
                                                <div class="cf_btn intDesigner-service__btn has_fade_anim">
                                                    <a href="service-details.html"
                                                        class="wc-btn-default btn-hover-divide">Know More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fifth" role="tabpanel"
                                            aria-labelledby="fifth-tab">
                                            <div class="intDesigner-service__content">
                                                <a href="service-details.html">
                                                    <div
                                                        class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                                        <img src="../assets/imgs/interior-designer/service-05.jpg"
                                                            alt="service image">
                                                    </div>
                                                </a>
                                                <div class="cf_text intDesigner-service__text has_fade_anim">
                                                    <p>You can hire any one of us individually, or as a team.
                                                        No matter the project scope, we can leverage our roster of
                                                        vetted professionals to assemble
                                                        the
                                                        ideal team for every project.</p>
                                                </div>
                                                <div class="cf_btn intDesigner-service__btn has_fade_anim">
                                                    <a href="service-details.html"
                                                        class="wc-btn-default btn-hover-divide">Know More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- services area end  -->

                    <!-- award area start  -->
                    <section class="intDesigner-award__area pt-150 pb-150">
                        <div class="container">
                            <div class="intDesigner-award__area-text-box">
                                <div class="">
                                    <div class="intDesigner-award__sec-title-wrapper">
                                        <h2 class="sec-title-18 has_text_reveal_anim">awards <br>
                                            for the best <br>
                                            works</h2>
                                    </div>
                                    <div class="intDesigner-award__list has_fade_anim">
                                        <span>Nominee -2011</span>
                                        <span>Winner -2018</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="cf_image award-badge has_fade_anim">
                                        <img src="../assets/imgs/interior-designer/award-badge.png" class="show-dark"
                                            alt="image">
                                        <img src="../assets/imgs/interior-designer/award-badge-dark.png"
                                            class="show-light" alt="image">
                                    </div>
                                    <div class="cf_text intDesigner-award__text has_fade_anim">
                                        <p>Working for almost 10 years, when that presents
                                            a skilled team is dedicated to creating unique and functional designs that
                                            enhance the lives of
                                            live
                                            and work in them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- award area end  -->

                    <!-- section separator start  -->
                    <div class="section-separator__area">
                        <div class="section-separator__line-vertical"></div>
                    </div>
                    <!-- section separator end  -->

                    <!-- brands area start  -->
                    <div class="intDesigner-brand__area pt-150 pb-150">
                        <div class="container">
                            <div class="intDesigner-brand__area-inner">
                                <div class="cf_text intDesigner-brand__area-text has_text_move_anim">
                                    <p>I have worked with some notable brands</p>
                                </div>
                                <div class="intDesigner-brand__item-wrapper  has_fade_anim">
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-01.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-01-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-02.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-02-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-03.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-03-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-04.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-04-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-05.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-05-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-06.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-06-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-07.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-07-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-08.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-08-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-09.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-09-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-10.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-10-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-11.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-11-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                    <div class="cf_image intDesigner-brand__item">
                                        <img src="../assets/imgs/interior-designer/brand-12.png" class="show-dark"
                                            alt="brand image">
                                        <img src="../assets/imgs/interior-designer/brand-12-dark.png"
                                            class="show-light" alt="brand image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- brands area end  -->

                    <!-- Video area start -->
                    <div class="video__full health-video">
                        <video src="https://crowdytheme.com/html/info/info-demo/assets/video/interior-designer.mp4"
                            autoplay="" loop="" muted=""></video>
                    </div>
                    <!-- Video area end -->

                    <!-- cta area start  -->
                    <section class="cf-cta__area pt-140 pb-140">
                        <div class="container">
                            <div class="cf-cta__text-wrapper">
                                <div class="cf-cta__sec-title-wrapper">
                                    <h2 class="sec-title-18 text_invert">Let’s <br>
                                        work <br>
                                        together</h2>
                                    <div class="cf_text cf-cta__text">
                                        <p>Inspired by my work? <br>
                                            I would be delighted to help you create your dream interior!</p>
                                    </div>
                                </div>
                                <div class="cf_btn cf-cta__btn">
                                    <a href="{{ url('pages/contact') }}"
                                        class="wc-btn-default btn-hover-divide">Contact Me</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- cta area end  -->

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


<!-- Mirrored from crowdytheme.com/html/info/info-demo/interior-designer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 10:38:32 GMT -->

</html>
