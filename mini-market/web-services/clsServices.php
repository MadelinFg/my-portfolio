<?php
    class clsServices{
        /**
         * Pedidos
         */
        public function registrarPedido($clavePro, $cantidad, $facT, $facS){
            $datos = array();
            require('conbd.php');
            $renglon = query("CALL spAgregarPedido('$clavePro', '$cantidad', '$facT', '$facS')");
            while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["ALERT"]= $resultado["ALERT"];
            }
            return $datos;
        }

        public function bajaPedido($id, $estatus){
        
            $datos = array();
            require('conbd.php');
            
            $renglon = query("CALL spBajaPedido('$id', '$estatus')");
            while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["ALERT"]= $resultado["ALERT"];
            }
            return $datos;
        }


        /**
         * Productos
         */
        public function registrarProducto($nombre, $descripcion, $precio, $foto){
            $datos = array();
            require('conbd.php');
            $renglon = query("CALL spAgregarProducto('$nombre', '$descripcion', $precio, '$foto')");
            while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["ALERT"]= $resultado["ALERT"];
            }
            return $datos;
        }

        public function modificarProducto($clave, $nombre, $descripcion, $precio, $foto){
            $datos = array();
            require('conbd.php');
            $renglon = query("CALL spModificarProducto('$clave', '$nombre', '$descripcion', '$precio', '$foto')");
            while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["ALERT"]= $resultado["ALERT"];
            }
            return $datos;
        }

        public function bajaProducto($clave){
            $datos = array();
            require('conbd.php');
            $renglon = query("CALL spBajaProducto('$clave')");
            while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["ALERT"]= $resultado["ALERT"];
            }
            return $datos;
        }
    }
?>