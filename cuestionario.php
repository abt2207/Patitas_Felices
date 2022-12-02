<?php
  //Variable para implementar las alertas
  $entrar="";
  if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
   
      $correo=$_POST['correo'];
      $respuesta1=$_POST['respuesta1'];
      $respuesta2=$_POST['respuesta2'];
      $respuesta3=$_POST['respuesta3'];
      $respuesta4=$_POST['respuesta4'];
      $respuesta5=$_POST['respuesta5'];
      $respuesta6=$_POST['respuesta6'];
      $respuesta7=$_POST['respuesta7'];
      $respuesta8=$_POST['respuesta8'];
      $respuesta9=$_POST['respuesta9'];
      $respuesta10=$_POST['respuesta10'];
      

      echo "no sirve este echo"; 



      include_once('conexion.php');

      $consulta="insert into test values(null,'$correo','$respuesta1','$respuesta2','$respuesta3','$respuesta4','$respuesta5','$respuesta6','$respuesta7','$respuesta8','$respuesta9','$respuesta10')";

      $resultado=mysqli_query($con,$consulta);

      if ($resultado)
      {
        //echo "<script>
          //      alert('Registro insertado Exitosamente');
            //    location.href='insertar.php';
             ///script>"; 
             $entrar="registradi";
      }
      else
      {
        //echo "<script>
          //      alert('Registro No insertado, intentelo de nuevo');
            //    location.href='insertar.php';
              //</script>"; 
              $entrar="noregi";
      }

   }

  

?>


<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skin/cool-gray.css">

</head>

<body data-spy="scroll" data-target="#main-navbar" class="body1">
    <div class="page-loader"></div> <!-- Display loading image while page loads -->
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
        
        <form class="form"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

    
        <h4>cuestionario Patitas Felices</h4>
            
            <div class="devider"></div>
                <br>

                <center>
            <input type="text" class="dis" name="correo" placeholder="Ingresa tu Correo Electronico">
</center>
<br>

   
                <table border="3" align-items="center" style="margin: 0 auto;" >
               
                    <td>
                        <p class="dis">¿Te gustan las mascotas?</p>
                           </td>
                           <td class="radio">
                               <input type="radio" name="respuesta1" value="si">
                               <label>Sí</label>
                               <input type="radio" name="respuesta1" value="no" >
                               <label>No</label>
                           </td>
                       </tr>
                    <tr>
                        <td>
                     <p class="dis">¿Estas interesado en adoptar una mascota en lo particular?</p>
                        </td>
                        <td class="radio">
                            <input class="resp" type="radio" name="respuesta2" value="si">
                            <label>Sí</label>
                            <input type="radio" name="respuesta2" value="no">
                            <label>No</label>
                    
                        </td>
                    </tr>
                    <tr>
                     <td>
                  <p class="dis" >¿La mascota que adooptara es para usted?</p>
                     </td>
                     <td class="radio">
                         <input type="radio" name="respuesta3" value="si">
                         <label>Sí</label>
                         <input type="radio" name="respuesta3" value="no">
                         <label>No</label>
                        
                     </td>
                 </tr>
                
                     <td >
                  <p class="dis">¿Hay niños en la casa?</p>
                     </td>
                     <td class="radio">
                         <input type="radio" name="respuesta4" value="si">
                         <label>Sí</label>
                         <input type="radio" name="respuesta4" value="no">
                         <label>No</label>
                     </td>
                 </tr>
                 <tr>
                     <td>
                  <p class="dis">¿Todos los familiares estan de acuerdo con la adopcion?</p>
                     </td>
                     <td class="radio">
                         <input type="radio" name="respuesta5" value="si">
                            <label>Sí</label>
                            <input type="radio" name="respuesta5" value="no">
                            <label>No</label>
                        
                     </td>
                 </tr>
                 <tr>
                     <td>
                  <p class="dis">¿Hay otro tipo de animales en la casa?</p>
                     </td>
                     <td class="radio">
                         <input type="radio" name="respuesta6" value="si">
                            <label>Sí</label>
                            <input type="radio" name="respuesta6" value="no">
                            <label>No</label>
                        
                        
                     </td>
                 </tr>
        
                    <td>
                     <p class="dis">¿Tiene casa propia?</p>
                        </td>
                        <td class="radio">
                         <input type="radio" name="respuesta7" value="si">
                         <label>Sí</label>
                         <input type="radio" name="respuesta7" value="no">
                         <label>No</label>
                        </td>
                    </tr>
                    <td>
                     <p class="dis">¿Posee algun espacio libre?</p>
                        </td>
                        <td class="radio">
                         <input type="radio" name="respuesta8" value="si">
                         <label>Sí</label>
                         <input type="radio" name="respuesta8" value="no">
                         <label>No</label>
                        </td>
                    </tr>
                    
                    <td>
                     <p class="dis">¿Tiene tiempo para sacar a pasear a la mascota?</p>
                        </td>
                        <td class="radio">
                            <input type="radio" name="respuesta9" value="si">
                            <label>Sí</label>
                            <input type="radio" name="respuesta9" value="no">
                            <label>No</label>
                        </td>
                    </tr>

                    <td>
                        <p class="dis">¿Ante una mudanza se llevaria a la mascota con el?</p>
                           </td>
                           <td class="radio">
                               <input type="radio" name="respuesta10" value="si">
                               <label>Sí</label>
                               <input type="radio" name="respuesta10" value="no">
                               <label>No</label>
                           </td>
                       </tr>

                </table>
                

                
</form>
        <br><br><center>
                <button type="submit" class="boton-env" data-wow-delay="0.8s">Enviar</button>
                </center><br><br><br>


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