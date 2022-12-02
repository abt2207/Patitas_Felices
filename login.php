<?php

   session_start();

   if (isset($_SESSION))
   {
       session_destroy();
   }


   //Variable para implementar las alertas
   $entrar="";

   if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $us=$_POST['usuario'];
      $ps=$_POST['contrasena'];

      include_once('conexion.php');

      $consulta="select id_cliente,user,pwd,privilegio from usuarios where user='$us' and pwd='$ps'";

      $resultado=mysqli_query($con,$consulta);

      if (mysqli_num_rows($resultado)>0)
      {
          if ($fila=mysqli_fetch_assoc($resultado))
          {
              $priv=$fila['privilegio'];
             

              session_start();
              $_SESSION['id_cliente']=$fila['id_cliente'];
              $_SESSION['user']=$us;
              $_SESSION['pwd']=$ps;
              $_SESSION['privilegio']=$priv;
            

        

              //Entre al menu de opciones 
             // echo "Usuario y contraseña correctas -Bienvenido al sistema-";

             if ($priv=="admin"){
                //echo "<script>
                //alert('-Bienvenido- $names');
               // location.href='menu.php';
             // </script>";
             $entrar="admin";
             }
             else{
               // echo "<script>
                //alert('-Bienvenido- $names');
               // location.href='administrar.php';
             // </script>";
             $entrar="estandar";
             }
            

          }
      }
      else
      {
          //echo "Usuario y contraseña incorrectas por favor verifique ...";
        // echo "<script>
                // alert('Usuario y contraseña incorrectas por favor verifique ...');
                // location.href='login.php';
              // </script>";
              $entrar="error1";
      }

   }



?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar Sesion</title>
    <meta name="description" content="Unika - Responsive One Page HTML5 Template">
    <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
    <meta name="author" content="imransdesign.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <!-- Navbar font -->

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="inc/animations/css/animate.min.css">
    <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
    <link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skin/cool-gray.css">

</head>

<body data-spy="scroll" data-target="#main-navbar" class="body1">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="page-loader bg-primary"></div> <!-- Display loading image while page loads -->
    <div class="body">

        <!--========== BEGIN HEADER ==========-->
        <header id="header" class="header-main">

            <!-- Begin Navbar -->
            <nav id="main-navbar" class="navbar navbar-fixed-top bg-primary" role="navigation ">
                <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a  href="index.php"> <img src="img/logo.png" alt="" width="260" height="75"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                        <li><a class="navbar__item page-scroll" href="glogin/login.php">Iniciar sesion con Google</a></li>
                            <li><a class="navbar__item page-scroll" href="index.php">Regresar</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
            <!-- End Navbar -->

        </header>
        <h1 class="text-off-white">_</h1>
        <br><br><br><br><br><br>
        <footer  id="login">

            <div class="footer-top">
                <div class="container">
                    <div class="row wow bounceInLeft" data-wow-delay="0.4s" >

                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow" data-wow-delay="0.4s">
                                    <h2 class="bl">iniciar sesion</h2>
                                    <div class="devider"></div>
                                    <p  class="bl">Para adoptar inicia sesion o crea una cuenta</p>
                                </div>
                            </div>
                        </div>
                        <div class="centrado">
                            <div class="contact-form">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" name="usuario" class="form-control input-lg"
                                            placeholder="Nombre de usuario" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="password" name="contrasena" class="form-control input-lg"
                                            placeholder="Contraseña" required>
                                    </div>
                                   

                                    <button type="submit" class="boton-env" data-wow-delay="0.8s">Enviar</button>
                                    <br>
                                    <br><br>

                                </form>
                                <a href="registro.php" class="text-white"><u>Crear cuenta nueva</u></a> <br> <br>
                                <a href="rec_contra.php" class="text-white"><u>¿Olvidaste tu contraseña?</u></a>
                            </div>
                        </div>
                        <!-- End team-->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>

    <script src="inc/jquery/jquery-1.11.1.min.js"></script>
    <script src="inc/bootstrap/js/bootstrap.min.js"></script>
    <script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="inc/stellar/js/jquery.stellar.min.js"></script>
    <script src="inc/animations/js/wow.min.js"></script>
    <script src="inc/waypoints.min.js"></script>
    <script src="inc/isotope.pkgd.min.js"></script>
    <script src="inc/classie.js"></script>
    <script src="inc/jquery.easing.min.js"></script>
    <script src="inc/jquery.counterup.min.js"></script>
    <script src="inc/smoothscroll.js"></script>

    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>

<?php include_once("alertas.php")?>