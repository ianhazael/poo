<?php
require_once('models/cajeros_model.php');
class cajeros_controller {
    public static function ejecutar() {
        $cajeros = new cajeros_model();
        if (!empty($_POST)) {
            if (isset($_POST['insertar'])) {
                $cajeros->insertar();
            }
            if (isset($_POST['borrar'])) {
                $cajeros->borrar();
            }
            if (isset($_POST['actualizar'])) {
                $cajeros->actualizar();
            }
            header('location:/mvc_pdo/?controller=cajeros');
        } else {
            $arrCajeros = $cajeros->get_tabla();
            require 'views/cajeros_view.php';
        }
    }
}

cajeros_controller::ejecutar();
