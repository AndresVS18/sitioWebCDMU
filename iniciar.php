<?php
include_once 'logica/funciones.php';
$fun = new funciones();
?>
!DOCTYPE html>
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

  <!--Business.css-->
  <link href="css/Business.css" rel="stylesheet">

    <link href="css/Style0.css" rel="stylesheet">



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

<<<<<<< HEAD
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

  <!--Inicio del Inicio de sesion-->
  <div class="container">

    <header>
      <h1>Login and Registration Form</h1>

    </header>
    <section>
      <div id="container_demo" >
        <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
          <div id="login" class="animate form">
            <form  action="mysuperscript.php" autocomplete="on">
              <h1>Log in</h1>
              <p>
                <label for="username" class="uname" > Your email or username </label>
                <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
              </p>
              <p>
                <label for="password" class="youpasswd"> Your password </label>
                <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
              </p>
              <p class="keeplogin">
                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                <label for="loginkeeping">Keep me logged in</label>
              </p>
              <p class="login button">
                <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" ></a>
              </p>
              <p class="change_link">
                Not a member yet ?
                <a href="#toregister" class="to_register">Join us</a>
              </p>
            </form>
          </div>

          <div id="register" class="animate form">
            <form  action="mysuperscript.php" autocomplete="on">
              <h1> Sign up </h1>
              <p>
                <label for="usernamesignup" class="uname" >Your username</label>
                <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
              </p>
              <p>
                <label for="emailsignup" class="youmail"  > Your email</label>
                <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
              </p>
              <p>
                <label for="passwordsignup" class="youpasswd" >Your password </label>
                <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
              </p>
              <p>
                <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
              </p>
              <p class="signin button">
                <input type="submit" value="Sign up"/>
              </p>
              <p class="change_link">
                Already a member ?
                <a href="#tologin" class="to_register"> Go and log in </a>
              </p>
            </form>
          </div>

        </div>
      </div>
    </section>
  </div>

  <!--Final de Iniciar sesion-->

  <footer style="background-color: #282c34">

    <div class="container">
      <h1 style=" color: #e94c3d">CONTACT</h1> <br>
      <div class="col-xs-12 col-sm-12 col-md-8" style="color: #e9e2d8">
        <div class="glyphicon glyphicon-earphone" style="font-size:30px"> 238.123.4567 </div>
        <br><br>
        <div class="glyphicon glyphicon-envelope" style="font-size:30px"> CDMU@example.com </div>
        <br><br>
        <div class="glyphicon glyphicon-map-marker" style="font-size:30px"> 3481 Melrose Place Beverly Hills, CA 90210
        </div>
      </div>

      <div class="col-xs-12 col-sm-12  col-md-4"   >
        <h1 style=" color: #e94c3d; ">FOLLOW US</h1>
        <ul class="list-unstyled  list-inline" style= "font-size:80px" >
          <li class="icono"><a href="#"><i class="fa fa-facebook-square" style="color: white"></i></a></li>
          <li class="icono"><a href="#"><i class="fa fa-twitter-square" style="color: white"></i></a></li>
          <li class="icono"><a href="#"><i class="fa fa-instagram" style="color: white"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>
=======
    <!--Inicio del Inicio de sesion-->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <div class="main">


        <div class="container">
    <center>
    <div class="middle">
          <div id="login">

            <form action="javascript:void(0);" method="get">

              <fieldset class="clearfix">

                <p ><span class="fa fa-user"></span><input type="text"  Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fa fa-lock"></span><input type="password"  Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->

                 <div>
                                    <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Forgot
                                    password?</a></span>
                                    <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Sign In"></span>
                                </div>

              </fieldset>
    <div class="clearfix"></div>
            </form>

            <div class="clearfix"></div>

          </div> <!-- end login -->
          <div class="logo">LOGO

              <div class="clearfix"></div>
          </div>

          </div>
    </center>
        </div>

    </div>

  <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->



      <!--Final de Iniciar sesion-->

      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 footer-col">
              <div class="logofooter">Contactanos</div>
              <p><i class="fa fa-map-pin"></i> #228, Tiruvannamalai, Tamilnadu, India Phone (India) : +91 9999 999 999,  E-mail : info@prabuuideveloper.com</p>
            </div>

            <div class="col-lg-4 col-md-4 footer-col">
              <h6 class="heading7">SIGUENOS</h6>
              <div class="post">
                <p>facebook caarack the movie advertisment <br> code:what it means for you <span>August 3,2015</span></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 footer-col">
              <h6 class="heading7">SIGUENOS</h6>
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
>>>>>>> eadae1cc917e084005e9573bbc17ed191a6559fb

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>

</html>
