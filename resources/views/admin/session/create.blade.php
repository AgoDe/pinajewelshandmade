<!doctype html>
<html lang="en">
<head>
    <!--Required Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- Title Of Site -->
    <title>Admin | Pina Jewels Handmade</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />

    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="login-page">
<!-- Page Loader -->
<div id="pre-loader"><img src="/assets/images/loader.gif" alt="Loading..." /></div>
<!-- End Page Loader -->

<!--Page Wrapper-->
<div class="page-wrapper">
    <!--Body Container-->
    <div id="page-content">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h1 class="collection-hero__title">Login</h1>
                    <div class="breadcrumbs text-uppercase mt-1 mt-lg-2">Torna alla <a href="/" class="text-underline">Homepage</a></div>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <!--Container-->
        <div class="container w-1/2">
            {{-- TODO: aggiungere errori form --}}
            {{-- TODO: correggere layout container --}}
            <form method="post" action="#" class="customer-form">
                <h3 class="h4 text-uppercase">Sezione Amministratore</h3>
                <p>pannello di controllo e-commerce</p>
                <div class="container ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="admin_email" class="d-none">Email <span class="required">*</span></label>
                            <input type="email"
                                   name="email"
                                   placeholder="Email"
                                   id="admin_email"
                                   value=""
                                   required
                            />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="admin_password" class="d-none">Password <span class="required">*</span></label>
                            <input type="password"
                                   name="password"
                                   placeholder="Password"
                                   id="admin_password"
                                   value=""
                                   required
                            />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                        <p class="d-flex-center">
                            <input type="submit" class="btn rounded me-auto" value="Accedi">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </p>
                    </div>
                </div>
            </form>

        </div>
        <!--End Container-->
    </div>
    <!--End Body Container-->

    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon an an-chevron-up"></i></span>
    <!--End Scoll Top-->

    <!--MiniCart Drawer-->
    <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="cart-drawer" class="block block-cart">
                    <div class="minicart-header">
                        <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                        <h4 class="fs-6">Your cart (2 Items)</h4>
                    </div>
                    <div class="minicart-content">
                        <ul class="clearfix">
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image" href="product-layout1.html">
                                    <img class="blur-up lazyload" src="/assets/images/products/cart-product-img1.jpg" data-src="/assets/images/products/cart-product-img1.jpg" alt="image" title="">
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Floral Crop Top</a>
                                    <div class="variant-cart">Black / XL</div>
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
                                            <input type="text" name="quantity" value="1" class="qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image" href="product-layout1.html">
                                    <img class="blur-up lazyload" src="/assets/images/products/cart-product-img2.jpg" data-src="/assets/images/products/cart-product-img2.jpg" alt="image" title="">
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">V Neck T-shirts</a>
                                    <div class="variant-cart">Blue / XL</div>
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
                                            <input type="text" name="quantity" value="1" class="qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom">
                        <div class="shipinfo text-center mb-3 text-uppercase">
                            <p class="freeShipMsg"><i class="an an-truck fs-5 me-2 align-middle"></i>SPENT <b>$199.00</b> MORE FOR FREE SHIPPING</p>
                        </div>
                        <div class="subtotal">
                            <span>Total:</span>
                            <span class="product-price">$93.13</span>
                        </div>
                        <a href="checkout-style1.html" class="w-100 p-2 my-2 btn btn-outline-primary proceed-to-checkout rounded">Proceed to Checkout</a>
                        <a href="cart-style1.html" class="w-100 btn-primary cart-btn rounded">View Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End MiniCart Drawer-->
    <div class="modalOverly"></div>


    <!-- Including Jquery -->
    <script src="/assets/js/vendor/jquery-min.js"></script>
    <script src="/assets/js/vendor/js.cookie.js"></script>
    <!--Including Javascript-->
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>

</div>
<!--End Page Wrapper-->
</body>
</html>
