

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
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />

    <!-- optional CSS file-->
    @yield('optionalCss')

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


        <div id="page-content">
            <!--Collection Banner-->
            <div class="collection-header">
                <div class="collection-hero">
                    <div class="collection-hero__image" style=""></div>
                    <div class="collection-hero__title-wrapper container">
                        <h1 class="collection-hero__title">Pannello di Amministrazione</h1>
                    </div>
                </div>
            </div>
            <!--End Collection Banner-->

            <!--Main Content-->
            <div class="container">
                <div class="row">
                    {{-- dashboard--}}
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 left-col">
                        <div class="product-sticky-style mb-4">
                            <div class="card dashboard-profile position-relative">
                                <div class="list-group rounded-0 dashboard-links">
                                    <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action {{request()->routeIs('admin.dashboard') ? 'active': ''}}">
                                        <i class="an an-store me-2"></i>
                                        Dashboard
                                    </a>
                                    <a href="{{route('product.index')}}" class="list-group-item list-group-item-action {{request()->routeIs('product.*') ? 'active': ''}}">
                                        <i class="an an-store me-2"></i>
                                        Prodotti
                                    </a>
                                    <a href="{{route('category.index')}}" class="list-group-item list-group-item-action">
                                        <i class="an an-tags-l me-2"></i>
                                        Categorie
                                    </a>
                                    <a href="vendor-uploads.html" class="list-group-item list-group-item-action">
                                        <i class="an an-upload-l me-2"></i>
                                        Uploads
                                    </a>
                                    <a href="vendor-tracking.html" class="list-group-item list-group-item-action">
                                        <i class="an an-truck-l me-2"></i>
                                        Track Shipping
                                    </a>
                                    <a href="vendor-settings.html" class="list-group-item list-group-item-action">
                                        <i class="an an-edit-l me-2"></i>
                                        Settings (Edit)
                                    </a>
                                    <form class="list-group-item list-group-item-action" method="post" action="{{route('admin.logout') }}">
                                        @csrf
                                        <input type="submit" value="Logout">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--main content--}}
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!--End Main Content-->
        </div>

    <!--Footer-->
    <x-footer></x-footer>
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
                <img class="img-fluid blur-up lazyload" src="/assets/images/products/jewelry-product3-1.jpg" data-src="assets/images/products/jewelry-product3-1.jpg" alt="Added to your shopping cart successfully." title="Added to your shopping cart successfully." />
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
    <script src="/assets/js/vendor/jquery-min.js"></script>
    <script src="/assets/js/vendor/js.cookie.js"></script>
    <!--Including Javascript-->
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>

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
