<?php

    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Productos.php");

    $productos= new Productos();

    $body=json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"])
    {
        case "selectall":$datos=$productos->getProductos();
                        echo json_encode($datos);
                        break;
        case "selectid":$datos=$productos->getProductos_id($body["id_mascota"]);
                        echo json_encode($datos);
                        break;
        case "insert":$datos=$productos->postProductos($body["nombre_mascota"],$body["tipo"],$body["genero"],$body["edad"],$body["color"],$body["adoptado"]);
                        echo json_encode("Registro Insertado con Exito");
                        break;
        case "update":$datos=$productos->putProductos($body["nombre_mascota"],$body["tipo"],$body["genero"],$body["edad"],$body["color"],$body["adoptado"],$body["id_mascota"]);
                        echo json_encode("Registro Actualizado con Exito");
                        break;
        case "delete":$datos=$productos->deleteProductos($body["id_mascota"]);
                        echo json_encode("Registro Eliminado con Exito");
                        break;
                        
    }

?>