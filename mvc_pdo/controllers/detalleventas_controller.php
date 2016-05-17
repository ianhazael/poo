<?php

class detalleventas_controller {

    public static function ejecutar() {
        require_once('models/detalleventas_model.php');
        $detalleventas = new detalleventas_model();

        if (!empty($_POST)) {
            if (isset($_POST['insertardetaventas'])) {
                $detalleventas->insertar();
            }
            if (isset($_POST['borrardetaventas'])) {
                $detalleventas->borrar();
            }
            if (isset($_POST['actualizardetaventas'])) {
                $detalleventas->actualizar();
            }
            header('location:/mvc_pdo/?controller=detalleventas');
        } else {
            $arrDetalleventas = $detalleventas->get_tabla();
            require 'views/detalleventas_view.php';
        }
    }
}

detalleventas_controller::ejecutar();
