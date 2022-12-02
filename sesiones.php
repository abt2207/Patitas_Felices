<?php
   session_start();

   if (!isset($_SESSION['user'])){
       header("location:login.php");
   }
   else{
    $idUsuario=$_SESSION['id_cliente'];
    $us=$_SESSION['user'];
    $priv=$_SESSION['privilegio'];
   
   }

?>