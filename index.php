<?php
include_once 'logica/funciones.php';
$fun = new funciones();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

<<<<<<< HEAD
  <title>Contact - Business Casual - Start Bootstrap Theme</title>
=======


    <button type="button" name="button">HOLA</button>

    <title>Contact - Business Casual - Start Bootstrap Theme</title>
>>>>>>> eadae1cc917e084005e9573bbc17ed191a6559fb

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">
  <link href="css/Style.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <div class="brand">Business Casual</div>
  <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
        <a class="navbar-brand" href="index.html">Business Casual</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <?php $fun->menu();  ?>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <div class="container">

    <div class="row">
      <div class="box">
        <div class="col-lg-12 text-center">
          <div id="carousel-example-generic" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-xs">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img class="img-responsive img-full" src="img/s1.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive img-full" src="img/s2.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="icon-next"></span>
            </a>
          </div>
          <h2 class="brand-before">
            <small>Bienvenidos a </small>
          </h2>
          <h1 class="brand-name">C D M U</h1>

        </h2>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
          <a href=""><strong>SERVICIOS</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/servicios.jpg" alt="">
        <hr class="visible-xs">
        <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
        <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
          <a href=""><strong>CURSOS</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/cursos.jpg" alt="">
        <hr class="visible-xs">
        <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
        <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
          <a href=""><strong>OPORTUNIDADES DE TRABAJO</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
        <hr class="visible-xs">
        <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
        <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="box">
      <div class="col-lg-12 text-center">
        <div id="carousel-example-generic" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators hidden-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img class="img-responsive img-full" src="img/sl1.jpg" alt="">
            </div>
            <div class="item">
              <img class="img-responsive img-full" src="img/sl2.jpg" alt="">
            </div>
            <div class="item">
              <img class="img-responsive img-full" src="img/sl3.jpg" alt="">
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="icon-next"></span>
          </a>
        </div>

      </div>
    </div>
<<<<<<< HEAD
  </div>

</div>
<!-- /.container -->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 footer-col">
        <div class="logofooter">Contactanos</div>
        <p><i class="fa fa-map-pin"></i> #228, Tiruvannamalai, Tamilnadu, India Phone (India) : +91 9999 999 999,  E-mail : info@prabuuideveloper.com</p>
=======




    <!-- /.container -->



    <footer>
      <div class="container">

          <div class="col-md-3 col-md-offset-3 footer-col">
            <h2 style="color:white">CONTACTANOS</h2>
            <p><i class="fa fa-map-pin"></i>
              #228, Tiruvannamalai, Tamilnadu, India <br>
              Phone (India) : +91 9999 999 999,  <br>
              E-mail : info@prabuuideveloper.com</p>
          </div>


          <div class="col-md-6 footer-col">
            <h2 style="color:white">SIGUENOS</h2>
            <ul class="footer-social">
              <li><i class="fa fa-facebook social-icon facebook" style="font-size:50px" aria-hidden="true"></i></li>
              <li><i class="fa fa-twitter social-icon twitter" style="font-size:50px" aria-hidden="true"></i></li>
              <li><i class="fa fa-instagram social-icon instagram" style="font-size:50px" aria-hidden="true"></i></li>
            </ul>
          </div>

>>>>>>> eadae1cc917e084005e9573bbc17ed191a6559fb
      </div>

<<<<<<< HEAD
      <div class="col-lg-4 col-md-4 footer-col">
        <h6 class="heading7">LATEST POST</h6>
        <div class="post">
          <p>facebook crack the movie advertisment <br> code:what it means for you <span>August 3,2015</span></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 footer-col">
        <h6 class="heading7">Social Media</h6>
        <ul class="footer-social">
          <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
          <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
          <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
          <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
  interval: 5000 //changes the speed
})
</script>
=======

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
>>>>>>> eadae1cc917e084005e9573bbc17ed191a6559fb

</body>

</html>
