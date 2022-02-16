<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Distribution Agency:: View Invoice</title>
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
                    <h2>Invoice</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Invoice</a></li>
                       
                        <li class="breadcrumb-item active">view Invoice</li>
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
                        <div class="body">
                            <h5><strong>Order ID: </strong> #123456</h5>
                            <div class="row">                                
                                <div class="col-md-6 col-sm-6">
                                    <address>
                                        <strong>Saqib Traders</strong><br>
                                        Danyore, Gilgit<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-34636
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    <p class="mb-0"><strong>Order Date: </strong> Dec 02, 2021</p>
                                    <p class="mb-0"><strong>Order Status: </strong> <span class="badge badge-success">Success</span></p>                                    
                                </div>
                            </div>
                        </div>                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover c_table theme-color">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th width="60px">Item</th>
                                                <th></th>
                                                <th class="hidden-sm-down">Description</th>
                                                <th>Quantity</th>
                                                <th class="hidden-sm-down">Unit Cost</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img src="assets/images/ecommerce/1.png" width="40" alt="Product img"></td>
                                                <td>Simple Black Clock</td>
                                                <td class="hidden-sm-down">Lorem ipsum dolor sit amet.</td>
                                                <td>1</td>
                                                <td class="hidden-sm-down">$380</td>
                                                <td>$380</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><img src="assets/images/ecommerce/2.png" width="40" alt="Product img"></td>
                                                <td>Brone Candle</td>
                                                <td class="hidden-sm-down">There are many variations of passages of Lorem Ipsum</td>
                                                <td>5</td>
                                                <td class="hidden-sm-down">$50</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><img src="assets/images/ecommerce/3.png" width="40" alt="Product img"></td>
                                                <td>Wood Simple Clock</td>
                                                <td class="hidden-sm-down">Lorem ipsum dolor sit amet.</td>
                                                <td>2</td>
                                                <td class="hidden-sm-down">$500</td>
                                                <td>$1000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><img src="assets/images/ecommerce/4.png" width="40" alt="Product img"></td>
                                                <td>Unero Small Bag</td>
                                                <td class="hidden-sm-down">Contrary to popular belief, Lorem Ipsum is not simply random text</td>
                                                <td>3</td>
                                                <td class="hidden-sm-down">$300</td>
                                                <td>$900</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Note</h5>
                                    <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <ul class="list-unstyled">
                                        <li><strong>Sub-Total:-</strong> 2930.00</li>
                                        <li class="text-danger"><strong>Discout:-</strong> 12.9%</li>
                                        <li><strong>VAT:-</strong> 12.9%</li>
                                    </ul>                                    
                                    <h3 class="mb-0 text-success">USD 2930.00</h3>
                                    <a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                                </div>
                            </div>
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