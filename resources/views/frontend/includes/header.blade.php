<header>

    {{-- start topbar --}}
    <div class="top-bar">
        <div class="topbar">
            <div class="container">
                <div class="top-bar-wrapper">
                    <div class="logo">
                        <img src="{{ asset('frontend/assets/images/top-logo.png') }}" alt="" />
                    </div>

                    <div class="top-title">
                        Lorem ipsum dolor sit amet consectetur
                    </div>

                    <div class="social">
                        <ul class="social-list list-unstyled">
                            <li class="item-social"><a class="social-link" href="#"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="item-social"><a class="social-link" href="#"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li class="item-social"><a class="social-link" href="#"><i
                                        class="fa fa-youtube"></i></a></li>
                            <li class="item-social"><a class="social-link" href="#"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="item-social"><a class="social-link" href="#"><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>




            {{-- topbar in small screen --}}
            <div class="top-bar-drawer">
                <div class="container">
                    <div class="topbar-drawer">
                        <div class="logo">
                            <img src="{{ asset('frontend/assets/images/top-logo.png') }}" alt="" />
                        </div>
                        <div class="top-title">
                            @lang('frontend.menu.title')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- navbar --}}

    <div class="nav-bar">

        <div class="nav-mobile">
            <div class="toggle-menu">
                <i class="fa fa-bars togglemenu-open"></i>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 order-md-2 order-3">
                    <nav class="navbar-wrapper">
                        <ul class="navbar-item-list list-unstyled">
                            <li class="item-list active"><a class="item-link" href="">@lang('frontend.menu.home')</a></li>
                            <li class="item-list">
                                <a class="item-link" href="#">@lang('frontend.menu.Category')
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                {{-- submenu --}}
                                <div class="dropdown-submenu-level">
                                    <div class="sub-menu">
                                        <div class="submenu-item">
                                            <ul class="submenu-list list-unstyled">
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.physics')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Scientific')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Human')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.industry')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Arabic')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Maths')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="submenu-item">
                                            <ul class="submenu-list list-unstyled">
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.physics')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Scientific')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Human')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.industry')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Arabic')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Maths')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="submenu-item">
                                            <ul class="submenu-list list-unstyled">
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.physics')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Scientific')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Human')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.industry')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Arabic')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Maths')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="submenu-item">
                                            <ul class="submenu-list list-unstyled">
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.physics')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Scientific')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Human')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.industry')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Arabic')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Maths')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="submenu-item">
                                            <ul class="submenu-list list-unstyled">
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.physics')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Scientific')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Human')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.industry')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Arabic')
                                                    </a>
                                                </li>
                                                <li class="submenu-item-list">
                                                    <a class="submenu-item-link" href="#">
                                                        @lang('frontend.menu.Maths')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item-list"><a class="item-link" href="#">@lang('frontend.menu.Syrian Researchers TV')</a></li>
                            <li class="item-list"><a class="item-link" href="#">@lang('frontend.menu.about')</a></li>
                            <li class="item-list"><a class="item-link" href="./contact.html">@lang('frontend.menu.contact')</a></li>
                            <li class="item-list"><a class="item-link" href="./about.html">@lang('frontend.menu.about us')</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-1 col-6 order-md-3 order-2">
                    <form class="search" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>








    <div class="nav-overlay"></div>
    <div class="nav-drawer">
        <nav class="humberger__menu__nav mobile-menu">
            <div class="logo">
                <img src="{{ asset('frontend/assets/images/top-logo.png') }}" alt="" />
            </div>
            <div class="top-title">
                @lang('frontend.menu.title')
            </div>
        </nav>

        <div id="mobile-menu-wrap"></div>
        <ul class="navbar-item-list list-unstyled">
            <li class="item-list active"><a class="item-link" href="./index.html">Home</a></li>
            <li class="item-list">
                <a class="item-link" href="#">Category
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                {{-- submenu --}}
                <div class="dropdown-submenu-level">
                    <div class="sub-menu">
                        <div class="submenu-item">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.physics')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Scientific')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Human')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.industry')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Arabic')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Maths')
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="submenu-item">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.physics')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Scientific')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Human')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.industry')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Arabic')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Maths')
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="submenu-item">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.physics')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Scientific')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Human')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.industry')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Arabic')
                                    </a>
                                </li>
                                <li class="submenu-item-list">
                                    <a class="submenu-item-link" href="#">
                                        @lang('frontend.menu.Maths')
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </li>
            <li class="item-list"><a class="item-link" href="#">Syrian Researchers TV</a></li>
            <li class="item-list"><a class="item-link" href="#">About</a></li>
            <li class="item-list"><a class="item-link" href="./contact.html">Contact</a></li>
            <li class="item-list"><a class="item-link" href="./about.html">About us</a></li>
        </ul>

        <div class="social">
            <ul class="social-list list-unstyled">
                <li class="item-social"><a class="social-link" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="item-social"><a class="social-link" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li class="item-social"><a class="social-link" href="#"><i class="fa fa-youtube"></i></a></li>
                <li class="item-social"><a class="social-link" href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="item-social"><a class="social-link" href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>

</header>
