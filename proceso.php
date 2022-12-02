<?php
  //Variable para implementar las alertas
  $entrar="";
//   DECLARAMOS LA VARIABLE Y LE ASIGNAMOS EL PARAMETRO DE LA URL
  $idMascota = isset($_GET['id_mascota']);

  $fecha = "";
  
  $comentarios = "";

  include_once('sesiones.php');

  
  if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $fecha=$_POST['fecha'];
      
      $comentarios=$_POST['comentarios'];
    //   
      $mascota = $_POST['mascota'];


    

      include_once('conexion.php');
// Generamos la query 
      $consulta="insert into adoptan (id_adopcion,id_cliente, id_mascota, fecha, comentarios)
       VALUES (null,'$idUsuario', '$mascota', '$fecha', '$comentarios')";

    //   echo('consulta');
      
      $resultado=mysqli_query($con,$consulta);

      if ($resultado)
      { 
        $entrar="ado";
      }
      else
      {
        $entrar="noado";
      }

   }
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>
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
    <div class="page-loader"></div> Display loading image while page loads
    <div class="body">

        <!--========== BEGIN HEADER ==========-->
        <header id="header" class="header-main">

            <!-- Begin Navbar -->
            <nav id="main-navbar" class="navbar navbar-fixed-top bg-primary" role="navigation">
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
                            
                            <li><a class="navbar__item page-scroll" href="adopta.php">Volver al Catalogo</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
            <!-- End Navbar -->

        </header>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

        <h1 class="text-off-white">_</h1>
        <br><br><br><br><br><br>
        <footer  id="login" >

            <div class="footer-top">
                <div class="container">
                    <div class="row wow bounceInLeft" data-wow-delay="0.1s">

                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.1s">
                                    <h2 class="bl">proceso de adopción</h2>
                                    <div class="devider"></div>
                                    <p  class="bl">Llena el siguiente formulario para adoptar a tu mascota</p>
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="centrado">
                            <div class="contact-form">
                                <form role="form">
                                   
                                <div class="form-group">
                                    <!-- agremamos un imput y le asignamos el valor de la varibale id_mascota -->
                                        <input type="hidden" name="mascota" value="<?php echo $idMascota; ?>">
                                        <input type="hidden"  class="form-control input-lg"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input id="fechaCha" type="hidden" name="fecha" class="form-control input-lg" placeholder="Fecha"
                                            required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="text"name="comentarios" class="form-control input-lg" placeholder="Comentarios"
                                            required>
                                    </div>
                                    <br><br><br><br>
                                    <button type="submit" class="boton-env" data-wow-delay="0.8s">Confirmar Adopción</button>
                                    <br>
                                    <br><br>
                                </form>

                                
                            </div>
                        </div>
                        <!-- End team-->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
<br><br><br><br>
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

    <script>
        function getdata(){
            console.log(document.getElementById('fechaCha').value);
            var txtOne = document.getElementById('fechaCha').value;
            console.log(textOne);
            // Do Something 
        }
    </script>
</body>
</html>



<?php include_once("alertas.php")?>