<?php

if ($_SERVER["REQUEST_METHOD"]=="POST")
	 {
    
    $id_mascota=$_POST['id_mascota'];
    

    $ins = json_encode(array("id_mascota"=>"$id_mascota"));
     
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://127.0.0.1/integradoraOFICIAL/api_restful/controllers/productos.php?op=delete',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_POSTFIELDS =>$ins,
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
    <title>Borrar Mascota</title>
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
        <h1>Borrar Mascota</h1>
        <hr>
        <center>
        <table border=1>
            <form action="" method="post">
                <tr>
                    <td><label>ID de la Mascota: </label></td>
                    <td><input type="text" placeholder="ID de la Mascota" name="id_mascota"></label></td>
                </tr>
                <tr>
                    
                    <td><input type="submit" name="Enviar"></td>
                    <td><input type="reset" name="Borrar"></td>
                </tr>
                

</table>
    <hr>
</body>
</html>