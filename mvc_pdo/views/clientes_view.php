<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de clientes</title>
    <h1>Lista de clientes</h1>
    </head>
    <body>
        <?php if(isset($cliente)) {
            echo '<h3>Cliente individual</h3>';
            echo 'ID: '.$cliente['Id'].'<br>';
            echo 'Fecha: '.$cliente['Fecha_Creacion'].'<br>';
            echo 'RFC: '.$cliente['RFC'].'<br>';
            echo 'Nombre: '.$cliente['Nombres'].' '.$cliente['Apellidos'].'<br>';
            echo 'Direcciion: '.$cliente['Direccion'].'<br>';
            echo 'Correo: '.$cliente['Correo'].'<br>';
            echo 'Ciudad: '.$cliente['Ciudad'].'<br>';
            echo 'Estado: '.$cliente['Estado'].'<br>';
            echo 'Pais: '.$cliente['Pais'].'<br>';
        } ?>
        <table border="1">
            <tr>
                <td>Id</td><td>Fecha Creacion</td><td>RFC</td><td>Nombres</td><td>Apellidos</td><td>Direccion</td><td>Correo</td><td>Ciudad</td><td>Estado</td><td>Pais</td><td>Borrar</td><td>Actualizar</td>
            </tr>

            <?php foreach ($arrClientes as $cliente) { ?>
                <tr>        
                <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                    <td><a href="/mvc_pdo/?controller=clientes&id=<?php echo $cliente['Id']; ?>"><?php echo $cliente['Id']; ?></a></td>
                    <td><input type=CURRENT_TIMESTAMP  name="Fecha_Creacion"   value="<?php echo $cliente['Fecha_Creacion']; ?>"></td>
                    <td><input type="text" name="RFC"               value="<?php echo $cliente['RFC']; ?>"></td>
                    <td><input type="text" name="Nombres"           value="<?php echo $cliente['Nombres']; ?>"></td> 
                    <td><input type="text" name="Apellidos"         value="<?php echo $cliente['Apellidos']; ?>"></td>
                    <td><input type="text" name="Direccion"         value="<?php echo $cliente['Direccion']; ?>"></td>
                    <td><input type="text" name="Correo"            value="<?php echo $cliente['Correo']; ?>"></td>
                    <td><input type="text" name="Ciudad"            value="<?php echo $cliente['Ciudad']; ?>"></td>
                    <td><input type="text" name="Estado"            value="<?php echo $cliente['Estado']; ?>"></td>
                    <td><input type="text" name="Pais"              value="<?php echo $cliente['Pais']; ?>"></td>
                    <td><input type="submit"                        value="Borrar" name="borrarclientes"></td>
                    <td><input type="hidden"   name="Id"            value="<?php echo $cliente['Id']; ?>"><input type="submit" value="Actualizar" name="actualizarclientes"></td>
                </form>
            </tr>

        <?php } ?>
    </table>
    <style>
        form table#cliente tbody tr td {
            padding-right: 15px;
        }
    </style>
    

    <h3>Agregar cliente</h3>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <table id="cliente">

            <tr><td><label>RFC</label></td>
                <td><input type="text" name="RFC" /></td>
            </tr>   
            <tr><td><label>Nombres</label></td>
                <td><input type="text" name="Nombres" /></td>
            </tr>
            <tr><td><label>Apellidos</label></td>
                <td><input type="text" name="Apellidos" /></td>
            </tr>
            <tr><td><label>Direccion</label></td>
                <td><input type="text" name="Direccion" /></td>
            </tr>
            <tr><td><label>Correo</label></td>
                <td><input type="email" name="Correo" /></td>
            </tr>
            <tr><td><label>Ciudad</label></td>
                <td><input type="text" name="Ciudad" /></td>
            </tr>
            <tr><td><label>Estado</label></td>
                <td><input type="text" name="Estado" /></td>
            </tr>
            <tr><td><label>Pais</label></td>
                <td><input type="text" name="Pais" /></td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="Insertar" name="insertarclientes" /></td>
            </tr>

        </table>
    </form>

    </body>
</html>