<!DOCTYPE html>
<?php
if(isset($_COOKIE['user'])) {
  header("Location: ../"); // uncomment when cookies created

}
?>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="eosSoftware">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>RealEstate | Sign In</title>

</head>

<body class="page-sub-page page-sign-in page-account" id="page-top">
<!-- Wrapper -->
<div class="wrapper">
  <!-- Navigation -->
 <div class="navigation">
     <div class="secondary-navigation">
         <div class="container">
             <div class="contact">
                 <figure><strong>Phone:</strong>+1 810-991-3842</figure>
                 <figure><strong>Email:</strong>info@realestate.com</figure>
             </div>
             <div class="user-area">
                 <div class="actions">

                     <a href="create-account.html" class="promoted"><strong>Register</strong></a>
                     <a href="sign-in.html">Sign In</a>
                 </div>
                 <div class="language-bar">
                     <a href="#" class="active"><img src="assets/img/flags/gb.png" alt=""></a>
                     <a href="#"><img src="assets/img/flags/de.png" alt=""></a>
                     <a href="#"><img src="assets/img/flags/es.png" alt=""></a>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <header class="navbar" id="top" role="banner">
             <div class="navbar-header">
                 <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <div class="navbar-brand nav" id="brand">
                     <a href="index-google-map-fullscreen.html"><img src="assets/img/logo.png" alt="brand"></a>
                 </div>
             </div>
             <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                 <ul class="nav navbar-nav">
                     <li><a href="#">Oportunidad para invertir</a></li>

                     <li><a href="#">RealEstate</a></li>
                     <li class="has-child"><a href="#">Conoce más</a>
                         <ul class="child-navigation">
                             <li><a href="#">Artículos</a></li>
                             <li><a href="#">Glosario</a></li>
                             <li></li>
                         </ul>
                     </li>
                     <li><a href="#">Soporte</a></li>
                 </ul>
             </nav><!-- /.navbar collapse-->
             <!-- <div class="add-your-property">
                 <a href="submit.html" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Add Your Property</span></a>
             </div> -->
         </header><!-- /.navbar -->
     </div><!-- /.container -->
 </div><!-- /.navigation -->
    <!-- end Navigation -->
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Sign In</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Sign In</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <form role="form" id="form-create-account" method="post" action="../CookieManager.php" accept-charset="UTF-8">
                        <div class="form-group">
                            <label for="form-create-account-email">Email:</label>
                            <input type="email" name="email" class="form-control" id="form-create-account-email" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-password">Password:</label>
                            <input type="password" class="form-control" id="form-create-account-password" required>
                        </div><!-- /.form-group -->
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Sign to My Account</button>
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center"><a href="#">I don't remember my password</a></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
    <footer id="page-footer">
        <div class="inner">
            <section id="footer-copyright">
                <div class="container">
                    <span>2019 © eos Software. All rights reserved</span>
                    <span class="pull-right"><a href="#page-top" class="roll">Go to top</a></span>
                </div>
            </section>
        </div><!-- /.inner -->
    </footer>
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->


</body>
</html>
