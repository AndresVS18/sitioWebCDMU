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

    <title>Contact - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/Style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">INCIO</a>
                    </li>
                    <li>
                        <a href="servicios.php">SERVICIOS</a>
                    </li>
                    <li>
                        <a href="cursos.php">CURSOS</a>
                    </li>

                    <li>
                        <a href="bolsa.php">Bolsa de trabajo</a>
                    </li>

                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Afiliarse<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="registrarse.php">Crear Usuario</a></li>
                    <li><a href="iniciar.php">Iniciar Sesion</a></li>
                    <li>
                        <a href="oportunidad.php">Oportunidad de trabajo</a>
                    </li>
                  </ul>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>CURSOS</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>JAVA
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <?php echo $fun->consulta4()?>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Post Title
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <?php echo $fun->consulta5()?>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Post Title
                        <br>
                        <small>October 13, 2013</small>
                    </h2>

                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 footer-col">
            <div class="logofooter">Contactanos</div>
            <p><i class="fa fa-map-pin"></i> #228, Tiruvannamalai, Tamilnadu, India Phone (India) : +91 9999 999 999,  E-mail : info@prabuuideveloper.com</p>
          </div>

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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
