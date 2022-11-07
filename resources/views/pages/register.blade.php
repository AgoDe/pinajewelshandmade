@extends('layouts.app')

@section('title', 'Registrazione | Pina Jewels Handmade')

@section('description', '')

@section('optionalCss')
    <link rel="stylesheet" href="/assets/css/optionalStyle.css" />
@endsection

@section('content')
    <!--Body Container-->
    <div id="page-content">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h1 class="collection-hero__title">Create An Account</h1>
                    <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="index.html" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Create An Account</span></div>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <!--Container-->
        <div class="container">
            <!--Main Content-->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 box mt-2 mt-lg-5">
                    <h3 class="h4 text-uppercase mb-3">Personal Information</h3>
                    <form method="post" action="#" accept-charset="UTF-8" class="customer-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerFirstName" class="d-none">First Name <span class="required">*</span></label>
                                    <input id="CustomerFirstName" type="text" name="customer[first-name]" placeholder="First Name" required />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerLastName" class="d-none">Last Name <span class="required">*</span></label>
                                    <input id="CustomerLastName" type="text" name="customer[Last-name]" placeholder="Last Name" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail" class="d-none">Email Address <span class="required">*</span></label>
                                    <input id="CustomerEmail" type="email" name="customer[email]" placeholder="Email" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-check col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="customCheckbox clearfix">
                                    <input id="newsletter" name="newsletter" type="checkbox" />
                                    <label for="newsletter">Sign Up for Newsletter</label>
                                </div>
                            </div>
                        </div>
                        <h3 class="h4 text-uppercase mb-3">Login Information</h3>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                    <input id="CustomerPassword" type="password" name="customer[Password]" placeholder="Password" required />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerConfirmPassword" class="d-none">Confirm Password <span class="required">*</span></label>
                                    <input id="CustomerConfirmPassword" type="Password" name="customer[ConfirmPassword]" placeholder="Confirm Password" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-left col-12 col-sm-12 col-md-6 col-lg-6">
                                <input type="submit" class="btn rounded mb-3" value="Submit">
                            </div>
                            <div class="text-right col-12 col-sm-12 col-md-6 col-lg-6">
                                <a href="login.html"><i class="align-middle icon an an-an-double-left me-2"></i>Back To Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Main Content-->
        </div>
        <!--End Container-->
    </div>
    <!--End Body Container-->

@endsection
