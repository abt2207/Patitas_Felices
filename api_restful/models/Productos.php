<?php



    class Productos extends Conectar
    {
        
        public function getProductos()
        {
            $conectar=parent::conexion();

            $sql="select * from mascotas";

            $sql=$conectar->prepare($sql);

            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }


        public function getProductos_id($id_mascota)
        {
            $conectar=parent::conexion();

            $sql="select * from mascotas where id_mascota=?";

            $sql=$conectar->prepare($sql);

            $sql->bindValue(1,$id_mascota);

            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function postProductos($nombre_mascota, $tipo, $genero, $edad, $color, $adoptado)
        {
            //llamar la cadena de conexion de la BD
            $conectar=parent::conexion();

            //String a ejecutar
            $sql="insert into mascotas values (null,?,?,?,?,?,?)";

            //Se prepara la conexion 
            $sql=$conectar->prepare($sql);

            //Indicar en el String del SQL el parametro que utilizará
            $sql->bindValue(1,$nombre_mascota);
            $sql->bindValue(2,$tipo);
            $sql->bindValue(3,$genero);
            $sql->bindValue(4,$edad);
            $sql->bindValue(5,$color);
            $sql->bindValue(6,$adoptado);
            //Ejecutar la conexion
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

        }
        
        public function putProductos( $nombre_mascota, $tipo, $genero, $edad, $color, $adoptado, $id_mascota)
      {
        //llamar la cadena de conexion de la BD
        $conectar=parent::conexion();

        //String a ejecutar
        $sql="update mascotas set nombre_mascota=?, tipo=?, genero=?, edad=?, color=?, adoptado=? where id_mascota=?";

        //Se prepara la conexion 
        $sql=$conectar->prepare($sql);

        //Indicar en el String del SQL el parametro que utilizará
            $sql->bindValue(1,$nombre_mascota);
            $sql->bindValue(2,$tipo);
            $sql->bindValue(3,$genero);
            $sql->bindValue(4,$edad);
            $sql->bindValue(5,$color);
            $sql->bindValue(6,$adoptado);
            $sql->bindValue(7,$id_mascota);
        //Ejecutar la conexion
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

      }

      public function deleteProductos($id_mascota)
        {
            $conectar=parent::conexion();

            $sql="delete from mascotas where id_mascota=?";

            $sql=$conectar->prepare($sql);

            $sql->bindValue(1,$id_mascota);

            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>