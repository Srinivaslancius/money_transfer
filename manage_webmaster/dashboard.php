<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <link rel="stylesheet" href="assets/css/pace.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Default</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600|Roboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
</head>

<body class="header-dark sidebar-light sidebar-expand">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <?php include_once './topbar.php';?>
    <!-- /.navbar-right -->
    <!-- Right Menu -->
    
    <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- User Details -->
           <?php include_once 'side_menu.php';?>
            <!-- /.nav-contact-info -->
        </aside>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Default</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block"></p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Default</li>
                    </ol>
                    
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list row">
                <div class="widget-holder widget-full-content widget-full-height col-md-6">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <div class="counter-gradient">
                                <h3 class="fs-60 fw-600 mt-3 pt-1 h1 letter-spacing-minus"><span class="counter">6843</span></h3>
                                <h5 class="mb-4 fw-500">pengguna terdaftar baru</h5>
                                <p class="text-muted">Jumlah semua pengguna yang telah terdaftar
                                    </p>
                            </div>
                            <!-- /.widget-counter -->
                            <div class="row columns-border-bw border-top">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center pd-tb-30">
                                    <h3 class="fs-60 fw-600 mt-3 pt-1 h1 letter-spacing-minus"><span class="counter">100</span></h3>
                                    <label class="d-flex flex-md-row flex-column align-items-center cursor-pointer">
                                        
                                        <span class="text-muted mr-l-20 mr-l-0-rtl mr-r-20-rtl d-inline-block">Pengguna Aktif</span>
                                    </label>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center pd-tb-30">
                                    
                                    <h3 class="fs-60 fw-600 mt-3 pt-1 h1 letter-spacing-minus"><span class="counter">100</span></h3>
                                    <label class="d-flex flex-md-row flex-column align-items-center cursor-pointer">
                                        
                                        <span class="text-muted mr-l-20 mr-l-0-rtl mr-r-20-rtl d-inline-block">Pengguna Tidak Aktif</span>
                                    </label>
                                    <!-- /.col-6 -->
                                </div>
                                <!-- /.col-6 -->
                            </div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-height widget-flex col-md-6">
                    <div class="widget-bg">
                        <div class="widget-heading">
                            <h4 class="widget-title"><span class="color-color-scheme fw-600">876</span> <small class="h5 ml-1 my-0 fw-500">Pengguna baru</small></h4>
                            <div class="widget-graph-info"><i class="feather feather-chevron-up arrow-icon color-success"></i>  <span class="color-success ml-2">+34%</span>  <span class="text-muted ml-1">lebih dari minggu lalu</span>
                            </div>
                            <!-- /.widget-graph-info -->
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="mr-t-10 flex-1">
                                <div class="h-100" style="max-height: 270px">
                                    <canvas id="chartJsNewUsers" style="height:100%"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm widget-border-radius col-md-3">
                    <div class="widget-bg">
                        <div class="widget-heading bg-purple"><span class="widget-title my-0 color-white fs-12 fw-600">Total pendapatan</span>  <i class="widget-heading-icon feather feather-box"></i>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="counter-w-info">
                                <div class="counter-title color-color-scheme"><span class="counter">2.5</span>Crores</div>
                                <!-- /.counter-title -->
                                <div class="counter-info"><span class="badge bg-success-contrast"><i class="feather feather-arrow-up"></i> 23% Meningkat</span>dalam konversi</div>
                                <!-- /.counter-info -->
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm widget-border-radius col-md-3">
                    <div class="widget-bg">
                        <div class="widget-heading bg-purple"><span class="widget-title my-0 color-white fs-12 fw-600">Total pesanan</span>  <i class="widget-heading-icon feather feather-briefcase"></i>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="counter-w-info">
                                <div class="counter-title color-purple">&dollar;<span class="counter">846</span>
                                </div>
                                <!-- /.counter-title -->
                                <div class="counter-info"><span class="badge bg-danger-contrast"><i class="feather feather-arrow-down"></i> 6% mengurangi </span> di Pesanan</div>
                                <!-- /.counter-info -->
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm widget-border-radius col-md-3">
                    <div class="widget-bg">
                        <div class="widget-heading"><span class="widget-title my-0 fs-12 fw-600">Total Pedagang</span>  <i class="widget-heading-icon feather feather-anchor"></i>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="counter-w-info">
                                <div class="counter-title">
                                    <div class="d-flex justify-content-center align-items-end">
                                        <div data-toggle="circle-progress" data-start-angle="30" data-thickness="6" data-size="40" data-value="0.58" data-line-cap="round" data-empty-fill="#E2E2E2" data-fill='{"gradient": ["#40E4C2", "#0087FF"], "gradientAngle": -90}'></div><span class="counter ml-3">432</span>
                                    </div>
                                    <!-- /.d-flex -->
                                </div>
                                <!-- /.counter-title -->
                                <div class="counter-info"><span class="badge bg-success-contrast"><i class="feather feather-arrow-up"></i> 5% meningkat</span>
                                </div>
                                <!-- /.counter-info -->
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm widget-border-radius col-md-3">
                    <div class="widget-bg">
                        <div class="widget-heading"><span class="widget-title my-0 fs-12 fw-600">Keluhan</span>  <i class="widget-heading-icon feather feather-zap"></i>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="counter-w-info">
                                <div class="counter-title">
                                    <div class="d-flex justify-content-center align-items-center"><span data-toggle="sparklines" sparkheight="25" sparktype="bar" sparkchartrangemin="0" sparkbarspacing="3" sparkbarcolor="#947AE8" sparkbarcolor="red"><!-- 2,4,5,3,2,3,5 --> </span><span class="align-bottom ml-2"><span class="counter">670</span></span>
                                    </div>
                                    <!-- /.d-flex -->
                                </div>
                                <!-- /.counter-title -->
                                <div class="counter-info"><span class="badge bg-success-contrast"><i class="feather feather-arrow-up"></i> 5% meningkat </span>dalam periklanan</div>
                                <!-- /.counter-info -->
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.widget-list -->
            <hr>
            
            
            <!-- /.widget-list -->
            
            
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
        
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer"><span class="heading-font-family">Copyright @ 2018. All rights reserved by Arbeit Consultancy</span>
    </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.2/countUp.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/mithril/1.1.1/mithril.js"></script>
    <script src="assets/vendors/theme-widgets/widgets.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>