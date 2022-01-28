<?php
    $registrar = array();
    
    $cliente = new SoapClient(null, array('uri' => 'http://localhost', 'location' => 'https://impressive-resistor.000webhostapp.com/web-services/ws-mini-market.php')); 
    
    $registrar = $cliente->bajaProducto($_POST['clave']);
    
    if((int)$registrar[0]["ALERT"] == 1){
        echo "1";
        
    }else{
        echo "0";
    }
?>