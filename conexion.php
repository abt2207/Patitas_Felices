<?php
   // Este es un comentario

   $server="localhost";
   $database="patitas_felices";
   $username="root";
   $password="";

   //Conexion a MySQL Procedimental
   $con= new mysqli($server,$username,$password,$database);

//    if ($con)
//       echo 'Conexion Exitosa a la BD';
//    else
//       echo 'Fallo la conexion por favor verifique';   

class Conectar
   {
      protected $dbh;

      protected function Conexion()
      {
        try
        {
           $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=patitas_felices","root","");
           return $conectar;
        }
        catch (Exception $e)
        {
           print "¡Error en la BD!".$e->getMessage()."</br>";
           die("Verifica por favor ...");
        }
      }
   }

?>
