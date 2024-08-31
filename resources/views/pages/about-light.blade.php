<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from crowdytheme.com/html/info/info-demo/interior-designer/about-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 10:38:35 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="INFO HTML5 Template">

  <title>About Us</title>

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



<body class="font-heading-glorifydemo light">

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
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">mode</p>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="dark">dark</button>
          <button data-mode="light">light</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
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

          <!-- about inner area start  -->
          <section class="int-inab-area pt-150 pb-150">
            <div class="cf_image intDesigner-about__area-bg">
              <img src="../assets/imgs/interior-designer/dot-bg.png" alt="image">
            </div>
            <div class="container">
              <div class="intDesigner-about__area">
                <div class="container">
                  <div class="intDesigner-about__sec-title-wrapper text-start">
                    <h1 class="int-inab-sub-title mb-30 has_char_anim">About me</h1>
                    <h2 class="int-inab-title has_char_anim">Hi, I'm Watson
                      interior designer </h2>
                  </div>
                  <div class="intDesigner-about__area-inner int-inab__grid p-0">
                    <div class="cf_image intDesigner-about__thumb img_anim_reveal">
                      <img src="../assets/imgs/interior-designer/about-thumb-1.jpg" alt="image">
                    </div>
                    <div class="intDesigner-about__text-wrapper has_fade_anim">
                      <div class="cf_image arrow-line-icon">
                        <img src="../assets/imgs/interior-designer/arrow-line.png" alt="image">
                      </div>
                      <div class="cf_image intDesigner-about__sticker mb-25 has_fade_anim">
                        <img src="../assets/imgs/interior-designer/interior-studio-about.png" alt="image">
                      </div>
                      <h3 class="int-inab-area__title mb-55 has_text_reveal_anim">Hola Interior <br>
                        Studio</h3>
                      <div class="cf_text intDesigner-about__text has_fade_anim">
                        <p>As an interior designer, you know that your portfolio is your calling card. But what about
                          your content? Your website, blog, and social media channels are all valuable platforms for
                          showcasing your work and attracting new clients. But how do you create content that is both
                          informative and engaging?
                          In this demo, I will share some tips on how to create content that will keep your audience
                          coming back for more.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- about inner area end  -->

          <!-- award area start  -->
          <section class="intDesigner-award__area pb-100 int-inab-videotext">
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
                <div class="has_fade_anim">
                  <div class="cf_image award-badge">
                    <img src="../assets/imgs/interior-designer/award-badge.png" class="show-dark" alt="image">
                    <img src="../assets/imgs/interior-designer/award-badge-dark.png" class="show-light" alt="image">
                  </div>
                  <div class="cf_text intDesigner-award__text">
                    <p>Working for almost 10 years, when that presents
                      a skilled team is dedicated to creating unique and functional designs that enhance the lives of
                      live
                      and work in them.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- award area start  -->

          <!-- video area start  -->
          <div class="video__full">
            <div class="cf_image overflow-hidden">
              <img src="../assets/imgs/interior-designer/gallery-01.jpg" alt="Image" data-speed="0.85">
            </div>
            <!-- <video src="../assets/video/2089634529.mp4" autoplay loop muted></video> -->
          </div>
          <!-- video area end  -->

          <!-- cta area start  -->
          <section class="cf-cta__area pt-140 pb-140">
            <div class="container">
              <div class="cf-cta__text-wrapper">
                <div class="cf-cta__sec-title-wrapper">
                  <h2 class="sec-title-18 text_invert">Let’s <br>
                    work <br>
                    together</h2>
                  <div class="cf_text cf-cta__text ">
                    <p>Inspired by my work? <br>
                      I would be delighted to help you create your dream interior!</p>
                  </div>
                </div>
                <div class="cf_btn cf-cta__btn">
                  <a href="contact.html" class="wc-btn-default btn-hover-divide">Contact Me</a>
                </div>
              </div>
            </div>
          </section>
          <!-- cta area end  -->

        </main>

        <!-- Footer section start -->
        <footer>
          <div class="intDesigner-footer__area pt-100 pb-100">
            <div class="container">
              <div class="intDesigner-footer__widgets-wrapper">
                <div class="footer__widget">
                  <div class="intDesigner-footer__logo">
                    <a href="index-2.html">
                      <img src="../assets/imgs/interior-designer/logo.png" class="show-dark" alt="Site Logo">
                      <img src="../assets/imgs/interior-designer/logo-dark.png" class="show-light" alt="Site Logo">
                    </a>
                  </div>
                </div>
                <div class="footer__widget">
                  <div class="intDesigner-footer__menu">
                    <ul>
                      <li><a href="#">About Me</a></li>
                      <li><a href="#">Work</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </div>
                </div>
                <div class="footer__widget">
                  <div class="intDesigner-footer__menu">
                    <ul>
                      <li><a href="#">6541, Brand tower,</a></li>
                      <li><a href="#">New York, USA</a></li>
                    </ul>
                  </div>
                </div>
                <div class="footer__widget">
                  <div class="intDesigner-footer__menu">
                    <ul>
                      <li><a href="mailto:info@example.com">info@example.com</a></li>
                      <li><a href="tel:+(08)365301710">+(08) 365 301 710</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="intDesigner-copyright__area">
            <div class="container">
              <div class="intDesigner-copyright__inner">
                <div class="intDesigner-copyright__text">
                  <p>© Alrights reserved by <a href="https://crowdyflow.com/">CrowdyFlow</a></p>
                </div>
                <div class="intDesigner-copyright__social">
                  <a href="#">Facebook</a><a href="#">Twitter</a><a href="#">Instagram</a>
                </div>
                <div class="intDesigner__go-top">
                  <a href="#" class="go-top__btn">
                    Go Top <div class="cf_image"><img src="../assets/imgs/interior-designer/arrow-up.png"
                        class="show-dark" alt="image"><img src="../assets/imgs/interior-designer/arrow-up-dark.png"
                        class="show-light" alt="image">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </footer>
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


<!-- Mirrored from crowdytheme.com/html/info/info-demo/interior-designer/about-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 10:38:35 GMT -->
</html>
