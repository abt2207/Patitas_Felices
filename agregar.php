
<?php  
  //Variable para implementar las alertas

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        //declara variable
        if(!isset($_FILES['imagen'])) { 
            echo '<p>Por Favor selecciones el archivo</p>'; }
        else{  
            try  
            {
                if($_FILES['imagen']['error']== UPLOAD_ERR_OK) {
                    //compruebe si el archivo se carga con HTTP POST
                    if(is_uploaded_file($_FILES['imagen']['tmp_name'])) {  
                        //comprueba el tamaño de la imagen cargada en el lado del servidor
                        echo '<br>Tamaño de la imagen:<br> ';
                        echo $_FILES['imagen']['size'];

                        if( $_FILES['imagen']['size'] != 0) {  
                            $finfo = finfo_open(FILEINFO_MIME_TYPE);
                            echo '<br>vamos bien';
                            if(strpos(finfo_file($finfo, $_FILES['imagen']['tmp_name']),"image")===0) {    
                                echo "<br> El archivo subido si es una imagen";
                                 // preparar la imagen para la inserción
                                $imgData =addslashes (file_get_contents($_FILES['imagen']['tmp_name']));
                                $nombre_mascota=$_POST['nombre_mascota'];
                                $tipo=$_POST['tipo'];
                                $edad=$_POST['edad'];
                                $color=$_POST['color'];
                                $genero=$_POST['genero'];
                                $adoptado=$_POST['adoptado'];
                                //Manda llamar el metodo donde se realiza la conexion
                                include_once('conexion.php');
                                //Se crea la query que se ejecutara en base de datos
                                 $consulta="insert into mascotas values(null,'$nombre_mascota','$tipo','$genero','$edad','$color','$adoptado','$imgData');";
                                //Ejecuta query y guarda el resultado en una variable
                                $resultado=mysqli_query($con,$consulta);
                                if($resultado)
                                {
                                    //Poner alerta de que se guardo correctamente 
                                  echo '<br>El archivo y el registro se subieron correctamente al servidor';
                                }else{
                                    //Poner alerta de que no se pudo subir el archivo 
                                  echo '<br>No fue posible subir el archivo y el registro, por favor intentelo de nuevo...';
                                }
            
                            }else{
                                //Exception
                                $msg="<p>El archivo subido no es una imagen.</p>";
                                echo $msg;
                                throw $msg;
                            }
                        }else{
                            //Exception
                            // si el archivo no es inferior al máximo permitido, imprime un error
                            $msg='<div>El archivo supera el límite máximo de archivos</div>
                            <div>El límite máximo de archivos es:  bytes</div>
                            <div>File '.$_FILES['imagen']['name'].' is '.$_FILES['imagen']['size'].
                            ' bytes</div><hr />';
                            throw $msg;
                        }
                    } else {
                        //Exception
                        $msg="El archivo no se cargó correctamente.";
                        throw $msg;
                }
                }else{
                    //Exception
                    $msg= file_upload_error_message($_FILES['imagen']['error']);
                    throw $msg;
                }
            }
            catch(Exception $e) {
                // Entra si se produce una excepcion, es decir un error inesperado.
                // tarea: investir algo sobre el manejor de excepciones ("try", "catch")    
                echo $e->getMessage();
                // Poner alerta de excepcion getMessage();
                // Quitar todos los echos, eso solo nos sirven para
                // debuggear el codigo y saber que parte se esta ejecutando correctamenete 
                echo 'Sorry, Could not upload file';
            }
        }
    }  
?>
<!doctype html>
<html>  
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

        <link rel="stylesheet" href="css/estiloss.css">
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
                        <li><a class="navbar__item page-scroll" href="adopta.php">Ir al catalogo</a></li>
                            <li><a class="navbar__item page-scroll" href="administrar.php">Regresar</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
            <!-- End Navbar -->

        </header><br><br><br><br><br>
    <center><br><br><br>
    <form class="form-register" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" enctype="multipart/form-data">
        <input class="controls" type="text" name="nombre_mascota" 
        placeholder="Nombre" required>
        <input class="controls"type="text" name="tipo" 
        placeholder="Tipo" required>
        <input class="controls"type="text" name="edad" 
        placeholder="Edad" required>
        <input class="controls"type="text" name="color" 
        placeholder="Color" required>
        <input class="controls"type="text" name="genero" 
        placeholder="Genero" required>
        <input class="controls"type="text" name="adoptado"
        placeholder="Adoptado/No Adoptado" required>
        <h5 class="bl">Colocar Foto:</h5>
        <input class="controls" type="file" name="imagen"placeholder="Colocar Foto" required>
        <br>
        <button type="submit" class="botons" data-wow-delay="0.8s"> Agregar</button>
        <br><br>

     </form>
    </center>
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

