<?php
    include 'clsServices.php';
    
    $soap = new SoapServer(null, array('uri' => 'http://localhost/'));
    
    $soap->setClass('clsServices');
    $soap->handle();
?>