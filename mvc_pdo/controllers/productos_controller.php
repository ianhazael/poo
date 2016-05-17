<?php

class productos_controller {

    public static function ejecutar() {
        require_once('models/productos_model.php');
        $productos = new productos_model();

        if (!empty($_POST)) {
            if (isset($_POST['insertarproducto'])) {
                $productos->insertar();
            }
            if (isset($_POST['borrarproducto'])) {
                $productos->borrar();
            }
            if (isset($_POST['actualizarproducto'])) {
                $productos->actualizar();
            }
            header('location:/mvc_pdo/?controller=productos');
        } else {
            $arrProductos = $productos->get_tabla();
            require 'views/productos_view.php';
        }
    }

}
productos_controller::ejecutar();