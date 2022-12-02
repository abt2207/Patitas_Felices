<?php
include_once('conexion.php');

?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adopta</title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/style.css">

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
                        
                            <li><a class="navbar__item page-scroll" href="login.php">Regresar</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
            <!-- End Navbar -->
        </header>
        <h1 id="portfolio-section">_</h1>
        <br><br>
    <section  class="page" style="background: #Fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio">
                        <!-- Begin page header-->
                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                    <br><br>
                                    <h2>Nuestras mascotas</h2>
                                    <div class="devider"></div>
                                    <p class="subtitle">Conoce a tu proximo mejor amigo</p>
                                </div>
                            </div>
                        </div>
                        <!-- End page header-->
                        <div class="portfoloi_content_area">
                            <div class="portfolio_menu" id="filters">
                                <ul>
                                    <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">MASCOTAS</a>
                                    </li>
                                </ul>
                            </div>

                         
                            <!-- INSERTAR MASCOTAS-->
                            <div class="portfolio_content" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <center>
                                <table border="6">
                                    <tbody>
                                      <?php 
                                      include_once('conexion.php');
                                        $consulta="select * from mascotas";
                                        $resultado=mysqli_query($con,$consulta);
                                        while($row = mysqli_fetch_assoc($resultado)){ 
                                      ?> 
                                      <tr>
                                        <td>   
                                            <div class="portfolio_single_content"> 
                                                <img height="400px" width="400px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
                                                <div>
                                                
                                                    <a><?php echo $row['nombre_mascota'] ?></a>
                                                    <span><?php echo $row['genero'] ?></span>
                                                    <a href="/integradoraOFICIAL/mascotas/adoptar.php?id_mascota=<?php echo $row['id_mascota'];?>">Ver Mascota</a>
                                                    
                                                </div>
                                                
                                            </div>
                                        </td>
                                      </tr>
                                      
                                      <?php
                                        }
                                      ?>
                                    </tbody>
                                </table>
                                


                            </center>
                             

                            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
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