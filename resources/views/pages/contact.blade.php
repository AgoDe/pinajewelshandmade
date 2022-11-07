@extends('layouts.app')

@section('title', 'Contatti | Pina Jewels Handmade')

@section('description', '')

@section('optionalCss')
    <link rel="stylesheet" href="/assets/css/optionalStyle.css" />
@endsection

@section('content')
    <div class="container contact-pstyle2">
        <!-- Collection Banner -->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h2 class="collection-hero__title text-white">Contact us</h2>
                    <p class="collection__subtitle fs-6 text-white">keep in touch with us</p>
                </div>
            </div>
        </div>
        <!-- End Collection Banner -->

        <!-- Contact Form - Details -->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <!-- Contact Form -->
                <div class="formFeilds contact-form form-vertical mt-2 mt-md-0">
                    <h1 class="text-center text-capitalize mb-4">Drop Us A Line</h1>
                    <form action="php/ajax_sendmail.php" name="contactus" method="post" id="contact-form" class="contact-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="ContactFormName" name="name" class="form-control" placeholder="Name" />
                                    <span class="error_msg" id="name_error"></span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" id="ContactFormEmail" name="email" class="form-control" placeholder="Email" />
                                    <span class="error_msg" id="email_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number"  />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" id="ContactSubject" name="subject" class="form-control" placeholder="Subject" />
                                    <span class="error_msg" id="subject_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea id="ContactFormMessage" name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                    <span class="error_msg" id="message_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mailsendbtn mb-0 w-100">
                                    <input class="btn w-100 rounded" type="submit" name="contactus" value="Send Message" />
                                    <div class="loading"><img class="img-fluid" src="assets/images/ajax-loader.gif" alt="loading"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="response-msg"></div>
                </div>
                <!-- End Contact Form -->
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <!-- Contact Details -->
                <div class="contact-details">
                    <ul class="list-unstyled">
                        <li class="mb-4 address"><strong class="d-block mb-2">ADDRESS :</strong><p class="m-0"><i class="icon an an-map-marker-al me-2 d-none"></i> 55 Gallaxy Enque, 2568 steet, 23568 NY</p></li>
                        <li class="mb-3 phone"><strong>PHONE : </strong><i class="icon an an-phone me-2 d-none"></i> (440) 000 000 0000</li>
                        <li class="email"><strong>EMAIL:</strong><i class="icon an an-envelope-l me-2 d-none"></i> info@example.com</li>
                    </ul>
                    <hr>
                    <div class="open-hours"><strong class="d-block mb-2">OPENING HOURS</strong>
                        Mon - Sat : 9am - 11pm<br>
                        Sunday: 11am - 5pm
                    </div>
                    <hr>
                    <div class="follow-us">
                        <label class="d-block mb-3"><strong>STAY CONNECTED</strong></label>
                        <div class="social-sharing d-flex-center">
                            <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook m-0 pb-1 px-1"></i><span class="d-none share-title">Facebook</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter m-0 pb-1 px-1"></i><span class="d-none share-title">Tweet</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p pb-1 m-0 px-1"></i> <span class="d-none share-title">Pin it</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-instagram" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon an an-instagram m-0 pb-1 px-1"></i><span class="d-none share-title">Instagram</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-tikTok" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on TikTok"><i class="icon an an-tiktok m-0 pb-1 px-1"></i><span class="d-none share-title">TikTok</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Whatsapp"><i class="icon an an-whatsapp m-0 pb-1 px-1"></i><span class="d-none share-title">Whatsapp</span></a>
                        </div>
                    </div>
                </div>
                <!-- End Contact Details -->
            </div>
        </div>
        <!-- End Contact Form - Details -->

        <!-- Contact Map -->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="map-section ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=" allowfullscreen="" height="650"></iframe>
                </div>
            </div>
        </div>
        <!-- End Contact Map -->

        <!--Instagram Section-->
        <div class="section home-instagram pb-0">
            <div class="section-header">
                <h2 class="text-transform-none">Follow @OPTIMAL on instagram</h2>
                <p>Optimal is an online fashion store</p>
            </div>
            <!--Instagram Slider-->
            <div class="instagram-section instagram-slider clearfix">
                <div class="instagram-item">
                    <a href="#;">
                        <img src="assets/images/instagram/ins-1.jpg" data-src="assets/images/instagram/ins-1.jpg" alt="" title="" class="blur-up lazyload" />
                        <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#;">
                        <img src="assets/images/instagram/ins-1.jpg" data-src="assets/images/instagram/ins-1.jpg" alt="" title="" class="blur-up lazyload" />
                        <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#;">
                        <img src="assets/images/instagram/ins-1.jpg" data-src="assets/images/instagram/ins-1.jpg" alt="" title="" class="blur-up lazyload" />
                        <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#;">
                        <img src="assets/images/instagram/ins-1.jpg" data-src="assets/images/instagram/ins-1.jpg" alt="" title="" class="blur-up lazyload" />
                        <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#;">
                        <img src="assets/images/instagram/ins-1.jpg" data-src="assets/images/instagram/ins-1.jpg" alt="" title="" class="blur-up lazyload" />
                        <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#;">
                        <img src="assets/images/instagram/ins-1.jpg" data-src="assets/images/instagram/ins-1.jpg" alt="" title="" class="blur-up lazyload" />
                        <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#;">
                        <img src="assets/images/instagram/ins-1.jpg" data-src="assets/images/instagram/ins-1.jpg" alt="" title="" class="blur-up lazyload" />
                        <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#;">
                        <img src="assets/images/instagram/ins-1.jpg" data-src="assets/images/instagram/ins-1.jpg" alt="" title="" class="blur-up lazyload" />
                        <span class="ins-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
            </div>
            <!--End Instagram Slider-->
        </div>
        <!--End Instagram Section-->
    </div>
@endsection
