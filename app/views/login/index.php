
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="../../app/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../app/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <!-- <link href="../css/agency.min.css" rel="stylesheet"> -->
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/agency.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigator -->
    <?php
        include_once '../app/views/shared/nav-bar.php';
    ?>
    <section id="login">
        <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form id="loginForm" name="loginForm" action="http://localhost/public/login/login" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="email" class="form-control" id="email" type="text" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input name="password" class="form-control" id="password" type="password" placeholder="Your Password *" required="required" data-validation-required-message="Please enter your password.">
                    <p class="help-block text-danger"></p>
                  </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="signinButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name="login">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


        <?php
            include_once "../app/views/shared/footer.php";
        ?>

</body>
    <!-- Bootstrap core JavaScript -->
    <script src="../../app/vendor/jquery/jquery.min.js"></script>
    <script src="../../app/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../app/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/agency.min.js"></script>
</html>