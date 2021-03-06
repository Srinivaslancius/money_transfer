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
                    <h6 class="page-title-heading mr-0 mr-r-5">Edit pengguna Admin</h6>
                    
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    
                    <div class="d-none d-md-inline-flex justify-center align-items-center"><a href="view_admin_users.php" class="btn btn-color-scheme btn-sm fs-11 fw-400 mr-l-40 pd-lr-10 mr-l-0-rtl mr-r-40-rtl hidden-xs hidden-sm ripple">Lihat Pengguna Admin</a>
                    </div>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <?php $id = $_GET['bid']; ?>
           
            <?php
        if (!isset($_POST['submit']))  {
          
        } else  { 

            $admin_name = $_REQUEST['admin_name'];
            $admin_email = $_REQUEST['admin_email'];
            $admin_password = encryptPassword($_REQUEST['admin_password']);
            $lkp_status_id = $_REQUEST['lkp_status_id'];

            $sql = "UPDATE `admin_users` SET admin_name = '$admin_name',admin_email = '$admin_email',lkp_status_id = '$lkp_status_id' WHERE id = '$id' ";
            $result = $conn->query($sql);           
            if( $result == 1){
                echo "<script type='text/javascript'>window.location='view_admin_users.php?msg=success'</script>";
            } else {
                echo "<script type='text/javascript'>window.location='view_admin_users.php?msg=fail'</script>";
            }
        }
        ?>
        <?php $getAdminUsers = getIndividualDetails('admin_users','id',$id);
        
         ?>
            <div class="widget-list">
                <div class="row widget-bg">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 widget-holder">
                        <div>
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Edit pengguna Admin</h5>
                                <p class="text-muted"></p>
                                <form method="post">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Nama admin</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" type="text" required name="admin_name" value="<?php echo $getAdminUsers['admin_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Email Admin</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required name="admin_email" value="<?php echo $getAdminUsers['admin_email']; ?>" id="user_input" onkeyup="checkUserAvailTest()">
                                            <span id="input_status" style="color: red;"></span>
                                            <div class="help-block with-errors"></div>
                                            <input type="hidden" id="table_name" value="admin_users">
                                            <input type="hidden" id="column_name" value="admin_email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Password Admin</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  type="password" required id="admin_password"  name="admin_password" value="<?php echo decryptPassword($getAdminUsers['admin_password']);?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">konfirmasi sandi</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" type="password" required name="confirm_password" id="confirm_password" onChange="checkPasswordMatch();">
                                        </div>
                                    </div>
                                    <div id="divCheckPasswordMatch" style="color:red"></div>
                                    <?php $getStatus = getAllData('lkp_status');?>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Status</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="lkp_status_id" name="lkp_status_id" required>
                                            <?php while($row = $getStatus->fetch_assoc()) {  ?>
                                              <option <?php if($row['id'] == $getAdminUsers['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                                          <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-actions btn-list">
                                        <center><button class="btn btn-primary" type="submit" name="submit">Memperbarui</button></center>
                                        
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
    <script type="text/javascript">
            function checkPasswordMatch() {
                var password = $("#admin_password").val();
                var confirmPassword = $("#confirm_password").val();
                if (confirmPassword != password) {
                    $("#divCheckPasswordMatch").html("Sandi tidak cocok!");
                    $("#admin_password").val("");
                    $("#confirm_password").val("");
                } else {
                    $("#divCheckPasswordMatch").html("");
                }
            }
            
        </script>
</body>
</html>