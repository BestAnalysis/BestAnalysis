
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
        include_once '../nav-bar.php';
    ?>
    <section id="login">
        <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                    <div>
                        <div class="form-group" style="width:45%; float:left;">
                            <input class="form-control" id="name" type="name" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group" style="width:45%; float:left; margin-left:10%;">
                            <input class="form-control" id="surname" type="surname" placeholder="Your Surname *" required="required" data-validation-required-message="Please enter your surname.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" type="pass" placeholder="Your Password *" required="required" data-validation-required-message="Please enter your password.">
                    <p class="help-block text-danger"></p>
                  </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Sign Up</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section>
        <?php
            include_once "../footer.php";
        ?>
    </section>
</body>
    <!-- Bootstrap core JavaScript -->
    <script src="../app/vendor/jquery/jquery.min.js"></script>
    <script src="../app/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../app/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../app/views/js/jqBootstrapValidation.js"></script>
    <script src="../app/views/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../app/views/js/agency.min.js"></script>
</html>