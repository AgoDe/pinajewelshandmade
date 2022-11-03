
<!doctype html>
<html lang="en">
<head>
    <!--Required Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="description">
    <!-- Title Of Site -->
    <title>Homepage | Pina Jewels Handmade | il gioiello fatto apposta per te!</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="template-index index-demo17 modal-popup-style">
<!-- Page Loader -->
<div id="pre-loader"><img src="assets/images/loader.gif" alt="Loading..." /></div>
<!-- End Page Loader -->

<!--Page Wrapper-->
<div class="page-wrapper">

    @if(session()->has('success'))
        <div class="top-info-bar style1 d-none d-lg-block d-md-block">
            <div class="topBar-slider-style1 alert fade show" role="alert">
                <div class="item text-uppercase text-center d-flex align-items-center justify-content-center">
                    <div class="promo-counter">{{session('success')}}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="an an-times-l"></i></button>
                </div>
                <div class="item text-center d-flex align-items-center justify-content-center">
                    Arrivederci!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="an an-times-l"></i></button>
                </div>
            </div>
        </div>
    @endif
    <!--End Topbar-->

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
                                    <div class="search-category">
                                        <select id="rgsearch-category1" name="rgsearch[category]" data-default="All Categories" class="">
                                            <option value="00" label="All Categories" selected="selected">All Categories</option>
                                            <optgroup id="rgsearch-shop1" label="Shop">
                                                <option value="0">- All</option>
                                                <option value="1">- Men</option>
                                                <option value="2">- Women</option>
                                                <option value="3">- Shoes</option>
                                                <option value="4">- Blouses</option>
                                                <option value="5">- Pullovers</option>
                                                <option value="6">- Bags</option>
                                                <option value="7">- Accessories</option>
                                            </optgroup>
                                        </select>
                                    </div>
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
                            <a href="index.html">
                                <img src="assets/images/logo-demo17-1.png" class="logo-img mh-100 default-logo" alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" title="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" width="120" />
                                <img src="assets/images/logo-demo17-2.png" class="logo-img mh-100 sticky-logo" alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" title="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" width="120" />
                                <span class="logo-txt d-none">Optimal</span>
                            </a>
                        </div>
                    </div>
                    <!--End Logo-->
                    <!--Right Action-->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-5 icons-col text-right d-flex justify-content-end">
                        <!--Wishlist-->
                        <div class="wishlist-link iconset">
                            <a href="my-wishlist.html"><i class="icon an an-heart-l"></i><span class="wishlist-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">0</span><span class="tooltip-label">Wishlist</span></a>
                        </div>
                        <!--End Wishlist-->
                        <!--Setting Dropdown-->
                        <div class="user-link iconset"><i class="icon an an-user"></i><span class="tooltip-label">Account</span></div>
                        <div id="userLinks">
                            <ul class="user-links">
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="register.html">Sign Up</a></li>
                                <li><a href="my-wishlist.html">Wishlist</a></li>
                                <li><a href="compare-style1.html">Compare</a></li>
                            </ul>
                        </div>
                        <!--End Setting Dropdown-->
                        <!--Minicart Drawer-->
                        <div class="header-cart iconset">
                            <a href="cart-style1.html" class="site-header__cart btn-minicart" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                                <i class="icon an an-sq-bag"></i><span class="site-cart-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">2</span><span class="tooltip-label">Cart</span>
                            </a>
                        </div>
                        <!--End Minicart Drawer-->
                        <!--Setting Dropdown-->
                        <div class="setting-link iconset pe-0"><i class="icon an an-globe"></i><span class="tooltip-label">Settings</span></div>
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
                        </div>
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
                                    <li class="lvl1 parent megamenu"><a href="#;">Home <i class="an an-angle-down-l"></i></a>
                                        <div class="megamenu style1">
                                            <div class="row">
                                                <div class="col-md-8 col-lg-8">
                                                    <div class="row">
                                                        <div class="lvl-1 col-md-5 col-lg-4">
                                                            <a href="#" class="site-nav lvl-1 menu-title">Home Styles</a>
                                                            <ul class="subLinks">
                                                                <li class="lvl-2"><a href="index.html" class="site-nav lvl-2">Home 01 - Default</a></li>
                                                                <li class="lvl-2"><a href="index-demo2.html" class="site-nav lvl-2">Home 02 - Minimal</a></li>
                                                                <li class="lvl-2"><a href="index-demo3.html" class="site-nav lvl-2">Home 03 - Colorful</a></li>
                                                                <li class="lvl-2"><a href="index-demo4.html" class="site-nav lvl-2">Home 04 - Modern</a></li>
                                                                <li class="lvl-2"><a href="index-demo5.html" class="site-nav lvl-2">Home 05 - Kids Clothing</a></li>
                                                                <li class="lvl-2"><a href="index-demo6.html" class="site-nav lvl-2">Home 06 - Single Product</a></li>
                                                                <li class="lvl-2"><a href="index-demo7.html" class="site-nav lvl-2">Home 07 - Glamour</a></li>
                                                                <li class="lvl-2"><a href="index-demo8.html" class="site-nav lvl-2">Home 08 - Simple</a></li>
                                                                <li class="lvl-2"><a href="index-demo9.html" class="site-nav lvl-2">Home 09 - Cool <span class="lbl nm_label1">Hot</span></a></li>
                                                                <li class="lvl-2"><a href="index-demo10.html" class="site-nav lvl-2">Home 10 - Cosmetic</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="lvl-1 col-md-5 col-lg-4">
                                                            <a href="#" class="site-nav lvl-1 menu-title">Home Styles</a>
                                                            <ul class="subLinks">
                                                                <li class="lvl-2"><a href="index-demo11.html" class="site-nav lvl-2">Home 11 - Pets <span class="lbl nm_label3">Popular</span></a></li>
                                                                <li class="lvl-2"><a href="index-demo12.html" class="site-nav lvl-2">Home 12 - Tools & Parts</a></li>
                                                                <li class="lvl-2"><a href="index-demo13.html" class="site-nav lvl-2">Home 13 - Watches <span class="lbl nm_label1">Hot</span></a></li>
                                                                <li class="lvl-2"><a href="index-demo14.html" class="site-nav lvl-2">Home 14 - Food</a></li>
                                                                <li class="lvl-2"><a href="index-demo15.html" class="site-nav lvl-2">Home 15 - Christmas</a></li>
                                                                <li class="lvl-2"><a href="index-demo16.html" class="site-nav lvl-2">Home 16 - Phone Case</a></li>
                                                                <li class="lvl-2"><a href="index-demo17.html" class="site-nav lvl-2">Home 17 - Jewelry</a></li>
                                                                <li class="lvl-2"><a href="index-demo18.html" class="site-nav lvl-2">Home 18 - Bag <span class="lbl nm_label3">Popular</span></a></li>
                                                                <li class="lvl-2"><a href="index-demo19.html" class="site-nav lvl-2">Home 19 - Swimwear</a></li>
                                                                <li class="lvl-2"><a href="index-demo20.html" class="site-nav lvl-2">Home 20 - Furniture <span class="lbl nm_label2">New</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="lvl-1 col-md-5 col-lg-4">
                                                            <a href="#" class="site-nav lvl-1 menu-title">Home Styles</a>
                                                            <ul class="subLinks">
                                                                <li class="lvl-2"><a href="index-demo21.html" class="site-nav lvl-2">Home 21 - Party Supplies <span class="lbl nm_label2">New</span></a></li>
                                                                <li class="lvl-2"><a href="index-demo22.html" class="site-nav lvl-2">Home 22 - Digital <span class="lbl nm_label2">New</span></a></li>
                                                                <li class="lvl-2"><a href="index-demo23.html" class="site-nav lvl-2">Home 23 - Vogue <span class="lbl nm_label2">New</span></a></li>
                                                                <li class="lvl-2"><a href="index-demo24.html" class="site-nav lvl-2">Home 24 - Glamour <span class="lbl nm_label2">New</span></a></li>
                                                            </ul>

                                                            <div class="row mm-Banners mt-3">
                                                                <div class="col-md-12 col-lg-12 imageCol text-center">
                                                                    <div class="menubox position-relative">
                                                                        <a href="index-demo5.html" class="mb-0"><img class="blur-up lazyload" src="assets/images/megamenu/megamenu-banner7.png" data-src="assets/images/megamenu/megamenu-banner7.png" alt="image"/></a>
                                                                        <p class="position-absolute bottom-0 start-50 translate-middle-x"><a href="index-demo5.html" class="title text-uppercase mb-3">Kids Store</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4">
                                                    <div class="row mm-Banners">
                                                        <div class="col-md-12 col-lg-12 imageCol text-center">
                                                            <div class="menubox position-relative">
                                                                <a href="index-demo6.html" class="mb-0"><img class="blur-up lazyload" src="assets/images/megamenu/megamenu-banner8.png" data-src="assets/images/megamenu/megamenu-banner8.png" alt="image"/></a>
                                                                <p class="position-absolute bottom-0 start-50 translate-middle-x"><a href="index-demo6.html" class="title text-uppercase">Single Product Layout</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent megamenu"><a href="#;">Shop <i class="an an-angle-down-l"></i></a>
                                        <div class="megamenu style4">
                                            <div class="row">
                                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Category Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="category-2columns.html" class="site-nav lvl-2">2 Columns with style1</a></li>
                                                        <li class="lvl-2"><a href="category-3columns.html" class="site-nav lvl-2">3 Columns with style2</a></li>
                                                        <li class="lvl-2"><a href="category-4columns.html" class="site-nav lvl-2">4 Columns with style3</a></li>
                                                        <li class="lvl-2"><a href="category-5columns.html" class="site-nav lvl-2">5 Columns with style4</a></li>
                                                        <li class="lvl-2"><a href="category-6columns.html" class="site-nav lvl-2">6 Columns with Fullwidth</a></li>
                                                        <li class="lvl-2"><a href="category-7columns.html" class="site-nav lvl-2">7 Columns</a></li>
                                                        <li class="lvl-2"><a href="empty-category.html" class="site-nav lvl-2">Category Empty</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Shop Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2">Left Sidebar</a></li>
                                                        <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">Right Sidebar</a></li>
                                                        <li class="lvl-2"><a href="shop-top-filter.html" class="site-nav lvl-2">Top Filter</a></li>
                                                        <li class="lvl-2"><a href="shop-fullwidth.html" class="site-nav lvl-2">Fullwidth</a></li>
                                                        <li class="lvl-2"><a href="shop-no-sidebar.html" class="site-nav lvl-2">Without Filter</a></li>
                                                        <li class="lvl-2"><a href="shop-listview-sidebar.html" class="site-nav lvl-2">List View</a></li>
                                                        <li class="lvl-2"><a href="shop-listview-drawer.html" class="site-nav lvl-2">List View Drawer</a></li>
                                                        <li class="lvl-2"><a href="shop-category-slideshow.html" class="site-nav lvl-2">Category Slideshow</a></li>
                                                        <li class="lvl-2"><a href="shop-heading-with-banner.html" class="site-nav lvl-2">Headings With Banner</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Shop Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="shop-sub-collections.html" class="site-nav lvl-2">Sub Collection List <span class="lbl nm_label5">Hot</span></a></li>
                                                        <li class="lvl-2"><a href="shop-masonry-grid.html" class="site-nav lvl-2">Shop Masonry Grid</a></li>
                                                        <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2">Shop Countdown</a></li>
                                                        <li class="lvl-2"><a href="shop-hover-info.html" class="site-nav lvl-2">Shop Hover Info</a></li>
                                                        <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">Infinite Scrolling</a></li>
                                                        <li class="lvl-2"><a href="shop-fullwidth.html" class="site-nav lvl-2">Classic Pagination</a></li>
                                                        <li class="lvl-2"><a href="shop-swatches-style.html" class="site-nav lvl-2">Swatches Style</a></li>
                                                        <li class="lvl-2"><a href="shop-grid-style.html" class="site-nav lvl-2">Grid Style</a></li>
                                                        <li class="lvl-2"><a href="shop-search-results.html" class="site-nav lvl-2">Search Results</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Shop Other Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="my-wishlist.html" class="site-nav lvl-2">My Wishlist Style1</a></li>
                                                        <li class="lvl-2"><a href="my-wishlist-style2.html" class="site-nav lvl-2">My Wishlist Style2</a></li>
                                                        <li class="lvl-2"><a href="compare-style1.html" class="site-nav lvl-2">Compare Page Style1</a></li>
                                                        <li class="lvl-2"><a href="compare-style2.html" class="site-nav lvl-2">Compare Page Style2</a></li>
                                                        <li class="lvl-2"><a href="cart-style1.html" class="site-nav lvl-2">Cart Page Style1</a></li>
                                                        <li class="lvl-2"><a href="cart-style2.html" class="site-nav lvl-2">Cart Page Style2</a></li>
                                                        <li class="lvl-2"><a href="checkout-style1.html" class="site-nav lvl-2">Checkout Page Style1</a></li>
                                                        <li class="lvl-2"><a href="checkout-style2.html" class="site-nav lvl-2">Checkout Page Style2</a></li>
                                                        <li class="lvl-2"><a href="checkout-success.html" class="site-nav lvl-2">Checkout Success</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row clear mt-4">
                                                <div class="col-md-3 col-lg-3">
                                                    <a href="shop-left-sidebar.html"><img src="assets/images/megamenu/megamenu-banner4-1.jpg" data-src="assets/images/megamenu/megamenu-banner4-1.jpg" alt="image"/></a>
                                                </div>
                                                <div class="col-md-3 col-lg-3">
                                                    <a href="shop-left-sidebar.html"><img src="assets/images/megamenu/megamenu-banner4-2.jpg" data-src="assets/images/megamenu/megamenu-banner4-2.jpg" alt="image"/></a>
                                                </div>
                                                <div class="col-md-3 col-lg-3">
                                                    <a href="shop-left-sidebar.html"><img src="assets/images/megamenu/megamenu-banner4-3.jpg" data-src="assets/images/megamenu/megamenu-banner4-3.jpg" alt="image"/></a>
                                                </div>
                                                <div class="col-md-3 col-lg-3">
                                                    <a href="shop-left-sidebar.html"><img src="assets/images/megamenu/megamenu-banner4-4.jpg" data-src="assets/images/megamenu/megamenu-banner4-4.jpg" alt="image"/></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent megamenu"><a href="#;">Product <i class="an an-angle-down-l"></i></a>
                                        <div class="megamenu style2">
                                            <div class="row">
                                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Product Types</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-standard.html" class="site-nav lvl-2">Simple Product</a></li>
                                                        <li class="lvl-2"><a href="product-variable.html" class="site-nav lvl-2">Variable Product</a></li>
                                                        <li class="lvl-2"><a href="product-grouped.html" class="site-nav lvl-2">Grouped Product</a></li>
                                                        <li class="lvl-2"><a href="product-external-affiliate.html" class="site-nav lvl-2">External / Affiliate Product</a></li>
                                                        <li class="lvl-2"><a href="product-outofstock.html" class="site-nav lvl-2">Out Of Stock Product</a></li>
                                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav lvl-2">New Product</a></li>
                                                        <li class="lvl-2"><a href="product-layout2.html" class="site-nav lvl-2">Sale Product</a></li>
                                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav lvl-2">Variable Image</a></li>
                                                        <li class="lvl-2"><a href="product-accordian.html" class="site-nav lvl-2">Variable Select</a></li>
                                                        <li class="lvl-2"><a href="prodcut-360-degree-view.html" class="site-nav lvl-2">360 Degree view</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Product Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav lvl-2">Product Layout1</a></li>
                                                        <li class="lvl-2"><a href="product-layout2.html" class="site-nav lvl-2">Product Layout2</a></li>
                                                        <li class="lvl-2"><a href="product-layout3.html" class="site-nav lvl-2">Product Layout3</a></li>
                                                        <li class="lvl-2"><a href="product-layout4.html" class="site-nav lvl-2">Product Layout4</a></li>
                                                        <li class="lvl-2"><a href="product-layout5.html" class="site-nav lvl-2">Product Layout5</a></li>
                                                        <li class="lvl-2"><a href="product-layout6.html" class="site-nav lvl-2">Product Layout6</a></li>
                                                        <li class="lvl-2"><a href="product-layout7.html" class="site-nav lvl-2">Product Layout7</a></li>
                                                        <li class="lvl-2"><a href="product-accordian.html" class="site-nav lvl-2">Product Accordian</a></li>
                                                        <li class="lvl-2"><a href="product-tabs-left.html" class="site-nav lvl-2">Product Tabs Left</a></li>
                                                        <li class="lvl-2"><a href="product-tabs-center.html" class="site-nav lvl-2">Product Tabs Center</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Top Brands</a>
                                                    <div class="menu-brand-logo">
                                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo1.png" alt="image"/></a>
                                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo2.png" alt="image"/></a>
                                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo3.png" alt="image"/></a>
                                                    </div>
                                                    <div class="menu-brand-logo">
                                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo4.png" alt="image"/></a>
                                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo5.png" alt="image"/></a>
                                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo6.png" alt="image"/></a>
                                                    </div>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3 p-0">
                                                    <a href="shop-left-sidebar.html"><img src="assets/images/megamenu/megamenu-banner3.jpg" alt="image"/></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent megamenu"><a href="#">Features <i class="an an-angle-down-l"></i><span class="navLbl new">New</span></a>
                                        <div class="megamenu style4">
                                            <div class="row shop-grid-5">
                                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Vendor Pages</a>
                                                    <ul class="subLinks">
                                                        <li><a href="vendor-dashboard.html" class="site-nav">Vendor Dashboard</a></li>
                                                        <li><a href="vendor-profile.html" class="site-nav">Vendor Profile</a></li>
                                                        <li><a href="vendor-uploads.html" class="site-nav">Vendor Uploads</a></li>
                                                        <li><a href="vendor-tracking.html" class="site-nav">Vendor Tracking</a></li>
                                                        <li><a href="vendor-service.html" class="site-nav">Vendor Service</a></li>
                                                        <li><a href="vendor-settings.html" class="site-nav last">Vendor Settings</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Email Template</a>
                                                    <ul class="subLinks">
                                                        <li><a target="_blank" href="email-template/email-order-success1.html" class="site-nav">Order Success 1</a></li>
                                                        <li><a target="_blank" href="email-template/email-order-success2.html" class="site-nav">Order Success 2</a></li>
                                                        <li><a target="_blank" href="email-template/email-invoice-template1.html" class="site-nav">Invoice Template 1</a></li>
                                                        <li><a target="_blank" href="email-template/email-invoice-template2.html" class="site-nav last">Invoice Template 2</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Email Template</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a target="_blank" href="email-template/email-forgot-password.html" class="site-nav">Mail Reset password</a></li>
                                                        <li class="lvl-2"><a target="_blank" href="email-template/email-confirmation.html" class="site-nav">Mail Confirmation</a></li>
                                                        <li class="lvl-2"><a target="_blank" href="email-template/email-promotional1.html" class="site-nav">Mail Promotional 1</a></li>
                                                        <li class="lvl-2"><a target="_blank" href="email-template/email-promotional2.html" class="site-nav last">Mail Promotional 2</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Elements</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="elements-typography.html" class="site-nav lvl-2">Typography</a></li>
                                                        <li class="lvl-2"><a href="elements-buttons.html" class="site-nav lvl-2">Buttons</a></li>
                                                        <li class="lvl-2"><a href="elements-titles.html" class="site-nav lvl-2">Titles</a></li>
                                                        <li class="lvl-2"><a href="elements-banner-styles.html" class="site-nav lvl-2">Banner Styles</a></li>
                                                        <li class="lvl-2"><a href="elements-testimonial.html" class="site-nav lvl-2">Testimonial</a></li>
                                                        <li class="lvl-2"><a href="elements-accordions.html" class="site-nav lvl-2">Accordions</a></li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Elements</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="elements-icons.html" class="site-nav lvl-2">Icons</a></li>
                                                        <li class="lvl-2"><a href="elements-blog-posts.html" class="site-nav lvl-2">Blog Posts</a></li>
                                                        <li class="lvl-2"><a href="elements-product.html" class="site-nav lvl-2">Product</a></li>
                                                        <li class="lvl-2"><a href="elements-product-tab.html" class="site-nav lvl-2">Product Tab</a></li>
                                                        <li class="lvl-2"><a href="elements-top-info-bar.html" class="site-nav lvl-2">Top Info Bar</a></li>
                                                        <li class="lvl-2"><a href="elements-top-promo-bar.html" class="site-nav lvl-2">Top Promo Bar</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row clear mt-4">
                                                <div class="col-md-3 col-lg-3">
                                                    <img src="assets/images/megamenu/megamenu-store.png" data-src="assets/images/megamenu/megamenu-store.png" alt="image"/>
                                                </div>
                                                <div class="col-md-3 col-lg-3">
                                                    <img src="assets/images/megamenu/megamenu-elements.png" data-src="assets/images/megamenu/megamenu-elements.png" alt="image"/>
                                                </div>
                                                <div class="col-md-3 col-lg-3">
                                                    <img src="assets/images/megamenu/megamenu-pages.png" data-src="assets/images/megamenu/megamenu-pages.png" alt="image"/>
                                                </div>
                                                <div class="col-md-3 col-lg-3">
                                                    <img src="assets/images/megamenu/megamenu-fast.png" data-src="assets/images/megamenu/megamenu-fast.png" alt="image"/>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent dropdown"><a href="#;">Pages <i class="an an-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="aboutus-style1.html" class="site-nav">About Us <i class="an an-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                                                    <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                                                    <li><a href="aboutus-style3.html" class="site-nav last">About Us Style3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="an an-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                                                    <li><a href="contact-style2.html" class="site-nav last">Contact Us Style2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="lookbook-2columns.html" class="site-nav">Lookbook <i class="an an-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="lookbook-2columns.html" class="site-nav">2 Columns</a></li>
                                                    <li><a href="lookbook-3columns.html" class="site-nav">3 Columns</a></li>
                                                    <li><a href="lookbook-4columns.html" class="site-nav">4 Columns</a></li>
                                                    <li><a href="lookbook-5columns.html" class="site-nav">5 Columns + Fullwidth</a></li>
                                                    <li><a href="lookbook-shop.html" class="site-nav last">Lookbook Shop</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="faqs-style1.html" class="site-nav">FAQs <i class="an an-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="faqs-style1.html" class="site-nav">FAQs Style1</a></li>
                                                    <li><a href="faqs-style2.html" class="site-nav last">FAQs Style2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="brands-style1.html" class="site-nav">Brands <i class="an an-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="brands-style1.html" class="site-nav">Brands Style1</a></li>
                                                    <li><a href="brands-style2.html" class="site-nav last">Brands Style2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="my-account.html" class="site-nav">My Account <i class="an an-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="my-account.html" class="site-nav">My Account</a></li>
                                                    <li><a href="login-sliding-style.html" class="site-nav">Login Sliding Slideshow</a></li>
                                                    <li><a href="login.html" class="site-nav">Login</a></li>
                                                    <li><a href="register.html" class="site-nav">Register</a></li>
                                                    <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                                                    <li><a href="change-password.html" class="site-nav last">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="site-nav">Empty Pages <i class="an an-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="empty-category.html" class="site-nav">Empty Category</a></li>
                                                    <li><a href="empty-cart.html" class="site-nav">Empty Cart</a></li>
                                                    <li><a href="empty-compare.html" class="site-nav">Empty Compare</a></li>
                                                    <li><a href="empty-wishlist.html" class="site-nav">Empty Wishlist</a></li>
                                                    <li><a href="empty-search.html" class="site-nav last">Empty Search</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="error-404.html" class="site-nav">Error 404 </a></li>
                                            <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                                            <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                                            <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label2">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl1 parent dropdown"><a href="#;">Blog <i class="an an-angle-down-l"></i></a>
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
                                    </li>
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
                        <label class="label"><span>Search</span></label>
                        <div class="control">
                            <div class="searchField">
                                <div class="search-category">
                                    <select id="rgsearch-category" name="rgsearch[category]" data-default="All Categories">
                                        <option value="00" label="All Categories" selected="selected">All Categories</option>
                                        <optgroup id="rgsearch-shop" label="Shop">
                                            <option value="0">- All</option>
                                            <option value="1">- Men</option>
                                            <option value="2">- Women</option>
                                            <option value="3">- Shoes</option>
                                            <option value="4">- Blouses</option>
                                            <option value="5">- Pullovers</option>
                                            <option value="6">- Bags</option>
                                            <option value="7">- Accessories</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <button type="submit" title="Search" class="action search" disabled=""><i class="icon an an-search-l"></i></button>
                                    <input type="text" name="q" value="" placeholder="Search by keyword or #" class="input-text">
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
        <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
            <li class="lvl1 parent megamenu"><a href="index.html">Home <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                        <ul>
                            <li class="lvl-2"><a href="index.html" class="site-nav">Home 01 - Default</a></li>
                            <li class="lvl-2"><a href="index-demo2.html" class="site-nav">Home 02 - Minimal</a></li>
                            <li class="lvl-2"><a href="index-demo3.html" class="site-nav">Home 03 - Colorful</a></li>
                            <li class="lvl-2"><a href="index-demo4.html" class="site-nav">Home 04 - Modern</a></li>
                            <li class="lvl-2"><a href="index-demo5.html" class="site-nav">Home 05 - Kids Clothing</a></li>
                            <li class="lvl-2"><a href="index-demo6.html" class="site-nav">Home 06 - Single Product</a></li>
                            <li class="lvl-2"><a href="index-demo7.html" class="site-nav">Home 07 - Glamour</a></li>
                            <li class="lvl-2"><a href="index-demo8.html" class="site-nav">Home 08 - Simple</a></li>
                            <li class="lvl-2"><a href="index-demo9.html" class="site-nav">Home 09 - Cool <span class="lbl nm_label1">Hot</span></a></li>
                            <li class="lvl-2"><a href="index-demo10.html" class="site-nav last">Home 10 - Cosmetic</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                        <ul>
                            <li class="lvl-2"><a href="index-demo11.html" class="site-nav">Home 11 - Pets <span class="lbl nm_label3">Popular</span></a></li>
                            <li class="lvl-2"><a href="index-demo12.html" class="site-nav">Home 12 - Tools & Parts</a></li>
                            <li class="lvl-2"><a href="index-demo13.html" class="site-nav">Home 13 - Watches <span class="lbl nm_label1">Hot</span></a></li>
                            <li class="lvl-2"><a href="index-demo14.html" class="site-nav">Home 14 - Food</a></li>
                            <li class="lvl-2"><a href="index-demo15.html" class="site-nav">Home 15 - Christmas</a></li>
                            <li class="lvl-2"><a href="index-demo16.html" class="site-nav">Home 16 - Phone Case</a></li>
                            <li class="lvl-2"><a href="index-demo17.html" class="site-nav">Home 17 - Jewelry</a></li>
                            <li class="lvl-2"><a href="index-demo18.html" class="site-nav">Home 18 - Bag <span class="lbl nm_label3">Popular</span></a></li>
                            <li class="lvl-2"><a href="index-demo19.html" class="site-nav">Home 19 - Swimwear</a></li>
                            <li class="lvl-2"><a href="index-demo20.html" class="site-nav last">Home 20 - Furniture <span class="lbl nm_label2">New</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                        <ul>
                            <li class="lvl-2"><a href="index-demo21.html" class="site-nav">Home 21 - Party Supplies <span class="lbl nm_label2">New</span></a></li>
                            <li class="lvl-2"><a href="index-demo22.html" class="site-nav">Home 22 - Digital <span class="lbl nm_label2">New</span></a></li>
                            <li class="lvl-2"><a href="index-demo23.html" class="site-nav">Home 23 - Vogue <span class="lbl nm_label2">New</span></a></li>
                            <li class="lvl-2"><a href="index-demo24.html" class="site-nav last">Home 24 - Glamour <span class="lbl nm_label2">New</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Shop <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="#" class="site-nav">Category Page <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="category-2columns.html" class="site-nav">2 Columns with style1</a></li>
                            <li><a href="category-3columns.html" class="site-nav">3 Columns with style2</a></li>
                            <li><a href="category-4columns.html" class="site-nav">4 Columns with style3</a></li>
                            <li><a href="category-5columns.html" class="site-nav">5 Columns with style4</a></li>
                            <li><a href="category-6columns.html" class="site-nav">6 Columns with Fullwidth</a></li>
                            <li><a href="category-7columns.html" class="site-nav">7 Columns</a></li>
                            <li><a href="empty-category.html" class="site-nav last">Category Empty</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Shop Page <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                            <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                            <li><a href="shop-top-filter.html" class="site-nav">Top Filter</a></li>
                            <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                            <li><a href="shop-no-sidebar.html" class="site-nav">Without Filter</a></li>
                            <li><a href="shop-listview-sidebar.html" class="site-nav">List View</a></li>
                            <li><a href="shop-listview-drawer.html" class="site-nav">List View Drawer</a></li>
                            <li><a href="shop-category-slideshow.html" class="site-nav">Category Slideshow</a></li>
                            <li><a href="shop-heading-with-banner.html" class="site-nav last">Headings With Banner</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Shop Page <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="shop-sub-collections.html" class="site-nav">Sub Collection List <span class="lbl nm_label5">Hot</span></a></li>
                            <li><a href="shop-masonry-grid.html" class="site-nav">Shop Masonry Grid</a></li>
                            <li><a href="shop-left-sidebar.html" class="site-nav">Shop Countdown</a></li>
                            <li><a href="shop-hover-info.html" class="site-nav">Shop Hover Info</a></li>
                            <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>
                            <li><a href="shop-fullwidth.html" class="site-nav">Classic Pagination</a></li>
                            <li><a href="shop-swatches-style.html" class="site-nav">Swatches Style</a></li>
                            <li><a href="shop-grid-style.html" class="site-nav">Grid Style</a></li>
                            <li><a href="shop-search-results.html" class="site-nav last">Search Results</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Shop Other Page <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="my-wishlist.html" class="site-nav">My Wishlist Style1</a></li>
                            <li><a href="my-wishlist-style2.html" class="site-nav">My Wishlist Style2</a></li>
                            <li><a href="compare-style1.html" class="site-nav">Compare Page Style1</a></li>
                            <li><a href="compare-style2.html" class="site-nav">Compare Page Style2</a></li>
                            <li><a href="cart-style1.html" class="site-nav">Cart Page Style1</a></li>
                            <li><a href="cart-style2.html" class="site-nav">Cart Page Style2</a></li>
                            <li><a href="checkout-style1.html" class="site-nav">Checkout Page Style1</a></li>
                            <li><a href="checkout-style2.html" class="site-nav">Checkout Page Style2</a></li>
                            <li><a href="checkout-success.html" class="site-nav last">Checkout Success</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Product <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="product-standard.html" class="site-nav">Product Types<i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="product-standard.html" class="site-nav">Simple Product</a></li>
                            <li><a href="product-variable.html" class="site-nav">Variable Product</a></li>
                            <li><a href="product-grouped.html" class="site-nav">Grouped Product</a></li>
                            <li><a href="product-external-affiliate.html" class="site-nav">External / Affiliate Product</a></li>
                            <li><a href="product-outofstock.html" class="site-nav">Out Of Stock Product</a></li>
                            <li><a href="product-layout1.html" class="site-nav">New Product</a></li>
                            <li><a href="product-layout2.html" class="site-nav">Sale Product</a></li>
                            <li><a href="product-layout1.html" class="site-nav">Variable Image</a></li>
                            <li><a href="product-accordian.html" class="site-nav">Variable Select</a></li>
                            <li><a href="prodcut-360-degree-view.html" class="site-nav last">360 Degree view</a></li>
                        </ul>
                    </li>
                    <li><a href="product-layout1.html" class="site-nav">Product Page Types <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="product-layout1.html" class="site-nav">Product Layout1</a></li>
                            <li><a href="product-layout2.html" class="site-nav">Product Layout2</a></li>
                            <li><a href="product-layout3.html" class="site-nav">Product Layout3</a></li>
                            <li><a href="product-layout4.html" class="site-nav">Product Layout4</a></li>
                            <li><a href="product-layout5.html" class="site-nav">Product Layout5</a></li>
                            <li><a href="product-layout6.html" class="site-nav">Product Layout6</a></li>
                            <li><a href="product-layout7.html" class="site-nav">Product Layout7</a></li>
                            <li><a href="product-accordian.html" class="site-nav">Product Accordian</a></li>
                            <li><a href="product-tabs-left.html" class="site-nav">Product Tabs Left</a></li>
                            <li><a href="product-tabs-center.html" class="site-nav last">Product Tabs Center</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Features <i class="an an-plus-l"></i><span class="lbl nm_label1">New</span></a>
                <ul>
                    <li><a href="#" class="site-nav">Vendor Pages <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="vendor-dashboard.html" class="site-nav">Vendor Dashboard</a></li>
                            <li><a href="vendor-profile.html" class="site-nav">Vendor Profile</a></li>
                            <li><a href="vendor-uploads.html" class="site-nav">Vendor Uploads</a></li>
                            <li><a href="vendor-tracking.html" class="site-nav">Vendor Tracking</a></li>
                            <li><a href="vendor-service.html" class="site-nav">Vendor Service</a></li>
                            <li><a href="vendor-settings.html" class="site-nav last">Vendor Settings</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Email Template <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a target="_blank" href="email-template/email-order-success1.html" class="site-nav">Order Success 1</a></li>
                            <li><a target="_blank" href="email-template/email-order-success2.html" class="site-nav">Order Success 2</a></li>
                            <li><a target="_blank" href="email-template/email-invoice-template1.html" class="site-nav">Invoice Template 1</a></li>
                            <li><a target="_blank" href="email-template/email-invoice-template2.html" class="site-nav last">Invoice Template 2</a></li>
                            <li><a target="_blank" href="email-template/email-forgot-password.html" class="site-nav">Mail Reset password</a></li>
                            <li><a target="_blank" href="email-template/email-confirmation.html" class="site-nav">Mail Confirmation</a></li>
                            <li><a target="_blank" href="email-template/email-promotional1.html" class="site-nav">Mail Promotional 1</a></li>
                            <li><a target="_blank" href="email-template/email-promotional2.html" class="site-nav last">Mail Promotional 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Elements <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="elements-typography.html" class="site-nav">Typography</a></li>
                            <li><a href="elements-buttons.html" class="site-nav">Buttons</a></li>
                            <li><a href="elements-titles.html" class="site-nav">Titles</a></li>
                            <li><a href="elements-banner-styles.html" class="site-nav">Banner Styles</a></li>
                            <li><a href="elements-testimonial.html" class="site-nav">Testimonial</a></li>
                            <li><a href="elements-accordions.html" class="site-nav">Accordions</a></li>
                            <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                            <li><a href="elements-blog-posts.html" class="site-nav">Blog Posts</a></li>
                            <li><a href="elements-product.html" class="site-nav">Product</a></li>
                            <li><a href="elements-product-tab.html" class="site-nav">Product Tab</a></li>
                            <li><a href="elements-top-info-bar.html" class="site-nav">Top Info Bar</a></li>
                            <li><a href="elements-top-promo-bar.html" class="site-nav last">Top Promo Bar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Pages <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="aboutus-style1.html" class="site-nav">About Us <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                            <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                            <li><a href="aboutus-style3.html" class="site-nav last">About Us Style3</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                            <li><a href="contact-style2.html" class="site-nav last">Contact Us Style2</a></li>
                        </ul>
                    </li>
                    <li><a href="lookbook-2columns.html" class="site-nav">Lookbook <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="lookbook-2columns.html" class="site-nav">2 Columns</a></li>
                            <li><a href="lookbook-3columns.html" class="site-nav">3 Columns</a></li>
                            <li><a href="lookbook-4columns.html" class="site-nav">4 Columns</a></li>
                            <li><a href="lookbook-5columns.html" class="site-nav">5 Columns + Fullwidth</a></li>
                            <li><a href="lookbook-shop.html" class="site-nav last">Lookbook Shop</a></li>
                        </ul>
                    </li>
                    <li><a href="faqs-style1.html" class="site-nav">FAQs <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="faqs-style1.html" class="site-nav">FAQs Style1</a></li>
                            <li><a href="faqs-style2.html" class="site-nav last">FAQs Style2</a></li>
                        </ul>
                    </li>
                    <li><a href="brands-style1.html" class="site-nav">Brands <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="brands-style1.html" class="site-nav">Brands Style1</a></li>
                            <li><a href="brands-style2.html" class="site-nav last">Brands Style2</a></li>
                        </ul>
                    </li>
                    <li><a href="my-account.html" class="site-nav">My Account <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="my-account.html" class="site-nav">My Account</a></li>
                            <li><a href="login-sliding-style.html" class="site-nav">Login Sliding Slideshow</a></li>
                            <li><a href="login.html" class="site-nav">Login</a></li>
                            <li><a href="register.html" class="site-nav">Register</a></li>
                            <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                            <li><a href="change-password.html" class="site-nav last">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Empty Pages <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="empty-category.html" class="site-nav">Empty Category</a></li>
                            <li><a href="empty-cart.html" class="site-nav">Empty Cart</a></li>
                            <li><a href="empty-compare.html" class="site-nav">Empty Compare</a></li>
                            <li><a href="empty-wishlist.html" class="site-nav">Empty Wishlist</a></li>
                            <li><a href="empty-search.html" class="site-nav last">Empty Search</a></li>
                        </ul>
                    </li>
                    <li><a href="error-404.html" class="site-nav">Error 404 </a></li>
                    <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                    <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                    <li><a href="coming-soon.html" class="site-nav last">Coming soon <span class="lbl nm_label2">New</span></a></li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="an an-plus-l"></i></a>
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
            </li>
            <li class="acLink"></li>
            <li class="lvl1 bottom-link"><a href="login.html">Login</a></li>
            <li class="lvl1 bottom-link"><a href="register.html">Signup</a></li>
            <li class="lvl1 bottom-link"><a href="my-wishlist.html">Wishlist</a></li>
            <li class="lvl1 bottom-link"><a href="compare-style1.html">Compare</a></li>
            <li class="help bottom-link"><b>NEED HELP?</b><br>Call: +41 525 523 5687</li>
        </ul>
    </div>
    <!--End Mobile Menu-->

    <!--Page Wrapper-->
    <div id="page-content">
        <!--Home Video-->
        <section class="slideshow slideshow-wrapper p-0">
            <div class="home-slideshow">
                <div class="slide slide-video slide-media">
                    <video loop="" muted="" preload="metadata" autoplay>
                        <source src="assets/video/jewelry.mp4" type="video/mp4">
                    </video>
                    <div class="container">
                        <div class="slideshow-content slideshow-overlay bottom-middle d-flex justify-content-center align-items-center">
                            <div class="slideshow-content-in text-center">
                                <div class="wrap-caption animation style1 whiteText px-2">
                                    <h1 class="h1 mega-title ss-mega-title text-capitalize">Thoughtful Designs, <br>Responsible Craftsmanship</h1>
                                    <span class="mega-subtitle ss-sub-title d-md-block d-lg-block d-none">Exceptional quality, ethically sourced, and mindfully made.</span>
                                    <div class="ss-btnWrap d-flex-center justify-content-center mt-3 mt-md-0">
                                        <a class="btn btn-outline-primary btn-lg" href="shop-left-sidebar.html">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Home Video-->

        <!--Store Feature-->
        <section class="section store-features style4">
            <div class="container">
                <div class="section-header style1">
                    <h2 class="text-transform-none">Shop Diamonds by Shape</h2>
                </div>
                <div class="row store-info">
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex flex-column align-items-center text-center mb-4 mb-lg-0">
                        <img class="feature-icon blur-up lazyload" data-src="assets/images/icon-img/demo17-round.png" src="assets/images/icon-img/demo17-round.png" alt="image" width="45" />
                        <div class="detail mt-2 pt-1">
                            <p class="fw-600">ROUND</p>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex flex-column align-items-center text-center mb-4 mb-lg-0">
                        <img class="feature-icon blur-up lazyload" data-src="assets/images/icon-img/demo17-heart.png" src="assets/images/icon-img/demo17-heart.png" alt="image" width="45" />
                        <div class="detail mt-2 pt-1">
                            <p class="fw-600">HEART</p>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex flex-column align-items-center text-center mb-4 mb-lg-0">
                        <img class="feature-icon blur-up lazyload" data-src="assets/images/icon-img/demo17-emerald.png" src="assets/images/icon-img/demo17-emerald.png" alt="image" width="45" />
                        <div class="detail mt-2 pt-1">
                            <p class="fw-600">EMERALD</p>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex flex-column align-items-center text-center mb-4 mb-lg-0">
                        <img class="feature-icon blur-up lazyload" data-src="assets/images/icon-img/demo17-ovel.png" src="assets/images/icon-img/demo17-ovel.png" alt="image" width="45" />
                        <div class="detail mt-2 pt-1">
                            <p class="fw-600">OVAL</p>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex flex-column align-items-center text-center mb-4 mb-sm-0">
                        <img class="feature-icon blur-up lazyload" data-src="assets/images/icon-img/demo17-pear.png" src="assets/images/icon-img/demo17-pear.png" alt="image" width="45" />
                        <div class="detail mt-2 pt-1">
                            <p class="fw-600">PEAR</p>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex flex-column align-items-center text-center mb-4 mb-sm-0">
                        <img class="feature-icon blur-up lazyload" data-src="assets/images/icon-img/demo17-radiant.png" src="assets/images/icon-img/demo17-radiant.png" alt="image" width="45" />
                        <div class="detail mt-2 pt-1">
                            <p class="fw-600">RADIANT</p>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex flex-column align-items-center text-center mb-0 mb-sm-0">
                        <img class="feature-icon blur-up lazyload" data-src="assets/images/icon-img/demo17-princess.png" src="assets/images/icon-img/demo17-princess.png" alt="image" width="45" />
                        <div class="detail mt-2 pt-1">
                            <p class="fw-600">PRINCESS</p>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex flex-column align-items-center text-center mb-0 mb-sm-0">
                        <img class="feature-icon blur-up lazyload" data-src="assets/images/icon-img/demo17-cusion.png" src="assets/images/icon-img/demo17-cusion.png" alt="image" width="45" />
                        <div class="detail mt-2 pt-1">
                            <p class="fw-600">CUSHION</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Store Feature-->

        <!--Collections Grid-->
        <section class="section collection-grids pb-0">
            <div class="container">
                <div class="section-header style1">
                    <h2 class="text-transform-none">Featured Collections</h2>
                    <p>Let's take a glimpse of our trending collections before diving in! <br><br> -----</p>
                </div>
                <div class="row grid-categorys">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 category-grid-item mb-3 mb-sm-0">
                        <div class="category-item zoomscal-hov">
                            <a href="shop-left-sidebar.html" class="category-link text-center clr-none">
                                <div class="zoom-scal"><img class="blur-up lazyload" data-src="assets/images/collection/demo17-banner1.jpg" src="assets/images/collection/demo17-banner1.jpg" alt="collection" title="" /></div>
                                <div class="details text-center">
                                    <div class="inner">
                                        <h3 class="category-title">Starlet Collection</h3>
                                        <p class="mt-2">Introducing our first teen collection</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 category-grid-item mb-3 mb-sm-0">
                        <div class="category-item zoomscal-hov">
                            <a href="shop-left-sidebar.html" class="category-link text-center clr-none">
                                <div class="zoom-scal"><img class="blur-up lazyload" data-src="assets/images/collection/demo17-banner2.jpg" src="assets/images/collection/demo17-banner2.jpg" alt="collection" title="" /></div>
                                <div class="details text-center">
                                    <div class="inner">
                                        <h3 class="category-title">Platinum Jewellery</h3>
                                        <p class="mt-2">Mark of pure love</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 category-grid-item">
                        <div class="category-item zoomscal-hov">
                            <a href="shop-left-sidebar.html" class="category-link text-center clr-none">
                                <div class="zoom-scal"><img class="blur-up lazyload" data-src="assets/images/collection/demo17-banner3.jpg" src="assets/images/collection/demo17-banner3.jpg" alt="collection" title="" /></div>
                                <div class="details text-center">
                                    <div class="inner">
                                        <h3 class="category-title">Gold Jewellery</h3>
                                        <p class="mt-2">The lure of beauty</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Collections Grid-->

        <!--Product Slider-->
        <section class="section product-slider">
            <div class="container">
                <div class="section-header style1">
                    <h2 class="text-transform-none">Trending Now</h2>
                    <p>Discover Our Popular Designs <br><br> -----</p>
                </div>

                <div class="productSlider grid-products">
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!--Image-->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/jewelry-product1.jpg" src="assets/images/products/jewelry-product1.jpg" alt="product" title="">
                                <!--End Image-->
                                <!--Hover Image-->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/jewelry-product1-1.jpg" src="assets/images/products/jewelry-product1-1.jpg" alt="product" title="">
                                <!--End Hover Image-->
                            </a>
                            <!-- End Product Image -->
                            <!--Product Button-->
                            <div class="button-set-top position-absolute d-none d-md-block">
                                <a class="btn-icon wishlist add-to-wishlist rounded-circle" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label">Add To Wishlist</span></a>
                                <a class="btn-icon quick-view-popup quick-view rounded-circle" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label">Quick View</span></a>
                                <a class="btn-icon compare add-to-compare rounded-circle" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label">Add to Compare</span></a>
                            </div>
                            <div class="button-set-bottom position-absolute d-none d-md-block">
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup rounded-pill" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span>Add To Cart</span></a>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a class="text-uppercase fw-normal" href="product-layout1.html">Silver Color Couple Rings</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$3.00</span>
                            </div>
                            <!-- End Product Price-->
                            <!--Product Review-->
                            <div class="product-review"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!--Image-->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/jewelry-product2.jpg" src="assets/images/products/jewelry-product2.jpg" alt="product" title="">
                                <!--End Image-->
                                <!--Hover Image-->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/jewelry-product2-1.jpg" src="assets/images/products/jewelry-product2-1.jpg" alt="product" title="">
                                <!--End Hover Image-->
                            </a>
                            <!--End Product Image-->
                            <!--Product Button-->
                            <div class="button-set-top position-absolute d-none d-md-block">
                                <a class="btn-icon wishlist add-to-wishlist rounded-circle" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label">Add To Wishlist</span></a>
                                <a class="btn-icon quick-view-popup quick-view rounded-circle" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label">Quick View</span></a>
                                <a class="btn-icon compare add-to-compare rounded-circle" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label">Add to Compare</span></a>
                            </div>
                            <div class="button-set-bottom position-absolute d-none d-md-block">
                                <a class="btn-icon btn btn-addto-cart pro-quickshop-popup rounded-pill" href="#pro-quickshop1" data-bs-toggle="offcanvas" data-bs-target="#pro-quickshop1" aria-controls="pro-quickshop1"><i class="icon an an-cart-l"></i> <span>Quick Shop</span></a>
                            </div>
                            <!--End Product Button-->

                            <!-- Product Quickshop Form -->
                            <div class="quickshop-content d-flex-center" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="pro-quickshop1">
                                <button type="button" class="btn-close text-reset ms-auto position-absolute top-0 end-0 m-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                <div class="offcanvas-body quickshop-variant h-100 d-flex align-items-start align-items-sm-center">
                                    <form method="post" action="#" id="product_form_1052" class="product-form align-items-center text-center hidedropdown" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <!-- Product Price -->
                                        <div class="product-single__price lh-1 mb-3 mt-0 mx-auto">
                                            <span class="visually-hidden">Regular price</span>
                                            <span class="product-price__sale--single">
                                                        <span class="product-price-old-price d-none">$7.00</span><span class="product-price__price product-price__sale0">$5.00</span>
                                                    </span>
                                        </div>
                                        <!-- End Product Price -->
                                        <!-- Swatches Color -->
                                        <div class="swatches-image swatch clearfix mb-3 swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                                <label class="label d-flex justify-content-center">Color:<span class="required d-none">*</span><span class="slVariant ms-1 fw-bold">White</span></label>
                                                <ul class="swatches d-flex-justify-center list-unstyled m-0 clearfix">
                                                    <li data-value="Green" class="swatch-element rounded-0 color white available active">
                                                        <label class="swatchLbl rounded-0 color small black" title="Black"></label>
                                                        <span class="tooltip-label top">Black</span>
                                                    </li>
                                                    <li data-value="Peach" class="swatch-element rounded-0 color peach available">
                                                        <label class="swatchLbl rounded-0 color small blue" title="Blue"></label>
                                                        <span class="tooltip-label top">Blue</span>
                                                    </li>
                                                    <li data-value="White" class="swatch-element rounded-0 color yellow available">
                                                        <label class="swatchLbl rounded-0 color small yellow" title="Yellow"></label>
                                                        <span class="tooltip-label top">Yellow</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Swatches Color -->
                                        <!-- Swatches Size -->
                                        <div class="swatch clearfix mb-3 swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                                <label class="label d-flex justify-content-center">Size:<span class="required d-none">*</span><span class="slVariant ms-1 fw-bold">S</span></label>
                                                <ul class="swatches-size d-flex-justify-center list-unstyled m-0 clearfix">
                                                    <li data-value="S" class="swatch-element s available active">
                                                        <label class="swatchLbl rounded-0 medium" title="S">S</label><span class="tooltip-label">S</span>
                                                    </li>
                                                    <li data-value="M" class="swatch-element m available">
                                                        <label class="swatchLbl rounded-0 medium" title="M">M</label><span class="tooltip-label">M</span>
                                                    </li>
                                                    <li data-value="L" class="swatch-element l available">
                                                        <label class="swatchLbl rounded-0 medium" title="L">L</label><span class="tooltip-label">L</span>
                                                    </li>
                                                    <li data-value="XL" class="swatch-element xl available">
                                                        <label class="swatchLbl rounded-0 medium" title="XL">XL</label><span class="tooltip-label">XL</span>
                                                    </li>
                                                    <li data-value="XS" class="swatch-element xs soldout">
                                                        <label class="swatchLbl rounded-0 medium" title="XS">XS</label><span class="tooltip-label">XS</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Swatches Size -->
                                        <!-- Product Action -->
                                        <div class="product-form-submit mx-auto">
                                            <button type="submit" name="add" class="btn rounded product-form__cart-submit btn-small px-3"><span>Add to cart</span></button>
                                            <button type="submit" name="add" class="btn rounded product-form__sold-out btn-small px-3 d-none" disabled="disabled">Sold out</button>
                                            <button type="button" name="buy" class="btn rounded btn-outline-primary proceed-to-checkout btn-small px-3 d-none">Buy it now</button>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                </div>
                            </div>
                            <!-- End Product Quickshop Form -->
                        </div>
                        <!-- End Product Image -->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a class="text-uppercase fw-normal" href="product-layout1.html">Pearl Necklace</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$5.00</span>
                            </div>
                            <!-- End Product Price-->
                            <!--Product Review-->
                            <div class="product-review"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!--Image-->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/jewelry-product3.jpg" src="assets/images/products/jewelry-product3.jpg" alt="product" title="">
                                <!--End Image-->
                                <!--Hover Image-->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/jewelry-product3-1.jpg" src="assets/images/products/jewelry-product3-1.jpg" alt="product" title="">
                                <!--End Hover Image-->
                            </a>
                            <!-- End Product Image -->
                            <!--Product Button-->
                            <div class="button-set-top position-absolute d-none d-md-block">
                                <a class="btn-icon wishlist add-to-wishlist rounded-circle" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label">Add To Wishlist</span></a>
                                <a class="btn-icon quick-view-popup quick-view rounded-circle" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label">Quick View</span></a>
                                <a class="btn-icon compare add-to-compare rounded-circle" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label">Add to Compare</span></a>
                            </div>
                            <div class="button-set-bottom position-absolute d-none d-md-block">
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup rounded-pill" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span>Select Options</span></a>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a class="text-uppercase fw-normal" href="product-layout1.html">Flowers Clavicle Chain Choker</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$4.00</span>
                            </div>
                            <!-- End Product Price-->
                            <!--Product Review-->
                            <div class="product-review"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i></div>
                            <!--End Product Review-->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!--Image-->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/jewelry-product4.jpg" src="assets/images/products/jewelry-product4.jpg" alt="product" title="">
                                <!--End Image-->
                                <!--Hover Image-->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/jewelry-product4-1.jpg" src="assets/images/products/jewelry-product4-1.jpg" alt="product" title="">
                                <!--End Hover Image-->
                            </a>
                            <!-- End Product Image -->
                            <!--Product label-->
                            <div class="product-labels"><span class="lbl on-sale rounded-0">Sale</span></div>
                            <!--End Product label-->
                            <!--Countdown Timer-->
                            <div class="saleTime desktop" data-countdown="2029/03/01"></div>
                            <!--End Countdown Timer-->
                            <!--Product Button-->
                            <div class="button-set-top position-absolute d-none d-md-block">
                                <a class="btn-icon wishlist add-to-wishlist rounded-circle" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label">Add To Wishlist</span></a>
                                <a class="btn-icon quick-view-popup quick-view rounded-circle" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label">Quick View</span></a>
                                <a class="btn-icon compare add-to-compare rounded-circle" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label">Add to Compare</span></a>
                            </div>
                            <div class="button-set-bottom position-absolute d-none d-md-block">
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup rounded-pill" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span>Add To Cart</span></a>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a class="text-uppercase fw-normal" href="product-layout1.html">Dazzling Irregular Heart Pendant</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="old-price">$8.00</span> <span class="price">$5.00</span>
                            </div>
                            <!-- End Product Price-->
                            <!--Product Review-->
                            <div class="product-review"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!--Image-->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/jewelry-product5.jpg" src="assets/images/products/jewelry-product5.jpg" alt="product" title="">
                                <!--End Image-->
                                <!--Hover Image-->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/jewelry-product5-1.jpg" src="assets/images/products/jewelry-product5-1.jpg" alt="product" title="">
                                <!--End Hover Image-->
                            </a>
                            <!-- End Product Image -->
                            <!--Product Button-->
                            <div class="button-set-top position-absolute d-none d-md-block">
                                <a class="btn-icon wishlist add-to-wishlist rounded-circle" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label">Add To Wishlist</span></a>
                                <a class="btn-icon quick-view-popup quick-view rounded-circle" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label">Quick View</span></a>
                                <a class="btn-icon compare add-to-compare rounded-circle" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label">Add to Compare</span></a>
                            </div>
                            <div class="button-set-bottom position-absolute d-none d-md-block">
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup rounded-pill" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span>Add To Cart</span></a>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a class="text-uppercase fw-normal" href="product-layout1.html">Anklets for Women Boho</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$8.00</span>
                            </div>
                            <!-- End Product Price-->
                            <!--Product Review-->
                            <div class="product-review"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                        </div>
                        <!--End Product Details-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Product Slider-->

        <!--Featured Content-->
        <section class="section featured-content style1 p-0">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-0">
                        <div class="d-flex align-items-stretch justify-content-between w-100 flex-lg-row flex-column">
                            <div class="f-item fl-1 d-flex w-100 align-items-center">
                                <div class="f-image"><img class="blur-up lazyload" data-src="assets/images/content/demo17-content-img1.jpg" src="assets/images/content/demo17-content-img1.jpg" alt="image" title="" /></div>
                            </div>
                            <div class="f-item fl-1 d-flex w-100 align-items-center">
                                <div class="f-text py-4 py-lg-5">
                                    <div class="row store-info">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex mb-3 my-md-4">
                                            <div class="icon"><i class="an an-star-o" aria-hidden="true"></i></div>
                                            <div class="detail">
                                                <h4 class="h1 fw-bold mb-2">High Quality</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and <br/>typesetting industry has been standard.</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex mb-3 my-md-4">
                                            <div class="icon"><i class="an an-calendar" aria-hidden="true"></i></div>
                                            <div class="detail">
                                                <h4 class="h1 fw-bold mb-2">Everyday Ready</h4>
                                                <p>There are many variations of passages of Lorem Ipsum available, <br/>but the majority have suffered.</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex mb-0 my-md-4">
                                            <div class="icon"><i class="an an-pencil-l" aria-hidden="true"></i></div>
                                            <div class="detail">
                                                <h4 class="h1 fw-bold mb-2">Classic Design</h4>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat <br/>predefined chunks as necessary on the Internet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Featured Content-->

        <!--Collections Grid-->
        <section class="section collection-grids">
            <div class="container">
                <div class="section-header style1">
                    <h2 class="text-transform-none">Gifts &amp; More</h2>
                    <p>A little help while you shop for your special ones! <br><br> -----</p>
                </div>
                <div class="row grid-categorys">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 category-grid-item">
                        <div class="category-item zoomscal-hov">
                            <a href="shop-left-sidebar.html" class="category-link text-center clr-none">
                                <div class="zoom-scal"><img class="blur-up lazyload" data-src="assets/images/collection/demo17-banner4.jpg" src="assets/images/collection/demo17-banner4.jpg" alt="collection" title="" /></div>
                                <div class="details text-center">
                                    <div class="inner">
                                        <h3 class="category-title">Gift For Her</h3>
                                        <p class="mt-2">Each piece, made with love and care</p>
                                        <span class="btn btn-outline-primary btn-sm">SHOP NOW</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 category-grid-item">
                        <div class="category-item zoomscal-hov">
                            <a href="shop-left-sidebar.html" class="category-link text-center clr-none">
                                <div class="zoom-scal"><img class="blur-up lazyload" data-src="assets/images/collection/demo17-banner5.jpg" src="assets/images/collection/demo17-banner5.jpg" alt="collection" title="" /></div>
                                <div class="details text-center">
                                    <div class="inner">
                                        <h3 class="category-title">Gift For Him</h3>
                                        <p class="mt-2">Something you'll love to browse</p>
                                        <span class="btn btn-outline-primary btn-sm">SHOP NOW</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Collections Grid-->

        <!--Testimonial Slider-->
        <section class="section testimonial-slider style2">
            <div class="container">
                <div class="section-header style1">
                    <h2 class="text-transform-none">Testimonials</h2>
                </div>
                <div class="quote-wraper">
                    <!--Testimonial Slider Items-->
                    <div class="quotes-slider arwOut3">
                        <div class="quotes-slide bg-transparent">
                            <blockquote class="quotes-slider__text">
                                <div class="rte-setting"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...</p></div>
                                <div class="product-review d-flex-wrap">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                </div>
                                <p class="authour">HAPPY CLIENT</p>
                                <p class="cmp-name">Shetty Jamie</p>
                            </blockquote>
                        </div>
                        <div class="quotes-slide bg-transparent">
                            <blockquote class="quotes-slider__text">
                                <div class="rte-setting"><p>Scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged It was popularised in the 1960s...</p></div>
                                <div class="product-review d-flex-wrap">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                </div>
                                <p class="authour">Happy Customer</p>
                                <p class="cmp-name">Sara Colinton</p>
                            </blockquote>
                        </div>
                        <div class="quotes-slide bg-transparent">
                            <blockquote class="quotes-slider__text">
                                <div class="rte-setting"><p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions reader will be distracted by the readable content of a page...</p></div>
                                <div class="product-review d-flex-wrap">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star gray-star"></i>
                                </div>
                                <p class="authour">HAPPY CLIENT</p>
                                <p class="cmp-name">Hamlet Tuong</p>
                            </blockquote>
                        </div>
                        <div class="quotes-slide bg-transparent">
                            <blockquote class="quotes-slider__text">
                                <div class="rte-setting"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, words which don't look even slightly believable...</p></div>
                                <div class="product-review d-flex-wrap">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star gray-star"></i>
                                </div>
                                <p class="authour">Happy Customer</p>
                                <p class="cmp-name">CPL</p>
                            </blockquote>
                        </div>
                    </div>
                    <!--Testimonial Slider Items-->
                </div>
            </div>
        </section>
        <!--End Testimonial Slider-->

        <!--Store Feature-->
        <section class="section store-features style3">
            <div class="container">
                <div class="section-header d-none">
                    <h2>Store Features</h2>
                </div>
                <div class="row store-info">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex flex-column align-items-center text-center mb-3 mb-md-0">
                        <i class="an an-worldwide text-white m-0"></i>
                        <div class="detail text-white">
                            <p>Free shipping worldwide and <br> 30 days return policy</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex flex-column align-items-center text-center mb-3 mb-md-0">
                        <i class="an an-pay-security text-white m-0"></i>
                        <div class="detail text-white">
                            <p>30 days money back guarantee<br>If not satisfied</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex flex-column align-items-center text-center mb-3 mb-sm-0">
                        <i class="an an-chat text-white m-0"></i>
                        <div class="detail text-white">
                            <p>Book a virtual appointment <br>with a jewellery consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Store Feature-->
    </div>
    <!--End Body Container-->

    <!--Footer-->
    <div class="footer footer-17">
        <div class="footer-top clearfix border-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 newsletter-col mt-0">
                        <div class="display-table pt-md-3 pt-lg-0">
                            <div class="display-table-cell footer-newsletter">
                                <form action="#" method="post">
                                    <label class="h4 body-font">THE OPTIMAL NEWSLETTER</label>
                                    <p>Subscribe to receive updates from The Optimal as well as access to exclusive deals, and more.</p>
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter-input mb-0 rounded-0" name="EMAIL" value="" placeholder="Email address" required>
                                        <span class="input-group__btn"><button type="submit" class="btn newsletter__submit rounded-0" name="commit" id="Subscribe"><i class="an an-envelope-l"></i></button></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <img src="assets/images/payment.png" alt="Paypal Visa Payments" class="mt-3 mb-4 mb-lg-0"/>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links ps-lg-5">
                        <h4 class="h4 body-font">Informations</h4>
                        <ul>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="aboutus-style1.html">About us</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="privacy-policy.html">Privacy policy</a></li>
                            <li><a href="#">Terms &amp; condition</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                        <h4 class="h4 body-font">Customer Services</h4>
                        <ul>
                            <li><a href="#">Request Personal Data</a></li>
                            <li><a href="faqs-style1.html">FAQ's</a></li>
                            <li><a href="contact-style1.html">Contact Us</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Shipping &amp; Delivery</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-2 social-icons-col ps-lg-5 mt-3 mt-md-0">
                        <h4 class="h4 body-font">FOLLOW</h4>
                        <ul class="d-flex flex-column">
                            <li><a href="#" class="d-flex-center"><i class="an an-facebook" aria-hidden="true"></i> <span>Facebook</span></a></li>
                            <li><a href="#" class="d-flex-center"><i class="an an-twitter" aria-hidden="true"></i> <span>Twitter</span></a></li>
                            <li><a href="#" class="d-flex-center"><i class="an an-pinterest-p" aria-hidden="true"></i> <span>Pinterest</span></a></li>
                            <li><a href="#" class="d-flex-center"><i class="an an-instagram" aria-hidden="true"></i> <span>Instagram</span></a></li>
                            <li><a href="#" class="d-flex-center"><i class="an an-youtube" aria-hidden="true"></i> <span>YouTube</span></a></li>
                            <li><a href="#" class="d-flex-center"><i class="an an-tiktok" aria-hidden="true"></i> <span>TikTok</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="container">
                <div class="d-flex-center flex-column justify-content-center flex-md-row-reverse">
                    <div class="copytext">&copy; 2022 Optimal. All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->

    <!--Scoll Top-->
    <span id="site-scroll" title="SCROLL UP"><i class="icon an an-chevron-up"></i></span>
    <!--End Scoll Top-->

    <!--MiniCart Drawer-->
    <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="cart-drawer" class="block block-cart">
                    <div class="minicart-header">
                        <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                        <h4 class="fs-6 text-black">Your cart (2 Items)</h4>
                    </div>
                    <div class="minicart-content">
                        <ul class="m-0 clearfix">
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image" href="product-layout1.html">
                                    <img class="blur-up lazyload" src="assets/images/products/jewelry-product1.jpg" data-src="assets/images/products/jewelry-product1.jpg" alt="image" title="">
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Floral High Quality Audio</a>
                                    <div class="variant-cart mb-1">Black / XL</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="1" class="qty rounded-0">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image" href="product-layout1.html">
                                    <img class="blur-up lazyload" src="assets/images/products/jewelry-product2.jpg" data-src="assets/images/products/jewelry-product2.jpg" alt="image" title="">
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Signature Sound</a>
                                    <div class="variant-cart mb-1">Blue / XL</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$199.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="1" class="qty rounded-0">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom text-black">
                        <div class="shipinfo text-center mb-3 text-uppercase">
                            <p class="freeShipMsg"><i class="an an-truck fs-5 me-2 align-middle"></i>SPENT <b>$199.00</b> MORE FOR FREE SHIPPING</p>
                        </div>
                        <div class="subtotal">
                            <span>Total:</span>
                            <span class="product-price">$93.13</span>
                        </div>
                        <a href="checkout-style2.html" class="w-100 p-2 my-2 btn proceed-to-checkout">Proceed to Checkout</a>
                        <a href="cart-style2.html" class="w-100 btn btn-outline-primary cart-btn">View Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End MiniCart Drawer-->
    <div class="modalOverly"></div>

    <!--Quickview Popup-->
    <div class="loadingBox"><div class="an-spin"><i class="icon an an-spinner4"></i></div></div>
    <div id="quickView-modal" class="mfp-with-anim mfp-hide">
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                <!--Model thumbnail -->
                <div id="quickView" class="carousel slide">
                    <!-- Image Slide carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active" data-bs-slide-number="0">
                            <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product1.jpg" src="assets/images/products/jewelry-product1.jpg" alt="image" title="" />
                        </div>
                        <div class="item carousel-item" data-bs-slide-number="1">
                            <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product2.jpg" src="assets/images/products/jewelry-product2.jpg" alt="image" title="" />
                        </div>
                        <div class="item carousel-item" data-bs-slide-number="2">
                            <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product3.jpg" src="assets/images/products/jewelry-product3.jpg" alt="image" title="" />
                        </div>
                        <div class="item carousel-item" data-bs-slide-number="3">
                            <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product4.jpg" src="assets/images/products/jewelry-product4.jpg" alt="image" title="" />
                        </div>
                        <div class="item carousel-item" data-bs-slide-number="4">
                            <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product5.jpg" src="assets/images/products/jewelry-product5.jpg" alt="image" title="" />
                        </div>
                    </div>
                    <!-- End Image Slide carousel items -->
                    <!-- Thumbnail image -->
                    <div class="model-thumbnail-img">
                        <!-- Thumbnail slide -->
                        <div class="carousel-indicators list-inline">
                            <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product1.jpg" src="assets/images/products/jewelry-product1.jpg" alt="image" title="" />
                            </div>
                            <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product2.jpg" src="assets/images/products/jewelry-product2.jpg" alt="image" title="" />
                            </div>
                            <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product3.jpg" src="assets/images/products/jewelry-product3.jpg" alt="image" title="" />
                            </div>
                            <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product4.jpg" src="assets/images/products/jewelry-product4.jpg" alt="image" title="" />
                            </div>
                            <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/jewelry-product5.jpg" src="assets/images/products/jewelry-product5.jpg" alt="image" title="" />
                            </div>
                        </div>
                        <!-- End Thumbnail slide -->
                        <!-- Carousel arrow button -->
                        <a class="carousel-control-prev carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon an-3x an an-angle-left"></i><span class="visually-hidden">Previous</span></a>
                        <a class="carousel-control-next carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon an-3x an an-angle-right"></i><span class="visually-hidden">Next</span></a>
                        <!-- End Carousel arrow button -->
                    </div>
                    <!-- End Thumbnail image -->
                </div>
                <!--End Model thumbnail -->
                <div class="text-center mt-3"><a href="product-layout1.html">VIEW MORE DETAILS</a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <h2 class="product-title">Product Quick View Popup</h2>
                <div class="product-review d-flex-center mb-2">
                    <div class="rating"><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star-o"></i></div>
                    <div class="reviews ms-2"><a href="#">5 Reviews</a></div>
                </div>
                <div class="product-info">
                    <p class="product-vendor">Vendor:  <span class="fw-normal"><a href="#" class="fw-normal">Optimal</a></span></p>
                    <p class="product-type">Product Type: <span class="fw-normal">Tops</span></p>
                    <p class="product-sku">SKU:  <span class="fw-normal">50-ABC</span></p>
                </div>
                <div class="pro-stockLbl my-2">
                    <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                    <span class="d-flex-center stockLbl preorder d-none"><i class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                    <span class="d-flex-center stockLbl outstock d-none"><i class="icon an an-times-cil"></i> <span>Sold out</span></span>
                    <span class="d-flex-center stockLbl lowstock d-none" data-qty="15"><i class="icon an an-exclamation-cir"></i><span> Order now, Only  <span class="items">10</span>  left!</span></span>
                </div>
                <div class="pricebox">
                    <span class="price old-price">$400.00</span><span class="price product-price__sale">$300.00</span>
                </div>
                <div class="sort-description">Optimal Multipurpose Bootstrap 5 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.. </div>
                <form method="post" action="#" id="product_form--option" class="product-form">
                    <div class="product-options d-flex-wrap">
                        <div class="swatch clearfix swatch-0 option1">
                            <div class="product-form__item">
                                <label class="label d-flex">Color:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">Black</span></label>
                                <ul class="swatches-image swatches d-flex-wrap list-unstyled clearfix">
                                    <li data-value="Black" class="swatch-element color available active">
                                        <label class="rounded-0 swatchLbl small color black" title="Black"></label>
                                        <span class="tooltip-label top">Black</span>
                                    </li>
                                    <li data-value="Green" class="swatch-element color available">
                                        <label class="rounded-0 swatchLbl small color green" title="Green"></label>
                                        <span class="tooltip-label top">Green</span>
                                    </li>
                                    <li data-value="Orange" class="swatch-element color available">
                                        <label class="rounded-0 swatchLbl small color orange" title="Orange"></label>
                                        <span class="tooltip-label top">Orange</span>
                                    </li>
                                    <li data-value="Blue" class="swatch-element color available">
                                        <label class="rounded-0 swatchLbl small color blue" title="Blue"></label>
                                        <span class="tooltip-label top">Blue</span>
                                    </li>
                                    <li data-value="Red" class="swatch-element color available">
                                        <label class="rounded-0 swatchLbl small color red" title="Red"></label>
                                        <span class="tooltip-label top">Red</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="swatch clearfix swatch-1 option2">
                            <div class="product-form__item">
                                <label class="label">Size:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">XS</span></label>
                                <ul class="swatches-size d-flex-center list-unstyled clearfix swatch-1 option2">
                                    <li data-value="XS" class="swatch-element xs available active">
                                        <label class="swatchLbl rounded-0 medium" title="XS">XS</label>
                                        <span class="tooltip-label">XS</span>
                                    </li>
                                    <li data-value="S" class="swatch-element s available">
                                        <label class="swatchLbl rounded-0 medium" title="S">S</label>
                                        <span class="tooltip-label">S</span>
                                    </li>
                                    <li data-value="M" class="swatch-element m available">
                                        <label class="swatchLbl rounded-0 medium" title="M">M</label>
                                        <span class="tooltip-label">M</span>
                                    </li>
                                    <li data-value="L" class="swatch-element l available">
                                        <label class="swatchLbl rounded-0 medium" title="L">L</label>
                                        <span class="tooltip-label">L</span>
                                    </li>
                                    <li data-value="XL" class="swatch-element xl available">
                                        <label class="swatchLbl rounded-0 medium" title="XL">XL</label>
                                        <span class="tooltip-label">XL</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-action d-flex-wrap w-100 mb-3 clearfix">
                            <div class="quantity">
                                <div class="qtyField rounded">
                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                    <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="add-to-cart ms-3 fl-1">
                                <button type="button" class="btn button-cart rounded-0"><span>Add to cart</span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="wishlist-btn d-flex-center">
                    <a class="add-wishlist d-flex-center text-uppercase me-3" href="my-wishlist.html" title="Add to Wishlist"><i class="icon an an-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                    <a class="add-compare d-flex-center text-uppercase" href="compare-style1.html" title="Add to Compare"><i class="icon an an-random-r me-2"></i> <span>Add to Compare</span></a>
                </div>
                <!-- Social Sharing -->
                <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                    <span class="sharing-lbl me-2">Share :</span>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook mx-1"></i><span class="share-title d-none">Facebook</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter mx-1"></i><span class="share-title d-none">Tweet</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p mx-1"></i> <span class="share-title d-none">Pin it</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon an an-instagram mx-1"></i><span class="share-title d-none">Instagram</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon an an-whatsapp mx-1"></i><span class="share-title d-none">WhatsApp</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon an an-envelope-l mx-1"></i><span class="share-title d-none">Email</span></a>
                </div>
                <!-- End Social Sharing -->
            </div>
        </div>
    </div>
    <!--End Quickview Popup-->

    <!--Addtocart Added Popup-->
    <div id="pro-addtocart-popup" class="mfp-with-anim mfp-hide">
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        <div class="addtocart-inner text-center clearfix">
            <h4 class="fs-5 title mb-3 text-success">Added to your shopping cart successfully.</h4>
            <div class="pro-img mb-3">
                <img class="img-fluid blur-up lazyload" src="assets/images/products/jewelry-product3-1.jpg" data-src="assets/images/products/jewelry-product3-1.jpg" alt="Added to your shopping cart successfully." title="Added to your shopping cart successfully." />
            </div>
            <div class="pro-details">
                <h5 class="pro-name mb-0 text-uppercase">Flowers Clavicle Chain Choker</h5>
                <p class="sku my-2">Color: Gray</p>
                <p class="mb-0 qty-total">1 X $113.88</p>
                <div class="addcart-total bg-light mt-3 mb-3 p-2">
                    Total: <b class="price">$113.88</b>
                </div>
                <div class="button-action">
                    <a href="checkout-style1.html" class="btn btn-primary view-cart mx-1 rounded-0">Go To Checkout</a>
                    <a href="index.html" class="btn btn-secondary rounded-0">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Addtocart Added Popup-->


    <!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <!--Including Javascript-->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Photoswipe Gallery -->
    <script src="assets/js/vendor/photoswipe.min.js"></script>
    <script>
        $(function () {
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function () {
                    var items = [];
                    $('a.zoom').each(function () {
                        var $href = $(this).attr('href'),
                            $size = $(this).data('size').split('x'),
                            item = {src: $href, w: $size[0], h: $size[1]};
                        items.push(item);
                    });
                    return items;
                };
            var items = getItems();
            $('.zoom').click(function (event) {
                event.preventDefault();
                var $index = $(this).parents(".grid-lookbook").index();
                $index = $index;
                var options = {
                    index: $index,
                    bgOpacity: .6,
                    showHideOpacity: true
                };
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
    </script>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption"><div class="pswp__caption__center"></div></div>
            </div>
        </div>
    </div>

</div>
<!--End Page Wrapper-->
</body>
</html>