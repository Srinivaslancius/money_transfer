 <div class="side-user">
                <div class="col-sm-12 text-center p-0 clearfix">
                    <div class="d-inline-block pos-relative mr-b-10">
                        <figure class="thumb-sm mr-b-0 user--online">
                            <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                        </figure><a href="page-profile.html" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
                    </div>
                    <!-- /.d-inline-block -->
                    <div class="lh-14 mr-t-5"><a href="page-profile.html" class="hide-menu mt-3 mb-0 side-user-heading fw-500"><?php echo $_SESSION['admin_user_name']; ?></a>                       
                    </div>
                </div>
                <!-- /.col-sm-12 -->
            </div>
            <!-- /.side-user -->
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    
                    <li class="current-page"><a href="dashboard.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Dasbor</span></a></li>
                    <li class="current-page"><a href="site_settings.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Pengaturan Situs</span></a></li>
                    <li><a href="add_admin.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Login Admin</span></a></li>
                    <li><a href="add_districts.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Distrik</span></a></li>
                     <li><a href="add_religions.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Agama</span></a></li>
                    <li><a href="user.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Pengguna</span></a></li>                    
                    <li><a href="add_merchants.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Pedagang</span></a></li>
                    <li><a href="view_merchant_transactions.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">MerchantTransactions</span></a></li>
                    <li><a href="view_user_transactions.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Transaksi Pengguna</span></a></li>
                    
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
            <div class="sidebar-module nav-contact-info mx-3 mt-4 mb-3">
                <div class="d-flex flex-column align-items-center">
                    <h6 class="mb-2 fs-14">Butuh bantuan</h6><i class="feather feather-bell fs-24 color-color-scheme"></i>
                </div>
                <!-- /.d-flex -->
                <div class="contact-info-body bg-content-color-contrast text-center">
                    <p class="lh-25 headings-font-family">+1 888 543 7432
                        <br>hello@website.com
                        
                    </p>
                </div>
                <!-- /.contact-info-body -->
            </div>