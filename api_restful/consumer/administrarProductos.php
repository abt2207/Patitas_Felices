<?php

// Crear la vista para mostrar un pantalla todos los registros de la tabla categoria

// Consumir el Api_Restful

$endpoint="http://127.0.0.1/integradoraOFICIAL/api_restful/controllers/productos.php?op=selectall";

// convertir el json a un objeto de tipo arrive asosiativo
$datos=json_decode(file_get_contents($endpoint),true);

echo"<br>";
echo"<center>";
echo"<h1>Registros de Productos</>";
echo"<hr>";

echo"<table border=1";
echo"<tr>";
echo"<th>No.</th>";
echo"<th>Nombre</th>";
echo"<th>Tipo</th>";
echo"<th>Genero</th>";
echo"<th>Edad</th>";
echo"<th>Color</th>";
echo"<th>Adoptado</th>";
echo"<th>Acciones</th>";
echo"</tr>";

for($i=0;$i<count($datos);$i++)
{
echo"</tr>";
echo"<td>".$datos[$i]["id_mascota"]."</td>";
echo"<td>".$datos[$i]["nombre_mascota"]."</td>";
echo"<td>".$datos[$i]["tipo"]."</td>";
echo"<td>".$datos[$i]["genero"]."</td>";
echo"<td>".$datos[$i]["edad"]."</td>";
echo"<td>".$datos[$i]["color"]."</td>";
echo"<td>".$datos[$i]["adoptado"]."</td>";
echo"<td><a href='eliminar.php value='eliminar'>Eliminar</a> <a href='Actualizar.php'>Actualizar</a></td>";
echo"</tr>";
}



echo"</table>";
echo"<hr>";
echo"</center>";
?>