<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Distribution Agency:: Add Distributer</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css" />

<link rel="stylesheet" href="assets/plugins/dropify/css/dropify.min.css">

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

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add Invoice</h2>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item">Invoice</li>
                        <li class="breadcrumb-item active">list</li>
                    </ul>
                    
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    
                
            </div>
        </div>
        </div>
                    <form action="#">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <div class="input-group masked-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-account"></i></span>
                                        </div>
                                        <input type="text" class="form-control date" placeholder="Distributor Name">
                                    </div>
                                </div>
                                <div class="form-group">                                   
                                    <div class="input-group masked-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-map"></i></span>
                                        </div>
                                        <input type="text" class="form-control date" placeholder="Area">
                                    </div>
                                </div>
                                <div class="form-group">                                   
                                    <div class="input-group masked-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control date" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="form-group">                                   
                                    <div class="input-group masked-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Attach File</h2>
                                </div>
                                <div class="body">
                                    <input type="file" class="dropify">
                                </div>
                            </div>
                            <button type="button" data-color="deep-orange" class="btn bg-deep-orange waves-effect">Submit</button>
                        
                    
                    
                    </form>
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
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 
</body>
</html>