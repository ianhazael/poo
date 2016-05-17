<?php
if(isset($_GET['controller'])){
    $controller = filter_input(INPUT_GET, 'controller', FILTER_SANITIZE_STRING);
    $filename = "controllers/{$controller}_controller.php";
    if (file_exists($filename)){
        require_once $filename;
    } else {
        echo 'la pagina solicitada no existe';
    }
} else {
    require_once "controllers/index_controller.php";
}