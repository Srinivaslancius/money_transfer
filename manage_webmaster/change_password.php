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
                    <h6 class="page-title-heading mr-0 mr-r-5">Tambahkan Pengguna Admin</h6>
                    
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <?php 
error_reporting(0);
if (!isset($_POST['submit']))  {
} else  { 
    //echo "<pre>"; print_r($_POST); die;  
    $id = $_SESSION["admin_user_id"];
    $sql = "SELECT * FROM admin_users WHERE id = '$id'";
    $result = $conn->query($sql);
    $getAdminUserPwd = $result->fetch_assoc();

    if($_POST['current_password'] == decryptPassword($getAdminUserPwd['admin_password'])){
        
        $sql1 = "UPDATE admin_users SET admin_password = '" . encryptPassword($_POST["confirm_password"]) . "' WHERE  id = '$id'";
        if($conn->query($sql1) === TRUE){                
            echo "<script>alert('Password Changed Successfully');window.location.href='dashboard.php';</script>";
        }          
    } else {  
        echo "<script>alert('Current Password is not Correct');window.location.href='change_password.php';</script>";
    }
}
?>
            <div class="widget-list">
                <div class="row widget-bg">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 widget-holder">
                        <div>
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Tambahkan Pengguna Admin</h5>
                                <p class="text-muted"></p>
                                <form method="post">
                                
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Current Password</label>
                                        <div class="col-md-9">
                                            <input type="password" name="current_password" class="form-control"  placeholder="*********" data-error="Please enter Current Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">New Password</label>
                                        <div class="col-md-9">
                                            <input type="password"  name="new_password" class="form-control"  id="new_password" minlength="8" placeholder="*********" data-error="Please enter New Password(minimum 8 characters)."  required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Confirm Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" minlength="8" placeholder="*********" data-error="Please enter Confirm Password."   name="confirm_password" id="confirm_password" required onChange="checkPasswordMatch();">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                        <div id="divCheckPasswordMatch" style="color:red"></div>
                                    </div>
                                    <div id="divCheckPasswordMatch" style="color:red"></div>    
                                    <div class="form-actions btn-list">
                                        <center><button class="btn btn-primary" type="submit" name="submit">Menyerahkan</button></center>
                                        
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
<script>
function checkPasswordMatch() {
    var password = $("#new_password").val();
    var confirmPassword = $("#confirm_password").val();
    if (confirmPassword != password) {
        $("#divCheckPasswordMatch").html("Passwords do not match!");
        $("#confirm_password").val("");
    } else {
        $("#divCheckPasswordMatch").html("");
    }
}
</script>
</html>