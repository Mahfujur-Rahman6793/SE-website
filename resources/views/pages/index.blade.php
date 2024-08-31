@extends('Layout.frontend.app')
@section('content')
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
                        <img src="../assets/imgs/interior-designer/interior-studio-sticker.png" class="show-light"
                            alt="image">
                        <img src="../assets/imgs/interior-designer/interior-studio-sticker-light.png" class="show-dark"
                            alt="image">
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
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <div class="cf_image">
                                    <img src="../assets/imgs/interior-designer/project-1.jpg" alt="Portfolio Image">
                                </div>
                            </a>
                        </div>

                        <div class="interior-portfolio__content has_fade_anim">
                            <a href="{{ url('/pages/project-detailscontact') }}">
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
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <div class="cf_image">
                                    <img src="../assets/imgs/interior-designer/project-3.jpg" alt="Portfolio Image">
                                </div>
                            </a>
                        </div>

                        <div class="interior-portfolio__content has_fade_anim">
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <h3 class="intDesigner-portfolio__title text-uppercase">Bathroom</h3>
                            </a>
                            <p>Natre, New York <br> - 2019</p>
                        </div>
                    </div>
                </div>
                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                    <div class="intDesigner-portfolio__info">
                        <div class="intDesigner-portfolio__thumb">
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <div class="cf_image">
                                    <img src="../assets/imgs/interior-designer/project-5.jpg" alt="Portfolio Image">
                                </div>
                            </a>
                        </div>

                        <div class="interior-portfolio__content has_fade_anim">
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <h3 class="intDesigner-portfolio__title">Kitchen Room</h3>
                            </a>
                            <p>Natre, New York <br> - 2019</p>
                        </div>
                    </div>
                </div>
                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                    <div class="intDesigner-portfolio__info">
                        <div class="intDesigner-portfolio__thumb">
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <div class="cf_image">
                                    <img src="../assets/imgs/interior-designer/project-2.jpg" alt="Portfolio Image">
                                </div>
                            </a>
                        </div>

                        <div class="interior-portfolio__content has_fade_anim">
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <h3 class="intDesigner-portfolio__title">Bedroom</h3>
                            </a>
                            <p>Natre, New York <br> - 2019</p>
                        </div>
                    </div>
                </div>
                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                    <div class="intDesigner-portfolio__info">
                        <div class="intDesigner-portfolio__thumb">
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <div class="cf_image">
                                    <img src="../assets/imgs/interior-designer/project-4.jpg" alt="Portfolio Image">
                                </div>
                            </a>
                        </div>

                        <div class="interior-portfolio__content has_fade_anim">
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <h3 class="intDesigner-portfolio__title">Dinning Space</h3>
                            </a>
                            <p>Natre, New York <br> - 2019</p>
                        </div>
                    </div>
                </div>
                <div class="intDesigner-portfolio__item anim_img_zoom has_fade_anim">
                    <div class="intDesigner-portfolio__info">
                        <div class="intDesigner-portfolio__thumb">
                            <a href="{{ url('/pages/project-detailscontact') }}">
                                <div class="cf_image">
                                    <img src="../assets/imgs/interior-designer/project-6.jpg" alt="Portfolio Image">
                                </div>
                            </a>
                        </div>
                        <div class="interior-portfolio__content has_fade_anim">
                            <a href="{{ url('/pages/project-detailscontact') }}">
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
                            With over 800 <a href="project.html"><span class="dancer_hover_text"
                                    data-cursor="-exclusion -lg">projects
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
                            <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first"
                                type="button" role="tab" aria-controls="first" aria-selected="true">
                                <div class="intDesigner-service__name has_fade_anim">
                                    <span class="intDesigner-service__number">01</span>
                                    <h3 class="intDesigner-service__title" data-animation="sheen">
                                        Lighting Design</h3>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second"
                                type="button" role="tab" aria-controls="second" aria-selected="false">
                                <div class="intDesigner-service__name has_fade_anim">
                                    <span class="intDesigner-service__number">02</span>
                                    <h3 class="intDesigner-service__title" data-animation="sheen">
                                        Custom Furniture</h3>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third"
                                type="button" role="tab" aria-controls="third" aria-selected="false">
                                <div class="intDesigner-service__name has_fade_anim">
                                    <span class="intDesigner-service__number">03</span>
                                    <h3 class="intDesigner-service__title" data-animation="sheen">
                                        Cabinetry Design</h3>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#fourth"
                                type="button" role="tab" aria-controls="fourth" aria-selected="false">
                                <div class="intDesigner-service__name has_fade_anim">
                                    <span class="intDesigner-service__number">04</span>
                                    <h3 class="intDesigner-service__title" data-animation="sheen">
                                        Artwork Design</h3>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fifth-tab" data-bs-toggle="tab" data-bs-target="#fifth"
                                type="button" role="tab" aria-controls="fifth" aria-selected="false">
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
                                    <div class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                        <img src="../assets/imgs/interior-designer/service-01.jpg" alt="service image">
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
                                    <a href="service-details.html" class="wc-btn-default btn-hover-divide">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                            <div class="intDesigner-service__content">
                                <a href="service-details.html">
                                    <div class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                        <img src="../assets/imgs/interior-designer/service-02.jpg" alt="service image">
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
                                    <a href="service-details.html" class="wc-btn-default btn-hover-divide">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                            <div class="intDesigner-service__content">
                                <a href="service-details.html">
                                    <div class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                        <img src="../assets/imgs/interior-designer/service-03.jpg" alt="service image">
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
                                    <a href="service-details.html" class="wc-btn-default btn-hover-divide">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                            <div class="intDesigner-service__content">
                                <a href="service-details.html">
                                    <div class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                        <img src="../assets/imgs/interior-designer/service-04.jpg" alt="service image">
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
                                    <a href="service-details.html" class="wc-btn-default btn-hover-divide">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fifth" role="tabpanel" aria-labelledby="fifth-tab">
                            <div class="intDesigner-service__content">
                                <a href="service-details.html">
                                    <div class="cf_image intDesigner-service__hoverImg img_anim_reveal">
                                        <img src="../assets/imgs/interior-designer/service-05.jpg" alt="service image">
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
                                    <a href="service-details.html" class="wc-btn-default btn-hover-divide">Know More</a>
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
                        <img src="../assets/imgs/interior-designer/award-badge.png" class="show-dark" alt="image">
                        <img src="../assets/imgs/interior-designer/award-badge-dark.png" class="show-light"
                            alt="image">
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
                        <img src="../assets/imgs/interior-designer/brand-01.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-01-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-02.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-02-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-03.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-03-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-04.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-04-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-05.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-05-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-06.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-06-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-07.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-07-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-08.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-08-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-09.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-09-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-10.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-10-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-11.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-11-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                    <div class="cf_image intDesigner-brand__item">
                        <img src="../assets/imgs/interior-designer/brand-12.png" class="show-dark" alt="brand image">
                        <img src="../assets/imgs/interior-designer/brand-12-dark.png" class="show-light"
                            alt="brand image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brands area end  -->

    <!-- Video area start -->
    <div class="video__full health-video">
        <video src="https://crowdytheme.com/html/info/info-demo/assets/video/interior-designer.mp4" autoplay=""
            loop="" muted=""></video>
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
                    <a href="url('pages/contact')" class="wc-btn-default btn-hover-divide">Contact
                        Me</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end  -->
@endsection
