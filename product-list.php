<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Distribution Agency:: Invoice</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
<style>
    .list{
        overflow-y: scroll !important;
    }
</style>

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt=""></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<?php include_once('rightnav.php'); ?>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <?php include_once('sidenav.php'); ?>
</aside>

<!-- Main Content -->

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Product List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item">Products</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th data-breakpoints="xs md">Detail</th>
                                        <th data-breakpoints="sm md">SKU</th>
                                        <th data-breakpoints="sm xs">Amount</th>
                                        <th data-breakpoints="xs md">Stock</th>
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="assets/images/ecommerce/1.png" width="48" alt="Product img"></td>
                                        <td><h5>Simple Black Clock</h5></td>
                                        <td><span class="text-muted">randomised words even slightly believable</span></td>
                                        <td><span class="text-muted">1ltr</span></td>
                                        <td>$16.00</td>
                                        <td><span class="col-green">In Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/ecommerce/10.png" width="48" alt="Product img"></td>
                                        <td><h5>Brone Candle</h5></td>
                                        <td><span class="text-muted">It is a long established  will be distracted</span></td>
                                        <td><span class="text-muted">1ltr</span></td>
                                        <td>$15.00</td>
                                        <td><span class="col-amber">Low Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/ecommerce/11.png" width="48" alt="Product img"></td>
                                        <td><h5>Wood Simple Clock</h5></td>
                                        <td><span class="text-muted">There passages of Lorem Ipsum available</span></td>
                                        <td><span class="text-muted">1ltr</span></td>
                                        <td>$16.00</td>
                                        <td><span class="col-amber">Low Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/ecommerce/5.png" width="48" alt="Product img"></td>
                                        <td><h5>Unero Small Bag</h5></td>
                                        <td><span class="text-muted">It is a long established fact that a distracted</span></td>
                                        <td><span class="text-muted">1ltr</span></td>
                                        <td>$23.00</td>
                                        <td><span class="col-red">Out Of Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/ecommerce/6.png" width="48" alt="Product img"></td>
                                        <td><h5>Simple Black Clock</h5></td>
                                        <td><span class="text-muted">Contrary to popular belief, simply random text</span></td>
                                        <td><span class="text-muted">1ltr</span></td>
                                        <td>$16.00</td>
                                        <td><span class="col-green">In Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/ecommerce/2.png" width="48" alt="Product img"></td>
                                        <td><h5>Brone Lamp Glasses</h5></td>
                                        <td><span class="text-muted">All the Lorem Ipsum generators on predefined chunks</span></td>
                                        <td><span class="text-muted">1ltr</span></td>
                                        <td>$12.00</td>
                                        <td><span class="col-green">In Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/ecommerce/3.png" width="48" alt="Product img"></td>
                                        <td><h5>Simple Black Clock</h5></td>
                                        <td><span class="text-muted">established fact that a be distracted</span></td>
                                        <td><span class="text-muted">1ltr</span></td>
                                        <td>$22.00</td>
                                        <td><span class="col-red">Out Of Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>        
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">                            
                            <ul class="pagination pagination-primary m-b-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>