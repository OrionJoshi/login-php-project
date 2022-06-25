<?php
include('includes/functions.php');
if(isset($_POST['register'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if($name != '' && $email != '' && $password != ''){
    register($name ,$email, $password);
  }
  else{
    $alert = new PHPAlert();
    $alert->info("All feilds are required");
  }
}
session_start();
if(isset($_SESSION['user'])){
	header('location:profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FoxyLab Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="includes/vendors/feather/feather.css">
  <link rel="stylesheet" href="includes/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="includes/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="includes/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="includes/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="includes/images/logo.png" style="width: 220px; margin-left: -5px" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="">
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-lg" required id="exampleInputName1" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" required id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" required id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" required>
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN UP">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="includes/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="includes/js/off-canvas.js"></script>
  <script src="includes/js/hoverable-collapse.js"></script>
  <script src="includes/js/template.js"></script>
  <script src="includes/js/settings.js"></script>
  <script src="includes/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
