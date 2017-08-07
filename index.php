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

  <title>CDDMU</title>

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

      <!-- Collect the nav links, forms, and other content for toggling -->
      <?php $fun->menu();  ?>


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
                <img class="img-responsive img-full" src="img/sli2.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive img-full" src="img/sli1.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive img-full" src="img/sli3.jpg" alt="">
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
        <img class="img-responsive img-border img-left" src="img/serv.jpg" alt="">
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
        <img class="img-responsive img-border img-left" src="img/cur.jpg" alt="">
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
        <img class="img-responsive img-border img-left" src="img/oportunidad.jpg" alt="">
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
              <img class="img-responsive img-full" src="img/slid1.jpg" alt="">
            </div>
            <div class="item">
              <img class="img-responsive img-full" src="img/slid2.jpg" alt="">
            </div>
            <div class="item">
              <img class="img-responsive img-full" src="img/slid3.jpg" alt="">
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

  </div>

</div>
<!-- /.container -->
</body>
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
  <?php $fun->footer();  ?>


</html>
