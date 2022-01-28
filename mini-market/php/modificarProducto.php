<?php
    $registrar = array();

    $cliente = new SoapClient(null, array('uri' => 'http://localhost', 'location' => 'https://impressive-resistor.000webhostapp.com/web-services/ws-mini-market.php')); 
    
    $registrar = $cliente->modificarProducto($_POST['clave'], $_POST['nombreProd'], $_POST['precioProd'], $_POST['fotoProd']);
    
    if((int)$registrar[0]["ALERT"] == 1){
        echo "1";
        
    }else{
        echo "0";
    }
?>