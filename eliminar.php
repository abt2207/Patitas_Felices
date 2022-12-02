<?php
   include_once("sesiones.php");

   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="delete from mascotas where id_mascota='$id'";
   $resultado=mysqli_query($con,$consulta);

   //Variable para implementar las alertas
   $entrar="";

   if ($resultado){
        //echo "<script>
          //      alert('Registro eliminado con Éxito');
            //    location.href='administrar.php';
            // </script>";
            $entrar="eli";
   }
   else{
      //  echo "<script>
       //         alert('Registro NO eliminado... VERIFIQUE');
         //       location.href='administrar.php';
           //   </script>";
           $entrar="noeli";

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
    <link rel="stylesheet" href="estilos.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

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
                        <li><a class="navbar__item page-scroll" href="adopciones.php">Solicitudes</a></li>
                        <li><a class="navbar__item page-scroll" href="administrar.php">Mascotas</a></li>
                        <li><a class="navbar__item page-scroll" href="adminus.php">usuarios</a></li>
                        <li><a class="navbar__item page-scroll" href="contacto.php">mensajes</a></li>
                        <li><a class="navbar__item page-scroll" href="test.php">cuestionario</a></li>
                        <li><a class="navbar__item page-scroll" href="login.php">cerrar sesion</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
            <!-- End Navbar -->

        </header>
        <br><br><br><br><br>
       <div>
       <div class="container">
                                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                    <br><br>
                                    <h2>ADMINISTRAR</h2>
                                    <div class="devider"></div>
                                    <p class="subtitle">Control de las mascotas</p>
                                </div>
                            </div>
           <img src="img/agregar.png" alt="" width="100"><br>
           <a href="agregar.php"><button type="submit" class="boton-env" data-wow-delay="0.8s">Agregar</button></a>
           <br>
                                    <br><br>
                                    <input id="myInput" type="text" placeholder="Search..">
<br><br><br>
           <div class="table-container">
                <table class="table" align="center">
                    <thead align="center">
                        <th class="table_head">No.</th>
                        <th class="table_head">Nombre</th>
                        <th class="table_head">Edad</th>
                      <th class="table_head">adoptado</th>
                      

                       <?php if ($priv=="admin"){?>
                        <th class="table_head" align="center">Acciones</th>
                      <?php } ?>
                    </thead>
                    <tbody id="myTable" align="center">
                    <?php
                         include_once("conexion.php");
                        $consulta="select * from mascotas";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
                                <tr align="center">
                                    <td class="table_data" align="center"><?php echo $fila['id_mascota'] ?></td>
                                    <td class="table_data" align="center"><?php echo $fila['nombre_mascota'] ?></td>
                                    <td class="table_data" align="center"><?php echo $fila['edad'] ?></td>
                                    <td class="table_data" align="center"><?php echo $fila['adoptado'] ?></td>

                                    <?php if ($priv=="admin") { ?>
                                    <td class="table_data" colspan="2" align="center">
                                    <a class="btn_acciones" href="actualizar.php?id=<?php echo $fila['id_mascota'] ?>" class="acciones" align="center"><img src="img/editar.png" alt="" width="21" align="center"></a>
                                    <a class="btn_acciones" href="eliminar.php?id=<?php echo $fila['id_mascota'] ?>" class="acciones" align="center"><img src="img/eliminar.png" alt="" width="21" align="center"></a>
                                    
                                    </td>
                                   <?php } ?>
                                </tr> 
                             <?php
                            }
                        }

                    ?>
                    
                                
                    </tbody>      
                </table>
           </div>
           <h3>Existen <?php echo mysqli_num_rows($resultado) ?> mascotas</h3>
           
           <br><br><br>

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