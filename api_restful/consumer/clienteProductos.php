<?php
    //Crear la vista para mostrar en pantalla todos los registros de la tabla categoría

    //Consumir el API_Restful

    $endpoint="http://127.0.0.1/integradoraOFICIAL/api_restful/controllers/productos.php?op=selectall";

    //Convertir el JSON a un objeto de tipo array assoc
    $datos=json_decode(file_get_contents($endpoint), true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Mascotas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <center>
    <header id="inicio">
        <div class="contenedor">
            <div class="menu">
            <p></p>
                <ul class="lista">
                    <li><a class="btn-menu" href='../consumer/Productos/nuevoProductos.php'>Insertar</a></li>
                    <li><a class="btn-menu"  href="../../login.php" >Cerrar Sesion</a></li>
                </ul>
                </div>
        </div>
    </header>
    <h1>Registro de Mascotas</h1>
    <hr/>
    <table border=1 class="table">
        <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Genero</th>
        <th>Edad</th>
        <th>Color</th>
        <th>Adoptado</th>
        <th>Acciones</th>
        </tr>
        <?php
            for ($i=0;$i<count($datos);$i++)
            {
        ?>

        <tr>
            <td> <?php echo $datos[$i]["id_mascota"]?></td>
            <td> <?php echo $datos[$i]["nombre_mascota"]?></td>
            <td> <?php echo $datos[$i]["tipo"]?></td>
            <td> <?php echo $datos[$i]["genero"]?></td>
            <td> <?php echo $datos[$i]["edad"]?></td>
            <td> <?php echo $datos[$i]["color"]?></td>
            <td> <?php echo $datos[$i]["adoptado"]?></td>
            

            <td>
                <a href="Productos/updateProductos.php" class="boton">Actualizar</a>
                <a href="Productos/deleteProductos.php" class="boton">Eliminar</a>
            </td>
        </tr>

        <?php
            }
        ?>
</body>
</html>