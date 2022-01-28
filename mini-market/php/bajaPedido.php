<?php
    $modificar = array();
    
    $cliente = new SoapClient(null, array('uri' => 'http://localhost', 'location' => 'https://impressive-resistor.000webhostapp.com/web-services/ws-mini-market.php')); 
    
    $modificar = $cliente->bajaPedido($_POST['idPedido'], $_POST['estatus']);
    
    if((int)$modificar[0]["ALERT"] == 1){
        echo "1";
        
    }else{
        echo "0";
    }
?>