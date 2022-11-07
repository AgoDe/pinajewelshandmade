@extends('admin.layouts.admin')

@section('title', 'Lista Prodotti | Admin Pina Jewels Handmade')

@section('description', '')

@section('content')

    <!--Active Filters-->
    <ul class="active-filters d-flex flex-wrap align-items-center m-0 list-unstyled d-none">
        <li><a href="#">Clear all</a></li>
        <li><a href="#">Men <i class="an an-times-l"></i></a></li>
        <li><a href="#">Neckalses <i class="an an-times-l"></i></a></li>
        <li><a href="#">Accessories <i class="an an-times-l"></i></a></li>
    </ul>
    <!--End Active Filters-->
    <!--Toolbar-->
    <div class="toolbar mt-0">
        <div class="filters-toolbar-wrapper">
            <ul class="list-unstyled d-flex align-items-center">
                <li class="product-count d-flex align-items-center">
                    <a href="{{route('product.create')}}">
                        <button type="button" class="btn-primary rounded-3">
                            <i class="an an-plus-r mx-2"></i>
                            <span>Nuovo prodotto</span>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="toolbar mt-3">
        <div class="filters-toolbar-wrapper">
            <ul class="list-unstyled d-flex align-items-center justify-content-between">
                <li class="product-count d-flex align-items-center">
                    <button type="button" class="btn btn-filter an an-slider-3 d-inline-flex d-lg-none me-2 me-sm-3"><span class="hidden">Filter</span></button>
                    <div class="filters-toolbar__item">
                        <span class="filters-toolbar__product-count d-none d-sm-block">Sono stati trovati {{count($products)}} prodotti</span>
                    </div>
                </li>
                <li class="filters-sort ms-auto ms-sm-0 d-flex">
                    <div class="filters-toolbar__item">
                        <label class="" for="search">Cerca:</label>
                        <input id="serch" name="search" type="text" placeholder="Cerca per nome" class="filters-toolbar__input filters-toolbar__input--sort">
                    </div>
                    <div class="filters-toolbar__item mx-3">
                        <label for="SortBy" class="">Ordina per:</label>
                        <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                            <option value="featured" selected="selected">Featured</option>
                            <option value="best-selling">Best selling</option>
                            <option value="title-ascending">Alphabetically, A-Z</option>
                            <option value="title-descending">Alphabetically, Z-A</option>
                            <option value="price-ascending">Price, low to high</option>
                            <option value="price-descending">Price, high to low</option>
                            <option value="created-ascending">Date, old to new</option>
                            <option value="created-descending">Date, new to old</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--End Toolbar-->

    <!--Product Grid-->
    <div class="grid-products grid--view-items prd-list">
        <div class="row">
            @foreach($products as $product)
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                {{--TODO: eliminare transizione in hover sopra immagine--}}
                {{--TODO: rivedere aspect ratio--}}
                <!--Start Product Image-->
                <div class="product-image">
                    <!--Start Product Image-->
                    <a href="{{route('product.show', $product->slug)}}" class="product-img">
                        <!-- image -->
                        <img class="primary blur-up lazyload" data-src="{{ asset('storage/' . $product->image_1)}}" src="{{ asset('storage/' . $product->image_1)}}" alt="image" title="">
                        <!-- End image -->
                    </a>
                    <!--End Product Image-->

                </div>
                <!--End Product Image-->
                <!--Start Product Details-->
                <div class="product-details text-center">
                    <!--Product Name-->
                    <div class="product-name text-uppercase">
                        <a href="{{route('product.show', $product->slug)}}">{{$product->name}}</a>
                    </div>
                    <!--End Product Name-->
                    <!--Product Price-->
                    <div class="product-price">
                        <span class="price">€ {{$product->price}}</span>
                    </div>
                    <!--End Product Price-->
                    <!--Sort Description-->
                    <p class="hidden sort-desc">{{$product->description}}</p>
                    <!--End Sort Description-->

                    <!-- Product Button -->
                    <div class="button-action d-flex">
                        <div class="quickview-btn mx-2">
                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon an an-eye"></i>
                                <span class="tooltip-label top">Dettaglio</span>
                            </a>
                        </div>
                        <div class="wishlist-btn mx-2">
                            <a class="btn btn-icon wishlist add-to-wishlist" href="{{route('product.edit', $product->slug)}}">
                                <i class="icon an an-edit-l"></i>
                                <span class="tooltip-label top">Modifica</span>
                            </a>
                        </div>
                        <div class="compare-btn mx-2">
                            <a class="btn btn-icon compare add-to-compare" href="compare.html">
                                <i class="icon an an-trash-al"></i>
                                <span class="tooltip-label top">Elimina</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Product Button -->
                </div>
                <!--End Product Details-->
            </div>
            @endforeach
        </div>
    </div>
    <!--End Product Grid-->

    <!--Pagination Classic-->
    <hr class="clear">
    <div class="pagination">
        {{$products->links()}}
    </div>
    <!--End Pagination Classic-->


@endsection
