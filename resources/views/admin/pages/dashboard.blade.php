@extends('admin.layouts.admin')

@section('title', 'Admin Login | Pina Jewels Handmade')

@section('description', '')

@section('content')
    <div class="row dashboard-card mb-3">
        <div class="col-12 col-sm-6 co-md-4 col-lg-4">
            <div class="card card-body bg-green">
                <div class="icontext d-flex">
                    <span class="icon rounded-circle d-flex-center justify-content-center"><i class="an an-dollar-sign fs-5"></i></span>
                    <div class="fl-1 ms-3 text-content">
                        <h5 class="mb-1 card-title text-white">Total Revenue</h5>
                        <span class="text">$80,950</span>
                        <span class="text-sm"> Shipping fees are not included </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 co-md-4 col-lg-4">
            <div class="card card-body bg-pink">
                <div class="icontext d-flex">
                    <span class="icon rounded-circle d-flex-center justify-content-center"><i class="an an-truck-l fs-5"></i></span>
                    <div class="fl-1 ms-3 text-content">
                        <h5 class="mb-1 card-title text-white">Total Orders</h5>
                        <span class="text">4567</span>
                        <span class="text-sm">48% From Last 24 Hours</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 co-md-4 col-lg-4">
            <div class="card card-body bg-orange">
                <div class="icontext d-flex">
                    <span class="icon rounded-circle d-flex-center justify-content-center"><i class="an an-qrcode2 fs-5"></i></span>
                    <div class="fl-1 ms-3 text-content">
                        <h5 class="mb-1 card-title text-white">Total Products</h5>
                        <span class="text">1540</span>
                        <span class="text-sm">In 49 Categories</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row main-dashboard">
        <div class="col-12 col-sm-12 co-md-6 col-lg-12 mb-3">
            <div class="dashboard-vendor-card">
                <div class="db-card-header d-flex-center justify-content-between mb-3">
                    <h4 class="text-uppercase mb-0">Latest Order</h4>
                    <a class="btn btn-small" href="#">View All</a>
                </div>
                <div class="db-card-body">
                    <div class="db-card-table table-responsive">
                        <table class="table align-middle">
                            <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-bottom-0">ID</th>
                                <th scope="col" class="border-bottom-0">Image</th>
                                <th scope="col" class="border-bottom-0">Name</th>
                                <th scope="col" class="border-bottom-0 text-center">Method</th>
                                <th scope="col" class="border-bottom-0 text-center">Status</th>
                                <th scope="col" class="border-bottom-0 text-center">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="border-bottom"><span>#222</span></th>
                                <td class="border-bottom prod-img"><img src="assets/images/products/100x120.jpg" alt="product" width="50" /></td>
                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Button Top Black</a></td>
                                <td class="border-bottom text-center"><i class="an an-credit-card-l an-1x me-2"></i><span>COD</span></td>
                                <td class="border-bottom text-center"><span>Delivered</span></td>
                                <td class="border-bottom text-center fw-500"><span>$320</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="border-bottom"><span>#223</span></th>
                                <td class="border-bottom prod-img"><img src="assets/images/products/100x120.jpg" alt="product" width="50" /></td>
                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Sunset Sleep Top</a></td>
                                <td class="border-bottom text-center"><span><i class="an an-credit-card-l an-1x me-2"></i>Cash</span></td>
                                <td class="border-bottom text-center"><span>Pending</span></td>
                                <td class="border-bottom text-center fw-500"><span>$214</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="border-bottom"><span>#224</span></th>
                                <td class="border-bottom prod-img"><img src="assets/images/products/100x120.jpg" alt="product" width="50" /></td>
                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Hoodie Sweatshirt</a></td>
                                <td class="border-bottom text-center"><span><i class="an an-credit-card-l an-1x me-2"></i>Ewallets</span></td>
                                <td class="border-bottom text-center"><span>On Way</span></td>
                                <td class="border-bottom text-center fw-500"><span>$548</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 co-md-6 col-lg-12 mb-3">
            <div class="dashboard-vendor-card">
                <div class="db-card-header d-flex-center justify-content-between mb-3">
                    <h4 class="text-uppercase mb-0 me-auto">Product List</h4>
                    <a class="btn btn-small" href="#">View All</a> <a class="btn btn-small btn-secondary ms-3" href="vendor-uploads.html">Add</a>
                </div>
                <div class="db-card-body">
                    <div class="db-card-table table-responsive">
                        <table class="table align-middle">
                            <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-bottom-0">ID</th>
                                <th scope="col" class="border-bottom-0">Image</th>
                                <th scope="col" class="border-bottom-0">Name</th>
                                <th scope="col" class="border-bottom-0 text-center">Price</th>
                                <th scope="col" class="border-bottom-0 text-center">sales</th>
                                <th scope="col" class="border-bottom-0 text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="border-bottom"><span>#2125</span></th>
                                <td class="border-bottom prod-img"><img src="assets/images/products/100x120.jpg" alt="product" width="50" /></td>
                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Floral Crop Top</a></td>
                                <td class="border-bottom product-price text-center">
                                    <span class="old-price">$199.00</span>
                                    <span class="price">$219.00</span>
                                </td>
                                <td class="border-bottom text-center"><span>245</span></td>
                                <td class="border-bottom text-center">
                                    <a href="#" class="edit-i remove me-1"><i class="icon an an-edit-l an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"></i></a>
                                    <a href="#" class="remove ms-1"><i class="an an-trash-al an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="border-bottom"><span>#2126</span></th>
                                <td class="border-bottom prod-img"><img src="assets/images/products/100x120.jpg" alt="product" width="50" /></td>
                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Mini Sleev Top</a></td>
                                <td class="border-bottom product-price text-center">
                                    <span class="price">$219.00</span>
                                </td>
                                <td class="border-bottom text-center"><span>684</span></td>
                                <td class="border-bottom text-center">
                                    <a href="#" class="edit-i remove me-1"><i class="icon an an-edit-l an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"></i></a>
                                    <a href="#" class="remove ms-1"><i class="an an-trash-al an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="border-bottom"><span>#2127</span></th>
                                <td class="border-bottom prod-img"><img src="assets/images/products/100x120.jpg" alt="product" width="50" /></td>
                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Trim Button Front Blouse</a></td>
                                <td class="border-bottom product-price text-center">
                                    <span class="price">$219.00</span>
                                </td>
                                <td class="border-bottom text-center"><span>159</span></td>
                                <td class="border-bottom text-center">
                                    <a href="#" class="edit-i remove me-1"><i class="icon an an-edit-l an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"></i></a>
                                    <a href="#" class="remove ms-1"><i class="an an-trash-al an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
            <div class="card mb-4 mb-lg-0">
                <div class="card-body">
                    <h4 class="card-title text-uppercase mb-1">Sale statistics</h4>
                    <p class="small mb-3"> Lorem Ipsum is simply dummy text of the printing </p>
                    <canvas id="myChart" height="155"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
            <div class="card mb-0 mb-lg-0">
                <article class="card-body">
                    <h4 class="card-title text-uppercase mb-1">Revenue Base on Country</h4>
                    <p class="small mb-3"> Manage your current sale and buy orders </p>
                    <canvas id="myChart2" height="225"></canvas>
                </article>
            </div>
        </div>
    </div>
@endsection
