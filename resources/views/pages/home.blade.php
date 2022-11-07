@extends('layouts.app')

@section('title', 'Home | Pina Jewels Handmade')

@section('description', '')

@section('content')

    <div id="page-content">
        <!--Home Video-->
        <section class="slideshow slideshow-wrapper p-0">
            <div class="home-slideshow">
                <div class="slide slide-video slide-media">
                    <video loop="" muted="" preload="metadata" autoplay>
                        <source src="/images/video_carousel.mp4" type="video/mp4">
                    </video>
                    <div class="container">
                        <div class="slideshow-content slideshow-overlay bottom-middle d-flex justify-content-center align-items-center">
                            <div class="slideshow-content-in text-center">
                                <div class="wrap-caption animation style1 whiteText px-2">
                                    <h1 class="h1 mega-title ss-mega-title text-capitalize">Il Gioiello unico <br>fatto apposta per te</h1>
                                    <span class="mega-subtitle ss-sub-title d-md-block d-lg-block d-none">realizzato a mano, usando tecniche antiche e pietre pregiate</span>
                                    <div class="ss-btnWrap d-flex-center justify-content-center mt-3 mt-md-0">
                                        <a class="btn btn-outline-primary btn-lg" href="shop-left-sidebar.html">Vai allo Shop</a>
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

@endsection
