<?php include_once 'meta.php'; ?>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600|Roboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
</head>

<body class="header-dark sidebar-light sidebar-expand" onload="checkCookies()">

   <!--  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div id="google_translate_element"></div>

    <script type="text/javascript">
    function checkCookies() {
       new google.translate.TranslateElement({pageLanguage: 'id'}, 'google_translate_element');
    }

    </script> -->

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
            <?php 
               $getUsers = "SELECT * FROM users ORDER BY lkp_status_id, id DESC";
               $getUsersData = $conn->query($getUsers); $i=1; ?>
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">User Registration</h6>
                    
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    
                    <div class="d-none d-md-inline-flex justify-center align-items-center"><a href="view_users.php" class="btn btn-color-scheme btn-sm fs-11 fw-400 mr-l-40 pd-lr-10 mr-l-0-rtl mr-r-40-rtl hidden-xs hidden-sm ripple">View Users</a>
                    </div>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row widget-bg">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 widget-holder">
                        <div>
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">User Registration</h5>
                                <p class="text-muted"></p>
                                <form method="post" action="Verification.php">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Nama</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="masukkan nama Anda" type="text" required name="user_full_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">E-mail</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Masukkan email Anda" type="email" required name="user_email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Mobile</label>
                                        <div class="col-md-9">
                                            <input class="form-control valid_mobile_num" id="l0" maxlength="10" placeholder="Masukkan Mobile Anda" type="text" required name="user_mobile">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Tempat / Tanggal lahir</label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="form-control" id="l0" placeholder="Masukkan Tempat Kelahiran" type="text" name="birth_place" required>
                                                </div>
                                                <div class="col-md-6 input-group">
                                                    <input type="text" class="form-control datepicker" data-plugin-options='{"autoclose": true,dateFormat: yyyy-mm-dd}' name="dob" required> <span class="input-group-addon"><i class="list-icon material-icons">date_range</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Jenis kelamin</label>
                                        <div class="col-md-9">
                                            <div class="radiobox">
                                                <label>
                                                    <input type="radio" name="gender" value="1" checked="checked" required> <span class="label-text">Male &nbsp;</span>
                                                </label>
                                                <label>
                                                    <input type="radio" name="gender" value="2" checked="checked" required> <span class="label-text">Female</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Alamat</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="l15" rows="3" name="masukkan alamat anda" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">RT / RW</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Masukkan RT / RW" type="text" required name="rt/rw">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">EX / Desa</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Masukkan EX / Desa" type="text" required name="ex/village">
                                        </div>
                                    </div>
                                    <?php $getDistricts = getAllDataWithStatus('lkp_districts','0');?>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Distrik</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="lkp_district_id" name="lkp_district_id" required>
                                                <option value="">-- Pilih Distrik --</option>
                                                <?php while($row = $getDistricts->fetch_assoc()) {  ?>
                                              <option value="<?php echo $row['id']; ?>"><?php echo $row['district_name']; ?></option>
                                          <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php $getReligion = getAllDataWithStatus('lkp_religion','0');?>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Agama</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="religion" name="religion" required>
                                                <option value="">-- Pilih Agama --</option>
                                                <?php while($row = $getReligion->fetch_assoc()) {  ?>
                                              <option value="<?php echo $row['id']; ?>"><?php echo $row['religion_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Status pernikahan</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="martial_status" name="martial_status" required>
                                                <option value="">Memilih Status pernikahan</option>
                                                <option value="1">Single</option>
                                                <option value="2">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Kerja</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Masukkan Pekerjaan Anda" type="text" name="work" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Kewarganegaraan</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Masukkan Kewarganegaraan Anda" type="text" name="citizenship" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-control-label col-md-3">Berlaku hingga</label>
                                        <div class="input-group col-md-9">
                                            <input type="text" class="form-control datepicker" data-plugin-options='{"autoclose": true,dateFormat: yyyy-mm-dd}' name="valid_until" required> <span class="input-group-addon"><i class="list-icon material-icons">date_range</i></span>
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    
                                    <div class="form-actions btn-list">
                                        <center><button class="btn btn-primary" type="submit" name="submit">Terus / Memproses</button></center>
                                        
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <div class="col-md-3"></div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrapper -->
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
     <script src="cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- This Script For number and price validations -->
    <script type="text/javascript" src="assets/js/check_number_validations.js"></script>
</body>
</html>