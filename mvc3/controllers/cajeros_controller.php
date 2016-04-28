<?php

require_once('models/cajeros_model.php');
$cajeros = new cajeros_model(); 
$arrCajeros = $cajeros->get_cajeros();

if(isset($_POST['insertar'])){
    $cajeros->insertar_cajero();
}

require 'views/cajeros_view.php';