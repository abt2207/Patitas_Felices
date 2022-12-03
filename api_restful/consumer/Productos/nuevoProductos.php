<?php

if ($_SERVER["REQUEST_METHOD"]=="POST")
	 {
    
    $nombre_mascota=$_POST['nombre_mascota'];
    $tipo=$_POST['tipo'];
    $genero=$_POST['genero'];
    $edad=$_POST['edad'];
    $color=$_POST['color'];
    $adoptado=$_POST['adoptado'];
    

    $ins = json_encode(array("nombre_mascota"=>"$nombre_mascota", "tipo"=>"$tipo" ,  "genero"=>"$genero" , "edad"=>"$edad",  "color"=>"$color" , "adoptado"=>"$adoptado"));
     
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://127.0.0.1/integradoraOFICIAL/api_restful/controllers/productos.php?op=insert',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $ins,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: text/plain'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Mascota</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
    <header id="inicio">
        <div class="contenedor">
            <div class="menu">
            <p></p>
                <ul class="lista">
                    <li><a class="btn-menu" href='../clienteProductos.php'>Regresar</a></li>
                </ul>
                </div>
        </div>
    </header>
    <center>
        <h1>Nueva Mascota</h1>
        <hr>
        
        <table border=1>
            <form action="" method="post">
                <tr>
                    <td><label for="cat_nom">Nombre de la mascota: </label></td>
                    <td><input type="text" placeholder="Nombre de la mascota" name="nombre_mascota"></label></td>
                </tr>
                <tr>
                    <td><label for="cat_obs">Tipo: </label></td>
                    <td><input type="text" placeholder="Tipo" name="tipo"></label></td>
                </tr>
                <tr>
                    <td><label for="cat_obs">Genero: </label></td>
                    <td><input type="text" placeholder="Genero" name="genero"></label></td>
                </tr>
                <tr>
                    <td><label for="cat_obs">Edad: </label></td>
                    <td><input type="text" placeholder="Edad" name="edad"></label></td>
                </tr>
                <tr>
                    <td><label for="cat_obs">Color: </label></td>
                    <td><input type="text" placeholder="Color" name="color"></label></td>
                </tr>
                <tr>
                    <td><label for="cat_obs">Estado: </label></td>
                    <td><input type="text" placeholder="Adoptado/No Adoptado" name="adoptado"></label></td>
                </tr>
                <tr>
                    
                    <td><input type="submit" name="Enviar"></td>
                    <td><input type="reset" name="Borrar"></td>
                </tr>
                

</table>
    <hr>
</body>
</html>
