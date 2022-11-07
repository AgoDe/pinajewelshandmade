<!--Header-->
<div id="header" class="header-17">
    <div class="classicHeader header-main">
        <!--Header-->
        <header class="header-wrap container d-flex align-items-center">
            <div class="row g-0 align-items-center w-100">
                <!--Search Inline-->
                <div class="col-4 col-sm-4 col-md-4 col-lg-5 d-flex">
                    <!--Mobile Toggle-->
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-2 d-lg-none"><i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>
                    <!--End Mobile Toggle-->
                    <!--Search-->
                    <div class="site-search iconset d-lg-none"><i class="icon an an-search-l"></i><span class="tooltip-label">Search</span></div>
                    <!--End Search-->
                    <!--Search Inline-->
                    <form class="form minisearch search-inline d-none d-lg-block" id="header-search1" action="#" method="get">
                        <label class="label d-none"><span>Search</span></label>
                        <div class="control">
                            <div class="searchField d-flex">
                                <div class="input-box d-flex w-100">
                                    <input type="text" name="q" value="" placeholder="Search products" class="input-text rounded-0 border-start-0 border-end-0">
                                    <button type="submit" title="Search" class="action search"><i class="icon an an-search-l"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--End Search Inline-->
                </div>
                <!--End Search Inline-->
                <!--Logo-->
                <div class="col-4 col-sm-4 col-md-4 col-lg-2 d-flex">
                    <div class="logo mx-auto">
                        <a href="/">
                            {{--<img src="assets/images/logo-demo17-1.png" class="logo-img mh-100 default-logo" alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" title="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" width="120" />
                            <img src="assets/images/logo-demo17-2.png" class="logo-img mh-100 sticky-logo" alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" title="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" width="120" />--}}
                            {{--TODO: rivedere logo --}}
                            <span class="logo-txt">Pina Jewels Handmade</span>
                        </a>
                    </div>
                </div>
                <!--End Logo-->
                <!--Right Action-->
                <div class="col-4 col-sm-4 col-md-4 col-lg-5 icons-col text-right d-flex justify-content-end">
                    <!--Wishlist-->
                    <div class="wishlist-link iconset mx-2">
                        <a href="my-wishlist.html"><i class="icon an an-heart-l"></i><span class="wishlist-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">0</span><span class="tooltip-label">Wishlist</span></a>
                    </div>
                    <!--End Wishlist-->



                    <!--Minicart Drawer-->
                    <div class="header-cart iconset mx-2">
                        <a href="cart-style1.html" class="site-header__cart btn-minicart" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                            <i class="icon an an-sq-bag"></i><span class="site-cart-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">2</span><span class="tooltip-label">Cart</span>
                        </a>
                    </div>
                    <!--End Minicart Drawer-->


                    <div class="user-link iconset mx-2"><i class="icon an an-user"></i><span class="tooltip-label">Account</span></div>
                    <div id="userLinks">
                        <ul class="user-links">
                            @guest
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register') }}">Registrati</a></li>
                            @endguest
                            @auth
                            <li><a href="{{route('dashboard') }}">Dashboard</a></li>
                            <li>
                                <form method="post" action="{{route('logout')}}" class="mt-2">
                                    @csrf
                                    <input type="submit" value="Logout">
                                </form>
                            </li>
                            @endauth
                        </ul>
                    </div>

                    <!--Setting Dropdown-->
                    {{--<div class="setting-link iconset pe-0"><i class="icon an an-globe"></i><span class="tooltip-label">Settings</span></div>
                    <div id="settingsBox">
                        <div class="currency-picker">
                            <span class="ttl">Select Currency</span>
                            <ul id="currencies" class="cnrLangList">
                                <li class="selected"><a href="#;" class="active">INR</a></li><li><a href="#;">GBP</a></li><li><a href="#;">CAD</a></li><li><a href="#;">USD</a></li><li><a href="#;">AUD</a></li><li><a href="#;">EUR</a></li><li><a href="#;">JPY</a></li>
                            </ul>
                        </div>
                        <div class="language-picker">
                            <span class="ttl">SELECT LANGUAGE</span>
                            <ul id="language" class="cnrLangList">
                                <li><a href="#" class="active">English</a></li><li><a href="#">French</a></li><li><a href="#">German</a></li>
                            </ul>
                        </div>
                    </div>--}}
                    <!--End Setting Dropdown-->
                </div>
                <!--End Right Action-->
            </div>
        </header>
        <!--End Header-->
        <!--Main Navigation Desktop-->
        <div class="menu-outer">
            <nav class="container">
                <div class="row">
                    <div class="col-1 col-sm-12 col-md-12 col-lg-12 align-self-center d-menu-col">
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav center hidearrow">
                                <li class="lvl1 parent megamenu">
                                    <a href="/">Home</a>
                                </li>
                                <li class="lvl1 parent megamenu">
                                    <a href="{{route('shop.index')}}">Shop </a>
                                </li>
                                <li class="lvl1 parent megamenu">
                                    <a href="{{route('aboutus')}}">Chi siamo</a>
                                </li>
                                <li class="lvl1 parent megamenu">
                                    <a href="#">Lavorazione</a>
                                </li>
                                <li class="lvl1 parent dropdown">
                                    <a href="{{route('contact')}}">Contatti </a>
                                </li>
                                {{--<li class="lvl1 parent dropdown"><a href="#;">Blog <i class="an an-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                        <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                                        <li><a href="blog-masonry.html" class="site-nav">Masonry Blog Style</a></li>
                                        <li><a href="blog-2columns.html" class="site-nav">2 Columns</a></li>
                                        <li><a href="blog-3columns.html" class="site-nav">3 Columns</a></li>
                                        <li><a href="blog-4columns.html" class="site-nav">4 Columns</a></li>
                                        <li><a href="blog-single-post.html" class="site-nav last">Article Page</a></li>
                                    </ul>
                                </li>--}}
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                </div>
            </nav>
        </div>
        <!--End Main Navigation Desktop-->

        <!--Search Popup-->
        <div id="search-popup" class="search-drawer">
            <div class="container">
                <span class="closeSearch an an-times-l"></span>
                <form class="form minisearch" id="header-search" action="#" method="get">
                    <label class="label"><span>Cerca</span></label>
                    <div class="control">
                        <div class="searchField">
                            <div class="input-box">
                                <button type="submit" title="Search" class="action search" disabled=""><i class="icon an an-search-l"></i></button>
                                <input type="text" name="search" value="" placeholder="Cerca prodotto" class="input-text">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--End Search Popup-->
    </div>
</div>
<!--End Header-->

<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Chiudi Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu">
            <a href="/">Home</a>
        </li>
        <li class="lvl1 parent megamenu">
            <a href="{{route('shop.index')}}">Shop</a>
        </li>
        <li class="lvl1 parent megamenu">
            <a href="{{route('aboutus')}}">Chi siamo</a>
        </li>
        <li class="lvl1 parent megamenu">
            <a href="#">Lavorazione</a>
        </li>
        <li class="lvl1 parent megamenu">
            <a href="{{route('contact')}}">Contatti</a>
        </li>
        {{--<li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="an an-plus-l"></i></a>
            <ul>
                <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                <li><a href="blog-masonry.html" class="site-nav">Masonry Blog Style</a></li>
                <li><a href="blog-2columns.html" class="site-nav">2 Columns</a></li>
                <li><a href="blog-3columns.html" class="site-nav">3 Columns</a></li>
                <li><a href="blog-4columns.html" class="site-nav">4 Columns</a></li>
                <li><a href="blog-single-post.html" class="site-nav last">Article Page</a></li>
            </ul>
        </li>--}}
        <li class="acLink"></li>
        @auth
        <li class="help bottom-link"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li>
            <form method="post" action="{{route('logout')}}" class="mt-2">
                @csrf
                <input type="submit" value="Logout">
            </form>
        </li>
        @endauth
        @guest
        <li class="help bottom-link"><a href="{{route('login')}}">Login</a></li>
        <li class="help bottom-link"><a href="{{route('register')}}">Registrazione</a></li>
        @endguest
    </ul>

</div>
<!--End Mobile Menu-->
