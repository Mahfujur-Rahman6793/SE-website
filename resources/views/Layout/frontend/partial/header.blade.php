<!-- Header area start -->
<header class="intDesigner-header pos-abs zi-9">
    <div class="intDesigner-header__inner">
        <div class="intDesigner-header__logo">
            <a href="{{ url('/pages/index-2') }}">
                <img style="width: 100%; height:50px" src="../assets/imgs/interior-designer/logo2.png" alt="Site Logo">
            </a>
        </div>
        <div class="intDesigner-header__nav">
            <nav class="main-menu menu-light">
                <ul>
                    <li><a href="{{ url('/pages/index-2') }}">home</a>
                        <ul class="dp-menu">
                            <li><a href="{{ url('/pages/index-2') }}">Interior Designer</a></li>
                            <li><a
                                    href="https://crowdytheme.com/html/info/info-demo/architect/index-light.html">Architect</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('pages/about') }}">about</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="dp-menu">
                            <li><a href="{{ url('/pages/index-2') }}">home dark</a></li>
                            <li><a href="{{ url('/pages/index-light') }}">home light</a></li>
                            <li><a href=" {{ url('/pages/about') }}">about dark</a></li>
                            <li><a href="{{ url('/pages/about-light') }}">about light</a></li>
                            <li><a href="{{ url('/pages/service') }}">service dark</a></li>
                            <li><a href="{{ url('/pages/service-light') }}">service light</a></li>
                            <li><a href="{{ url('/pages/service-details') }}">service details dark</a>
                            </li>
                            <li><a href="{{ url('/pages/service-details-light') }}">service details
                                    light</a></li>
                            <li><a href="{{ url('/pages/blog') }}">blog dark</a></li>
                            <li><a href="{{ url('/pages/blog-light') }}">blog light</a></li>
                            <li><a href="{{ url('/pages/blog-details') }}">blog details dark</a></li>
                            <li><a href="{{ url('/pages/blog-details-light') }}">blog details
                                    light</a></li>
                            <li><a href="{{ url('/pages/contact') }}">contact dark</a></li>
                            <li><a href="{{ url('/pages/contact-light') }}">contact light</a></li>
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
                    <li><a href="{{ url('/pages/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="intDesigner-header__others">
            <div class="intDesigner-header__navicon">
                <button id="open_offcanvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasOne">
                    <img src="../assets/imgs/interior-designer/bar-light.png" alt="menu bar"></button>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->
