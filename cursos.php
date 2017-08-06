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
            <!-- se toma el menu desde una funcion -->
            <?php $fun->menu(); ?>
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
                <?php echo $fun->curso(); ?>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
    <div class="container">

        <div class="col-md-4 col-md-offset-2 footer-col " style="text-align:20px">
          <h2 style="color: #41a394 ">CONTACTANOS</h2> <hr>
          <li ><i class="icon fa fa-envelope" style="font-size: 20px; color: white" aria-hidden="true" >  E-mail : info@prabuuideveloper.com</i></li><br>
          <li ><i  class="icon fa fa-phone" style="font-size:  20px; color: white" aria-hidden="true" > Phone (India) : +91 9999 999 999,</i></li><br>
          <li ><i  class="icon fa fa-street-view" style="font-size: 20px; color: white" aria-hidden="true" > 3481 Melrose Place
Beverly Hills, CA 90210 </i></li>

        </div>


        <div class="col-md-3 col-md-offset-1 footer-col">
          <h2 style="color: #41a394 ">SIGUENOS</h2> <hr>
          <ul class="footer-social">
            <li><i class="fa fa-facebook social-icon facebook" style="font-size:50px" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter social-icon twitter" style="font-size:50px" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram social-icon instagram" style="font-size:50px" aria-hidden="true"></i></li>
          </ul>
        </div>

    </div>


  </div><br><hr>
</div>
</footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
