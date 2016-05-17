<?php

class conexion {
    public function conectar() {
        $base = new PDO('mysql:host=localhost; dbname=punto_de_venta', 'root', ''); 
        $base->exec("SET CHARACTER SET utf8");
        return $base;
    }
    
  public function area(){
      return 'calculando el area de una figura';
  }

}