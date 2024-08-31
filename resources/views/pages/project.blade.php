<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from crowdytheme.com/html/info/info-demo/interior-designer/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 10:38:43 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="INFO HTML5 Template">

  <title>Project</title>

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
          <a href="index-2.html">
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
        <header class="intDesigner-header pos-abs zi-9">
          <div class="intDesigner-header__inner">
            <div class="intDesigner-header__logo">
              <a href="index-2.html">
                <img src="../assets/imgs/interior-designer/logo.png" class="show-dark" alt="Site Logo">
                <img src="../assets/imgs/interior-designer/logo-dark.png" class="show-light" alt="Site Logo">
              </a>
            </div>
            <div class="intDesigner-header__nav">
              <nav class="main-menu">
                <ul>
                   <li><a href="index-2.html">home</a>
                    <ul class="dp-menu">
                      <li><a href="index-2.html">Interior Designer</a></li>
                      <li><a href="https://crowdytheme.com/html/info/info-demo/architect/index-light.html">Architect</a></li>
                    </ul>
                  </li>
                  <li><a href="about.html">about</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="dp-menu">
                      <li><a href="index-2.html">home dark</a></li>
                      <li><a href="index-light.html">home light</a></li>
                      <li><a href="about.html">about dark</a></li>
                      <li><a href="about-light.html">about light</a></li>
                      <li><a href="service.html">service dark</a></li>
                      <li><a href="service-light.html">service light</a></li>
                      <li><a href="service-details.html">service details dark</a></li>
                      <li><a href="service-details-light.html">service details light</a></li>
                      <li><a href="blog.html">blog dark</a></li>
                      <li><a href="blog-light.html">blog light</a></li>
                      <li><a href="blog-details.html">blog details dark</a></li>
                      <li><a href="blog-details-light.html">blog details light</a></li>
                      <li><a href="contact.html">contact dark</a></li>
                      <li><a href="contact-light.html">contact light</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">project</a>
                    <ul class="dp-menu">
                      <li><a href="project.html">project dark</a></li>
                      <li><a href="project-light.html">project light</a></li>
                      <li><a href="project-details.html">project details dark</a></li>
                      <li><a href="project-details-light.html">project details light</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>
            <div class="intDesigner-header__others">
              <div class="intDesigner-header__navicon">
                <button id="open_offcanvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasOne">
                  <img src="../assets/imgs/interior-designer/bar-light.png" class="show-dark" alt="menu bar">
                  <img src="../assets/imgs/interior-designer/bar-dark.png" class="show-light" alt="menu bar"></button>
              </div>
            </div>
          </div>
        </header>
        <!-- Header area end -->

        <main>


          <!-- project area start  -->
          <section class="intDesigner-project__inner pt-150 pb-150">
            <div class="container">
              <div class="intDesigner-project__inner-title-box mb-120">
                <div class="intDesigner-project__sec-title-wrapper">
                  <h1 class="sec-sub-title-18 mb-50 has_char_anim">My Featured</h1>
                  <h2 class="sec-title-18 has_char_anim" data-delay="0.9">Work</h2>
                </div>
              </div>
              <div class="intDesigner-portfolio__items">
                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                  <div class="intDesigner-portfolio__info">
                    <div class="intDesigner-portfolio__thumb">
                      <a href="project-details.html">
                        <div class="cf_image">
                          <img src="../assets/imgs/interior-designer/project-1.jpg" alt="Portfolio Image">
                        </div>
                      </a>
                    </div>

                    <div class="interior-portfolio__content has_fade_anim">
                      <a href="project-details.html">
                        <h3 class="intDesigner-portfolio__title text-uppercase">Drawing Room</h3>
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
                          <img src="../assets/imgs/interior-designer/project-3.jpg" alt="Portfolio Image">
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
                          <img src="../assets/imgs/interior-designer/project-5.jpg" alt="Portfolio Image">
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
                          <img src="../assets/imgs/interior-designer/project-2.jpg" alt="Portfolio Image">
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
                          <img src="../assets/imgs/interior-designer/project-4.jpg" alt="Portfolio Image">
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
                          <img src="../assets/imgs/interior-designer/project-6.jpg" alt="Portfolio Image">
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
              <div class="intDesigner-project__show-more mt-100 text-center">
                <div class="cf_btn">
                  <button class="wc-btn-default btn-hover-divide">Load more</button>
                </div>
              </div>
            </div>
          </section>
          <!-- project area end  -->

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


<!-- Mirrored from crowdytheme.com/html/info/info-demo/interior-designer/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 10:38:43 GMT -->
</html>
