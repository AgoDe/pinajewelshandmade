@extends('layouts.app')

@section('title', 'Prodotto | Pina Jewels Handmade')

@section('description', '')

@section('optionalCss')
    <link rel="stylesheet" href="/assets/css/optionalStyle.css" />
@endsection

@section('content')
    <div id="page-content">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h2 class="collection-hero__title">Shop Left Sidebar</h2>
                    <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="index.html" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Shop Left Sidebar</span></div>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <!--Main Content-->
        <div class="container">
            <!--Product Content-->
            <div class="product-single">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img clearfix mb-3 mb-md-0 position-relative">
                            <div class="zoompro-wrap product-zoom-right w-100 p-0 mb-10">
                                <div class="zoompro-span">
                                    <img class="zoompro" src="assets/images/products/product-detail1.jpg" data-zoom-image="assets/images/products/product-detail1.jpg" alt="product" />
                                </div>
                            </div>
                            <div class="zoompro-wrap product-zoom-right w-100 p-0 mb-10">
                                <div class="zoompro-span">
                                    <img class="zoompro" src="assets/images/products/product-detail1.jpg" data-zoom-image="assets/images/products/product-detail1.jpg" alt="product" />
                                </div>
                            </div>
                            <div class="zoompro-wrap product-zoom-right w-100 p-0 mb-10">
                                <div class="zoompro-span">
                                    <img class="zoompro" src="assets/images/products/product-detail1.jpg" data-zoom-image="assets/images/products/product-detail1.jpg" alt="product" />
                                </div>
                                <div class="product-buttons">
                                    <a href="#" class="btn prlightbox"><i class="icon an an-expand-l-arrows" aria-hidden="true"></i><span class="tooltip-label">Zoom Image</span></a>
                                </div>
                            </div>
                            <div class="zoompro-wrap product-zoom-right w-100 p-0 mb-10">
                                <div class="product-single__media videoSlide" data-slide="2" tabindex="-1">
                                    <video poster="assets/images/products/product-detail1.jpg" controls="controls" muted="muted" loop="loop" preload="metadata" aria-label="Floral Print Top">
                                        <source src="assets/images/products/video/video-placeholder.mp4" type="video/mp4">
                                        <img src="assets/images/products/product-detail1.jpg" alt="product" />
                                    </video>
                                </div>
                            </div>
                            <div class="zoompro-wrap product-zoom-right w-100 p-0 mb-10">
                                <div class="ratio ratio-16x9 product-youtube-media mb-md-0"><iframe src="https://www.youtube.com/embed/NpEaa2P7qZI" title="YouTube video" allowfullscreen></iframe></div>
                            </div>

                            <div class="product-labels"><span class="lbl pr-label1">new</span><span class="lbl on-sale">Sale</span></div>
                            <div class="product-wish"><a class="wishIcon wishlist rounded-1 m-0" href="my-wishlist.html"><i class="icon an an-heart"></i><span class="tooltip-label left">Available in Wishlist</span></a></div>

                            <div class="lightboximages">
                                <a href="assets/images/products/product-detail1.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product-detail1.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product-detail1.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product-detail1.jpg" data-size="1000x1280"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="product-sticky-style text-center">
                            <!-- Product Info -->
                            <div class="product-single__meta">
                                <!-- Countdown -->
                                <div class="countdown-text style3 d-flex-wrap mb-4">
                                    <label class="mb-1 border-0 d-block w-100 me-0">Hurry up! Sales End In </label>
                                    <div class="prcountdown d-flex justify-content-center w-100" data-countdown="2024/10/01"></div>
                                </div>
                                <!-- End Countdown -->

                                <h1 class="product-single__title">Product Layout Style4</h1>
                                <!-- Product Reviews -->
                                <div class="product-review mb-2"><a class="reviewLink d-flex-center justify-content-center" href="#reviews"><i class="an an-star"></i><i class="an an-star mx-1"></i><i class="an an-star"></i><i class="an an-star mx-1"></i><i class="an an-star-o"></i><span class="spr-badge-caption ms-2">16 Reviews</span></a></div>
                                <!-- End Product Reviews -->
                                <!-- Product Info -->
                                <div class="product-info">
                                    <p class="product-type">Vendor: <span>Bohemian France</span></p>
                                    <p class="product-type">Product Type: <span>Floral Top</span></p>
                                    <p class="product-sku">SKU: <span class="variant-sku">1416PT-1</span></p>
                                </div>
                                <!-- End Product Info -->
                                <!-- Product Price -->
                                <div class="product-single__price pb-1">
                                    <span class="visually-hidden">Regular price</span>
                                    <span class="product-price__sale--single">
                                                <span class="product-price-old-price">$200.00</span><span class="product-price__price product-price__sale">$225.00</span>
                                                <span class="discount-badge"><span class="devider me-2">|</span><span>Save: </span><span class="product-single__save-amount"><span class="money">$99.00</span></span><span class="off ms-1">(<span>25</span>%)</span></span>
                                            </span>

                                </div>
                                <!-- End Product Price -->
                                <!-- Product Sold -->
                                <div class="orderMsg d-flex-center justify-content-center" data-user="23" data-time="24">
                                    <img src="assets/images/order-icon.jpg" alt="order" />
                                    <p><strong class="items">8</strong> Sold in last <strong class="time">14</strong> hours</p>
                                </div>
                                <!-- End Product Sold -->
                            </div>
                            <!-- End Product Info -->
                            <div class="product-single__description mb-3">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s galley scrambled type specimen book.</p>
                                <p class="moredetail"><a href="#description" class="text-decoration-underline">Read More</a></p>
                            </div>
                            <!-- Product Form -->
                            <form method="post" action="#" class="product-form justify-content-center hidedropdown">
                                <!-- Swatches Color -->
                                <div class="swatches-color swatch clearfix swatch-0 option1" data-option-index="0">
                                    <div class="product-form__item">
                                        <label class="label d-flex justify-content-center">Color:<span class="required d-none">*</span><span class="slVariant ms-1 fw-bold">Red</span></label>
                                        <ul class="swatches d-flex-wrap justify-content-center list-unstyled clearfix">
                                            <li data-value="Red" class="swatch-element color red available active">
                                                <label class="swatchLbl rectangle color red" title="Red"></label>
                                                <span class="tooltip-label top">Red</span>
                                            </li>
                                            <li data-value="Red" class="swatch-element color blue available">
                                                <label class="swatchLbl rectangle color blue" title="Blue"></label>
                                                <span class="tooltip-label top">Blue</span>
                                            </li>
                                            <li data-value="Green" class="swatch-element color green available">
                                                <label class="swatchLbl rectangle color green" title="Green"></label>
                                                <span class="tooltip-label top">Green</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Swatches Color -->
                                <!-- Swatches Size -->
                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                    <div class="product-form__item">
                                        <label class="label d-flex justify-content-center">Size:<span class="required d-none">*</span><span class="slVariant ms-1 fw-bold">S</span></label>
                                        <ul class="swatches-size d-flex-center justify-content-center list-unstyled clearfix">
                                            <li data-value="S" class="swatch-element s available active">
                                                <label class="swatchLbl rectangle" title="S">S</label><span class="tooltip-label">S</span>
                                            </li>
                                            <li data-value="M" class="swatch-element m available">
                                                <label class="swatchLbl rectangle" title="M">M</label><span class="tooltip-label">M</span>
                                            </li>
                                            <li data-value="L" class="swatch-element l available">
                                                <label class="swatchLbl rectangle" title="L">L</label><span class="tooltip-label">L</span>
                                            </li>
                                            <li data-value="XL" class="swatch-element xl soldout">
                                                <label class="swatchLbl rectangle" title="XL">XL</label><span class="tooltip-label">XL</span>
                                            </li>
                                            <li class="ms-1"><a href="#sizechart" class="sizelink link-underline text-uppercase"><i class="icon an an-ruler d-none"></i> Size Guide</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Swatches Size -->
                                <!-- Product Action -->
                                <div class="product-action w-100 clearfix">
                                    <div class="product-form__item--quantity d-flex-center justify-content-center mb-3">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="pro-stockLbl ms-3">
                                            <span class="d-flex-center stockLbl instock d-none"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                                            <span class="d-flex-center stockLbl preorder d-none"><i class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                                            <span class="d-flex-center stockLbl outstock d-none"><i class="icon an an-times-cil"></i> <span>Sold out</span></span>
                                            <span class="d-flex-center stockLbl lowstock" data-qty="15"><i class="icon an an-exclamation-cir"></i><span> Order now, Only  <span class="items">10</span>  left!</span></span>
                                        </div>
                                    </div>
                                    <div class="product-form__item--submit">
                                        <button type="submit" name="add" class="btn btn-outline-primary rounded-0 product-form__cart-submit"><span>Add to cart</span></button>
                                        <button type="submit" name="add" class="btn rounded-0 product-form__sold-out d-none" disabled="disabled">Sold out</button>
                                    </div>
                                    <div class="product-form__item--buyit clearfix">
                                        <button type="button" class="btn rounded-0 btn-secondary proceed-to-checkout">Buy it now</button>
                                    </div>
                                    <div class="agree-check customCheckbox clearfix d-none">
                                        <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                                        <label for="prTearm">I agree with the terms and conditions</label>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                                <!-- Product Info link -->
                                <p class="infolinks d-flex-center justify-content-between mt-2 mb-3 w-100">
                                    <a class="btn add-to-wishlist d-none" href="my-wishlist.html"><i class="icon an an-heart-l me-1" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                    <a class="btn add-to-wishlist" href="compare-style1.html"><i class="icon an an-sync-ar me-1" aria-hidden="true"></i> <span>Add to Compare</span></a>
                                    <a class="btn shippingInfo d-none" href="#ShippingInfo"><i class="icon an an-paper-l-plane me-1"></i> Delivery &amp; Returns</a>
                                    <a class="btn emaillink me-0" href="#productInquiry"> <i class="icon an an-question-cil me-1"></i> Ask A Question</a>
                                </p>
                                <!-- End Product Info link -->
                            </form>
                            <!-- End Product Form -->
                            <!-- Social Sharing -->
                            <div class="social-sharing d-flex-center justify-content-center mb-3">
                                <span class="sharing-lbl me-2">Share :</span>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook mx-1"></i><span class="share-title d-none">Facebook</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter mx-1"></i><span class="share-title d-none">Tweet</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p mx-1"></i> <span class="share-title d-none">Pin it</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Linkedin"><i class="icon an an-linkedin mx-1"></i><span class="share-title d-none">Linkedin</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon an an-envelope-l mx-1"></i><span class="share-title d-none">Email</span></a>
                            </div>
                            <!-- End Social Sharing -->
                            <!-- Product Info -->
                            <div class="freeShipMsg" data-price="199"><i class="icon an an-truck" aria-hidden="true"></i>Spent <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> more to get free shipping</div>
                            <div class="shippingMsg"><i class="icon an an-clock-r" aria-hidden="true"></i>Estimated Delivery Between <b id="fromDate">Thursday 02 December</b> and <b id="toDate">Wednesday 08 December.</b>.</div>
                            <div class="userViewMsg" data-user="20" data-time="11000"><i class="icon an an-eye-r" aria-hidden="true"></i><strong class="uersView">21</strong> People are Looking for this Product</div>
                            <div class="feature-list-txt d-flex-wrap mt-4">
                                <div class="fl-1">20 Days Return &amp; Refund</div><div class="fl-1">Money back guarantee</div><div class="fl-1">Fast &amp; Reliable support</div>
                            </div>
                            <div class="trustseal-img mt-4"><img src="assets/images/powerby-cards.jpg" alt="powerby cards" /></div>
                            <!-- End Product Info -->
                        </div>
                    </div>
                </div>
            </div>
            <!--Product Content-->

            <!--Product Nav-->
            <a href="product-layout3.html" class="product-nav prev-pro d-flex-center justify-content-between" title="Previous Product">
                        <span class="details">
                            <span class="name">Mini Sleev Top</span>
                            <span class="price">$199.00</span>
                        </span>
                <span class="img"><img src="assets/images/products/100x120.jpg" alt="product" /></span>
            </a>
            <a href="product-layout5.html" class="product-nav next-pro d-flex-center justify-content-between" title="Next Product">
                <span class="img"><img src="assets/images/products/100x120.jpg" alt="product"></span>
                <span class="details">
                            <span class="name">Ditsy Floral Dress</span>
                            <span class="price">$99</span>
                        </span>
            </a>
            <!--End Product Nav-->

            <!--Product Tabs-->
            <div class="tabs-listing style3 mt-2 mt-md-5">
                <ul class="product-tabs style3 list-unstyled d-flex-wrap border-bottom justify-content-center m-0 d-none d-md-flex">
                    <li rel="description" class="active"><a class="tablink">Description</a></li>
                    <li rel="size-chart"><a class="tablink">Size Chart</a></li>
                    <li rel="shipping-return"><a class="tablink">Shipping &amp; Return</a></li>
                    <li rel="reviews"><a class="tablink">Reviews</a></li>
                    <li rel="addtional-tabs"><a class="tablink">Addtional Tabs</a></li>
                </ul>
                <div class="tab-container">
                    <h3 class="tabs-ac-style d-md-none active" rel="description">Description</h3>
                    <div id="description" class="tab-content">
                        <div class="product-description">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4 mb-md-0">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <h4 class="pt-2 text-uppercase">Features</h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <ul>
                                        <li>Curabitur pulvinar ex at tempus sodales.</li>
                                        <li>Donec vitae ante sed ligula viverra fermentum</li>
                                        <li>Mauris efficitur magna quis lectus lobortis venenatis.</li>
                                        <li>Phasellus sagittis purus eu dolor porttitor </li>
                                    </ul>
                                    <h4 class="pt-2 text-uppercase">Variations of passages</h4>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.</p>
                                    <h4 class="pt-2 text-uppercase">Popular belief specimen</h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <img data-src="assets/images/about/about-info-s3.jpg" src="assets/images/about/about-info-s3.jpg" alt="image" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="tabs-ac-style d-md-none" rel="size-chart">Size Chart</h3>
                    <div id="size-chart" class="tab-content">
                        <h4 class="fw-bold text-center">Size Guide</h4>
                        <p class="text-center">This is a standardised guide to give you an idea of what size you will need, however some brands may vary from these conversions.</p>
                        <p class="text-center"><strong>Ready to Wear Clothing</strong></p>
                        <div class="table-responsive px-1">
                            <table class="table table-bordered align-middle">
                                <tbody>
                                <tr>
                                    <th>Size</th>
                                    <th>XXS - XS</th>
                                    <th>XS - S</th>
                                    <th>S - M</th>
                                    <th>M - L</th>
                                    <th>L - XL</th>
                                    <th>XL - XXL</th>
                                </tr>
                                <tr>
                                    <td>UK</td>
                                    <td>6</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>14</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>US</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>6</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Italy (IT)</td>
                                    <td>38</td>
                                    <td>40</td>
                                    <td>42</td>
                                    <td>44</td>
                                    <td>46</td>
                                    <td>48</td>
                                </tr>
                                <tr>
                                    <td>France (FR/EU)</td>
                                    <td>34</td>
                                    <td>36</td>
                                    <td>38</td>
                                    <td>40</td>
                                    <td>42</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>Denmark</td>
                                    <td>32</td>
                                    <td>34</td>
                                    <td>36</td>
                                    <td>38</td>
                                    <td>40</td>
                                    <td>42</td>
                                </tr>
                                <tr>
                                    <td>Russia</td>
                                    <td>40</td>
                                    <td>42</td>
                                    <td>44</td>
                                    <td>46</td>
                                    <td>48</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Germany</td>
                                    <td>32</td>
                                    <td>34</td>
                                    <td>36</td>
                                    <td>38</td>
                                    <td>40</td>
                                    <td>42</td>
                                </tr>
                                <tr>
                                    <td>Japan</td>
                                    <td>5</td>
                                    <td>7</td>
                                    <td>9</td>
                                    <td>11</td>
                                    <td>13</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Australia</td>
                                    <td>6</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>14</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>Korea</td>
                                    <td>33</td>
                                    <td>44</td>
                                    <td>55</td>
                                    <td>66</td>
                                    <td>77</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>China</td>
                                    <td>160/84</td>
                                    <td>165/86</td>
                                    <td>170/88</td>
                                    <td>175/90</td>
                                    <td>180/92</td>
                                    <td>185/94</td>
                                </tr>
                                <tr>
                                    <td><strong>Jeans</strong></td>
                                    <td>24-25</td>
                                    <td>26-27</td>
                                    <td>27-28</td>
                                    <td>29-30</td>
                                    <td>31-32</td>
                                    <td>32-33</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <h3 class="tabs-ac-style d-md-none" rel="shipping-return">Shipping &amp; Return</h3>
                    <div id="shipping-return" class="tab-content">
                        <h4 class="pt-2 text-uppercase">Delivery</h4>
                        <ul>
                            <li>Dispatch: Within 24 Hours</li>
                            <li>Free shipping across all products on a minimum purchase of $50.</li>
                            <li>International delivery time - 7-10 business days</li>
                            <li>Cash on delivery might be available</li>
                            <li>Easy 30 days returns and exchanges</li>
                        </ul>
                        <h4 class="pt-2 text-uppercase">Returns</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <h4 class="pt-2 text-uppercase">Shipping</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                    </div>

                    <h3 class="tabs-ac-style d-md-none" rel="reviews">Review</h3>
                    <div id="reviews" class="tab-content">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="spr-header clearfix d-flex-center justify-content-between">
                                    <div class="product-review d-flex-center me-auto">
                                        <a class="reviewLink" href="#"><i class="icon an an-star"></i><i class="icon an an-star mx-1"></i><i class="icon an an-star"></i><i class="icon an an-star mx-1"></i><i class="icon an an-star-o"></i></a>
                                        <span class="spr-summary-actions-togglereviews ms-2">Based on 6 reviews 234</span>
                                    </div>
                                    <div class="spr-summary-actions mt-3 mt-sm-0">
                                        <a href="#" class="spr-summary-actions-newreview write-review-btn btn rounded-0"><i class="icon an-1x an an-pencil-alt me-2"></i>Write a review</a>
                                    </div>
                                </div>

                                <form method="post" action="#" class="product-review-form new-review-form mb-4">
                                    <h4 class="spr-form-title text-uppercase">Write A Review</h4>
                                    <fieldset class="spr-form-contact">
                                        <div class="spr-form-contact-name form-group">
                                            <label class="spr-form-label" for="nickname">Name <span class="required">*</span></label>
                                            <input class="spr-form-input spr-form-input-text rounded-0" id="nickname" type="text" name="name" placeholder="John smith" required />
                                        </div>
                                        <div class="spr-form-contact-email form-group">
                                            <label class="spr-form-label" for="email">Email <span class="required">*</span></label>
                                            <input class="spr-form-input spr-form-input-email rounded-0" id="email" type="email" name="email" placeholder="info@example.com" required />
                                        </div>
                                        <div class="spr-form-review-rating form-group">
                                            <label class="spr-form-label">Rating</label>
                                            <div class="product-review pt-1">
                                                <div class="review-rating">
                                                    <input type="radio" name="rating" id="rating-5"><label for="rating-5"></label>
                                                    <input type="radio" name="rating" id="rating-4"><label for="rating-4"></label>
                                                    <input type="radio" name="rating" id="rating-3"><label for="rating-3"></label>
                                                    <input type="radio" name="rating" id="rating-2"><label for="rating-2"></label>
                                                    <input type="radio" name="rating" id="rating-1"><label for="rating-1"></label>
                                                </div>
                                                <a class="reviewLink d-none" href="#"><i class="icon an an-star-o"></i><i class="icon an an-star-o mx-1"></i><i class="icon an an-star-o"></i><i class="icon an an-star-o mx-1"></i><i class="icon an an-star-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="spr-form-review-title form-group">
                                            <label class="spr-form-label" for="review">Review Title </label>
                                            <input class="spr-form-input spr-form-input-text rounded-0" id="review" type="text" name="review" placeholder="Give your review a title" />
                                        </div>
                                        <div class="spr-form-review-body form-group">
                                            <label class="spr-form-label" for="message">Body of Review <span class="spr-form-review-body-charactersremaining">(1500) characters remaining</span></label>
                                            <div class="spr-form-input">
                                                <textarea class="spr-form-input spr-form-input-textarea rounded-0" id="message" name="message" rows="5" placeholder="Write your comments here"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="spr-form-actions clearfix">
                                        <input type="submit" class="btn btn-primary rounded-0 spr-button spr-button-primary" value="Submit Review">
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="spr-reviews">
                                    <h4 class="spr-form-title text-uppercase mb-3">Customer Reviews</h4>
                                    <div class="review-inner">
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings"><span class="reviewLink"><i class="icon an an-star"></i><i class="icon an an-star mx-1"></i><i class="icon an an-star"></i><i class="icon an an-star mx-1"></i><i class="icon an an-star-o"></i></span></span>
                                                <h5 class="spr-review-header-title mt-1">Lorem ipsum dolor sit amet</h5>
                                                <span class="spr-review-header-byline"><strong>Avone</strong> on <strong>Apr 09, 2021</strong></span>
                                            </div>
                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings"><span class="reviewLink"><i class="icon an an-star"></i><i class="icon an an-star mx-1"></i><i class="icon an an-star"></i><i class="icon an an-star-o mx-1"></i><i class="icon an an-star-o"></i></span></span>
                                                <h5 class="spr-review-header-title mt-1">Simply text of the printing</h5>
                                                <span class="spr-review-header-byline"><strong>Diva</strong> on <strong>May 30, 2021</strong></span>
                                            </div>

                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings"><span class="reviewLink"><i class="icon an an-star"></i><i class="icon an an-star mx-1"></i><i class="icon an an-star-o"></i><i class="icon an an-star-o mx-1"></i><i class="icon an an-star-o"></i></span></span>
                                                <h5 class="spr-review-header-title mt-1">Neque porro quisquam est qui dolorem ipsum</h5>
                                                <span class="spr-review-header-byline"><strong>Belle</strong> on <strong>Dec 30, 2021</strong></span>
                                            </div>

                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="tabs-ac-style d-md-none" rel="addtional-tabs">Addtional Tabs</h3>
                    <div id="addtional-tabs" class="tab-content">
                        <p>You can set different tabs for each products.</p>
                        <ul>
                            <li>Comodous in tempor ullamcorper miaculis.</li>
                            <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                            <li>Divamus sit amet purus justo.</li>
                            <li>Proin molestie egestas orci ac suscipit risus posuere loremous.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Product Tabs-->
        </div>
        <!--End Container-->

        <!--You May Also Like Products-->
        <section class="section product-slider pb-0">
            <div class="container">
                <div class="row">
                    <div class="section-header col-12">
                        <h2 class="text-transform-none">You May Also Like</h2>
                    </div>
                </div>
                <div class="productSlider grid-products">
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                <!-- End product label -->
                            </a>
                            <!--End Product Image-->

                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-layout1.html">Martha Knit Top</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="old-price">$199.00</span>
                                <span class="price">$219.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                            <!--Color Variant -->
                            <ul class="image-swatches swatches">
                                <li class="rounded-0 blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                <li class="rounded-0 pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                <li class="rounded-0 red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->

                            <!--Countdown Timer-->
                            <div class="saleTime desktop" data-countdown="2024/10/01"></div>
                            <!--End Countdown Timer-->

                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-layout1.html">Long Sleeve T-shirts</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$199.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                            <!--End Product Review-->
                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch medium rounded-0 black"><span class="tooltip-label">Black</span></li>
                                <li class="swatch medium rounded-0 navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch medium rounded-0 purple"><span class="tooltip-label">Purple</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->
                            <!--Product label-->
                            <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                            <!--Product label-->

                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-layout1.html">Button Up Top Black</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$99.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                            <!--Color Variant -->
                            <ul class="swatches">
                                <li class="swatch medium rounded-0 red"><span class="tooltip-label">red</span></li>
                                <li class="swatch medium rounded-0 orange"><span class="tooltip-label">orange</span></li>
                                <li class="swatch medium rounded-0 yellow"><span class="tooltip-label">yellow</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->

                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$88.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                            <!-- Color Variant -->
                            <ul class="image-swatches swatches">
                                <li class="rounded-0 yellow medium"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                <li class="rounded-0 blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                <li class="rounded-0 pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                <li class="rounded-0 red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->

                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-layout1.html">Backpack With Contrast Bow</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$39.20</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch medium rounded-0 black"><span class="tooltip-label">black</span></li>
                                <li class="swatch medium rounded-0 navy"><span class="tooltip-label">navy</span></li>
                                <li class="swatch medium rounded-0 darkgreen"><span class="tooltip-label">darkgreen</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!--End Product Details-->
                    </div>
                </div>
            </div>
        </section>
        <!--End You May Also Like Products-->

        <!--Recently Viewed Products-->
        <section class="section product-slider pb-0">
            <div class="container">
                <div class="row">
                    <div class="section-header col-12">
                        <h2 class="text-transform-none">Recently Viewed Products</h2>
                    </div>
                </div>
                <div class="productSlider grid-products">
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="image" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="image" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->

                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a href="product-layout1.html">Puffer Jacket</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$89.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center">
                                <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                <span class="caption hidden ms-2">6 reviews</span>
                            </div>
                            <!--End Product Review-->
                            <!--Color Variant -->
                            <ul class="image-swatches swatches">
                                <li class="rounded-0 blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                <li class="rounded-0 pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                <li class="rounded-0 red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                            </ul>
                            <!--End Color Variant-->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->

                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a href="product-layout1.html">Long Sleeve T-shirts</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$199.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center">
                                <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i>
                                <span class="caption hidden ms-2">20 reviews</span>
                            </div>
                            <!--End Product Review-->
                            <!--Color Variant-->
                            <ul class="swatches">
                                <li class="swatch medium rounded-0 black"><span class="tooltip-label">Black</span></li>
                                <li class="swatch medium rounded-0 purple"><span class="tooltip-label">Purple</span></li>
                            </ul>
                            <!--End Color Variant-->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->
                            <!--Product label-->
                            <div class="product-labels"><span class="lbl pr-label1">HOT</span></div>
                            <!--Product label-->

                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a href="product-layout1.html">Stand Collar Slim Shirt</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$399.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center">
                                <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i>
                                <span class="caption hidden ms-2">19 reviews</span>
                            </div>
                            <!--End Product Review-->
                            <!--Color Variant-->
                            <ul class="image-swatches swatches">
                                <li class="rounded-0 yellow medium"><span class="swacth-btn"></span><span class="tooltip-label">Yellow</span></li>
                                <li class="rounded-0 blue medium"><span class="swacth-btn"></span><span class="tooltip-label">Blue</span></li>
                                <li class="rounded-0 pink medium"><span class="swacth-btn"></span><span class="tooltip-label">Pink</span></li>
                                <li class="rounded-0 red medium"><span class="swacth-btn"></span><span class="tooltip-label">Red</span></li>
                            </ul>
                            <!--End Color Variant-->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->

                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a href="product-layout1.html">Martha Knit Top</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="old-price">$199.00</span>
                                <span class="price">$219.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center">
                                <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-o"></i>
                                <span class="caption hidden ms-2">24 reviews</span>
                            </div>
                            <!--End Product Review-->
                            <!--Color Variant -->
                            <ul class="swatches">
                                <li class="swatch medium rounded-0 green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch medium rounded-0 orange"><span class="tooltip-label">Orange</span></li>
                            </ul>
                            <!--End Color Variant-->
                        </div>
                        <!--End Product Details-->
                    </div>
                    <div class="item">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <!--Start Product Image-->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-1.jpg" src="assets/images/products/product-1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-1-1.jpg" src="assets/images/products/product-1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!--End Product Image-->
                            <!--Product Button-->
                            <div class="button-set style0 d-none d-md-block">
                                <ul>
                                    <!--Cart Button-->
                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to Cart</span></a></li>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview"><i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span></a></li>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To Wishlist</span></a></li>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to Compare</span></a></li>
                                    <!--End Compare Button-->
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!--End Product Image-->
                        <!--Start Product Details-->
                        <div class="product-details text-center">
                            <!--Product Name-->
                            <div class="product-name">
                                <a href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                            </div>
                            <!--End Product Name-->
                            <!--Product Price-->
                            <div class="product-price">
                                <span class="price">$199.00</span>
                            </div>
                            <!--End Product Price-->
                            <!--Product Review-->
                            <div class="product-review d-flex align-items-center justify-content-center">
                                <i class="an an-star"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i><i class="an an-star-o"></i>
                                <span class="caption hidden ms-2">2 reviews</span>
                            </div>
                            <!--End Product Review-->
                            <!--Color Variant-->
                            <ul class="swatches">
                                <li class="swatch medium rounded-0 darkgreen"><span class="tooltip-label">darkgreen</span></li>
                            </ul>
                            <!--End Color Variant-->
                        </div>
                        <!--End Product Details-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Recently Viewed Products-->

        <!--Customize Services-->
        <div class="section about-service product-service pb-0">
            <div class="container">
                <div class="section-header col-12">
                    <h2 class="text-transform-none">Why Optimal?</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center mb-4 mb-md-0">
                        <div class="service-info">
                            <i class="icon an an-desktop mb-3"></i>
                            <div class="text">
                                <h4>Design Quality</h4>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center mb-4 mb-md-0">
                        <div class="service-info">
                            <i class="icon an an-mobile-alt mb-3"></i>
                            <div class="text">
                                <h4>Mobile First Design</h4>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center mb-0 mb-md-0">
                        <div class="service-info">
                            <i class="icon an an-sort-amount-up mb-3"></i>
                            <div class="text">
                                <h4>High Speed & Performance</h4>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for interested.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Customize Services-->
    </div>
@endsection
