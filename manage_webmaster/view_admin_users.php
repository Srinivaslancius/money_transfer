<?php include_once 'meta.php'; ?>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600|Roboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/jquery-footable/3.1.4/footable.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <?php include_once './meta.php';?>
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
                    <h6 class="page-title-heading mr-0 mr-r-5">Lihat Pengguna Admin</h6>
                    
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
        
                    <!-- <div class="d-none d-md-inline-flex justify-center align-items-center"><a href="add_admin.php" class="btn btn-color-scheme btn-sm fs-11 fw-400 mr-l-40 pd-lr-10 mr-l-0-rtl mr-r-40-rtl hidden-xs hidden-sm ripple">Tambahkan Pengguna Admin</a>
                    </div> -->
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">
                    
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>Lihat Pengguna Admin</h5>
            
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                                <table class="table-responsive" data-toggle="datatables">
                                    <thead>
                                        <tr>
                                            <th data-identifier>ID</th>
                                            <th data-editable>Nama admin</th>
                                            <th data-editable>Email Admin</th>
                                            <th data-editable>Tanggal Dibuat</th>
                                            <th>Status</th>
                                            <!-- <th>Actions</th> -->
                                            <!-- <th>Started On</th>
                                            <th>Date of Birth</th> -->
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php $getAdminUsers = getAllDataWithActiveRecent('admin_users'); $i=1; ?>
                                        <?php while ($row = $getAdminUsers->fetch_assoc()) { ?>
                                        <tr data-expanded="true">
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['admin_name']; ?></td>
                                            <td><?php echo $row['admin_email']; ?></td>
                                            <td><?php echo $row['created_at']; ?></td>
                                            <td><?php if ($row['lkp_status_id']==0) { echo "<button class='button1'>Active</button>";} else { echo "<button class='button2'>InActive</button>"; }  ?></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php $i++; } ?>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
        
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <?php include_once 'footer.php'; ?>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery-footable/3.1.4/footable.min.js"></script>
    <script src="node_modules/jquery-tabledit/jquery.tabledit.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>