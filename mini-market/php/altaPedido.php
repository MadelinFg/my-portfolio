<?php
    $registrar = array();
    
    $cliente = new SoapClient(null, array('uri' => 'http://localhost', 'location' => 'https://impressive-resistor.000webhostapp.com/web-services/ws-mini-market.php')); 
    
    $registrar = $cliente->registrarPedido($_POST['claveProd'], $_POST['cantidadPedido'], $_POST['subtotalPedido'], $_POST['total']);
    
    if((int)$registrar[0]["ALERT"] == 1){
        echo "1";
        
    }else{
        echo "0";
    }
?>