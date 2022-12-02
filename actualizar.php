<?php
   include_once("sesiones.php");

   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="select * from mascotas where id_mascota='$id'";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   //Variable para implementar las alertas
   $entrar="";

   if ($_SERVER["REQUEST_METHOD"]=="POST"){
       $id=$_POST['id'];
       $nombre=$_POST['nombre'];
       $edad=$_POST['edad'];
       $adoptado=$_POST['adoptado'];


       $consulta="update mascotas set nombre_mascota='$nombre',edad='$edad',
       adoptado='$adoptado' where id_mascota='$id'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
           //echo "<script>
             //       alert('.:: Registro Actualizado con Exito ::.');
               //     location.href='administrar.php';
                //</script>";
                $entrar="act";
       }
       else{
            //echo "<script>
              //      alert('Fallo la actualización, intentelo de nuevo ...');
                //    location.href='actualizar.php';
                 // </script>";
                 $entrar="noact";
       }


   }

?>



<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMINISTRAR</title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="estilos.css">

    <script src="main.js"></script>
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

<body data-spy="scroll" data-target="#main-navbar">
    

    <div class="page-loader"></div> <!-- Display loading image while page loads -->
    <div class="body">

        <!--========== BEGIN HEADER ==========-->
        <header id="header" class="header-main">

            <!-- Begin Navbar -->
            <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                            <li><a class="navbar__item page-scroll" href="administrar.php">Regresar</a></li>

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
                    <div class="row wow bounceInLeft" data-wow-delay="0.4s">

                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                    <h2 class="bl">EDITAR MASCOTA</h2>
                                    <div class="devider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="centrado">
                            
                                
                                
                                <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center" >
            <tr class="form-group">
                <td><input class="form-control input-lg"  type="text" name="nombre" id="nombrelbl" required placeholder="Nombre: " autofocus value="<?php echo $fila['nombre_mascota'] ?>"><br></td>
            </tr>
            <tr class="form-group">
                <td><input class="form-control input-lg" type="text" name="edad" id="apellidoslbl" required placeholder="Edad: " value="<?php echo $fila['edad'] ?>" ><br></td>
            </tr>

            <tr class="form-group">
                <td class="form-group"><input class="form-control input-lg" type="text" name="adoptado" id="apellidoslbl" required placeholder="adoptado: " value="<?php echo $fila['adoptado'] ?>" ></td>
            </tr>




            <tr>
                <td><br><input class="boton-env" data-wow-delay="0.8s" type="submit" name="enviar" Value="Guardar Cambios"   ></td>
            </tr>
        </table>
        <input type="hidden" name="id" Value="<?php echo $fila['id_mascota'] ?> "  >
    </form>
                                
                            </div>
                        </div>
                        <!-- End team-->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>

            <br><br><br><br><br><br><br>
   
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
