<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Indonesia Project</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600|Roboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
</head>

<body class="body-bg-full profile-page" style="background-image: url(assets/demo/error-page.jpg)">
    <div id="wrapper" class="row wrapper">
        <div class="container-min-full-height d-flex justify-content-center align-items-center">
            <div class="login-center">
                <!-- display error message -->
      <?php if(isset($_GET['error']) && $_GET['error']=='fail') { ?>
      <div class="col-sm-12 col-sm-offset-12" id="set_valid_msg">
        <div class="alert alert-danger alert-icon-bg alert-dismissable" role="alert">
          <div class="alert-icon">
            <i class="zmdi zmdi-check"></i>
          </div>
          <div class="alert-message">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="zmdi zmdi-close"></i>
              </span>
            </button>
            <strong>Oh snap!</strong> Entered Username or Password is incorrect!.
          </div>
        </div>
      </div>
      <?php } elseif(isset($_GET['error']) && $_GET['error']=='invalid') {  ?>
      <div class="col-sm-12 col-sm-offset-12" id="set_valid_msg">
        <div class="alert alert-danger alert-icon-bg alert-dismissable" role="alert">
          <div class="alert-icon">
            <i class="zmdi zmdi-check"></i>
          </div>
          <div class="alert-message">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="zmdi zmdi-close"></i>
              </span>
            </button>
            <strong>Oh jepret!</strong> Permintaan tidak valid !.
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- end error message -->
                <div class="navbar-header text-center mb-5">
                    <a href="index.php">
                        <img alt="" src="assets/demo/logo-expand-dark.png">
                    </a>
                </div>
                <!-- /.navbar-header -->
                <form autocomplete="off" method="post" action="login-script.php" data-toggle="validator">
                    <div class="form-group">
                        <label for="example-email">nama pengguna</label>
                        <input type="email" autofocus="autofocus" placeholder="masukkan nama pengguna anda" class="form-control form-control-line" name="admin_email" id="example-email" required>
                    </div>
                    <div class="form-group">
                        <label for="example-password">kata sandi</label>
                        <input type="password" placeholder="masukkan kata sandi anda" class="form-control form-control-line" name="admin_password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-lg btn-color-scheme text-uppercase fs-12 fw-600" type="submit">masuk</button>
                    </div>
                    <div class="form-group no-gutters mb-0">
                        <div class="col-md-12 d-flex">
                            <div class="checkbox checkbox-primary mr-auto mr-0-rtl ml-auto-rtl">
                                <label class="d-flex">
                                    <input type="checkbox"> <span class="label-text">ingat saya</span>
                                </label>
                            </div><a href="javascript:void(0)" id="to-recover" class="my-auto pb-2 text-right"><i class="material-icons mr-2 fs-18">lock</i>lupa kata sandi</a>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.form-group -->
                </form>
                <!-- /.form-material -->
                <hr>
                
            </div>
            <!-- /.login-center -->
        </div>
        <!-- /.d-flex -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material-design.js"></script>
</body>


</html>