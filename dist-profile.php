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
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item">Profile</li>
                       
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href="profile-edit.html" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-edit"></i></a>
                </div>
            </div>
        </div> 
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card mcard_3">
                        <div class="body">
                            <a href="profile.html"><img src="assets/images/profile_av.jpg" class="rounded-circle shadow " alt="profile-image"></a>
                            <h4 class="m-t-10">Muhammad</h4>                            
                            <div class="row">
                                <div class="col-12">
                                    <p>Phone: 0363686386638</p>
                                    <p class="text-muted">Danyore Gilgit</p>
                                </div>
                                                         
                            </div>
                        </div>
                    </div>
                                       
                </div>

                <div class="col-lg-12 col-md-12">
                   <div class="card">
                        <div class="table-responsive">
                        <table class="table table-hover c_table theme-color">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Attachment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td><strong><a href="javascript:void(0);">VBRK</a></strong></td>
                                    <td>Billing Document: Header Data </td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><a style="color: #fff;" href="view-invoice.php"><i class="zmdi zmdi-eye"></i></a></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td><strong><a href="javascript:void(0);">BBAS</a></strong></td>
                                    <td>Document Flow</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img1.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td><strong><a href="javascript:void(0);">AKSS</a></strong></td>
                                    <td>Document: Item Status</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img2.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td><strong><a href="javascript:void(0);">BKRT</a></strong></td>
                                    <td>Customer Master <i>sales</i> Data</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img3.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td><strong><a href="javascript:void(0);">VBRK</a></strong></td>
                                    <td><i>sales</i> Order to BOM Link</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img4.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td><strong><a href="javascript:void(0);">BBAS</a></strong></td>
                                    <td>Organization Unit: Business Area Determination</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img5.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td><strong><a href="javascript:void(0);">AKSS</a></strong></td>
                                    <td>Customer master credit management: Control area data</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img6.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td><strong><a href="javascript:void(0);">BKRT</a></strong></td>
                                    <td>Packing: Handling Unit Item (Contents)</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);"img7.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td><strong><a href="javascript:void(0);">BKRT</a></strong></td>
                                    <td>Customer Master <i>sales</i> Data</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img8.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><strong><a href="javascript:void(0);">VBRK</a></strong></td>
                                    <td><i>sales</i> Order to BOM Link</td>
                                    <td>10000</td>
                                    <td><a href="javascript:void(0);">img9.jpg</a></td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="zmdi zmdi-email"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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