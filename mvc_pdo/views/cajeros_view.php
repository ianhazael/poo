<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de cajeros</title>
    
    </head>
    <body>
        <h1>Lista de cajeros</h1>
        <table border="1">
            <tr>
                <td>Id</td><td>Nombres</td><td>Apellidos</td><td>Fecha Nacimiento</td><td>Correo</td><td>Telefono</td><td>Puesto</td><td>Fecha Ingreso</td><td>Borrar</td><td>Actualizar</td>

            </tr>
            <tr>

                <?php foreach ($arrCajeros as $cajero) { ?>

                <tr>        
                <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                    <td><?php echo $cajero['Id']; ?></td>
                    <td><input type="text" name="Nombres"           value="<?php echo $cajero['Nombres']; ?>"></td> 
                    <td><input type="text" name="Apellidos"         value="<?php echo $cajero['Apellidos']; ?>"></td>
                    <td><input type="date" name="Fecha_Nacimiento"  value="<?php echo $cajero['Fecha_Nacimiento']; ?>"></td>
                    <td><input type="text" name="Correo"            value="<?php echo $cajero['Correo']; ?>"></td>
                    <td><input type="text" name="Telefono"          value="<?php echo $cajero['Telefono']; ?>"></td>
                    <td><input type="text" name="Puesto"            value="<?php echo $cajero['Puesto']; ?>"></td>
                    <td><input type=CURRENT_TIMESTAMP  name="Fecha_Ingreso"   value="<?php echo $cajero['Fecha_Ingreso']; ?>"></td>
                    <td><input type="submit"                        value="Borrar" name="borrar"></td>
                    <td><input type="hidden"   name="Id"            value="<?php echo $cajero['Id']; ?>"><input type="submit" value="Actualizar" name="actualizar"></td>
                </form>
            </tr>

        <?php } ?>
    </table>

    <style>
        form table#cajero tbody tr td {
            padding-right: 15px;
        }
    </style>

    <h3>Agregar cajero</h3>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <table id="cajero"> 

            <tr><td><label>Nombres</label></td>
                <td><input type="text" name="Nombres" /></td>
            </tr>
            <tr><td><label>Apellidos</label></td>
                <td><input type="text" name="Apellidos" /></td>
            </tr>
            <tr><td><label>Fecha Nacimiento</label></td>
                <td><input type="date" name="Fecha_Nacimiento" /></td>
            </tr>
            <tr><td><label>Correo</label></td>
                <td><input type="email" name="Correo" /></td>
            </tr>
            <tr><td><label>Telefono</label></td>
                <td><input type="text" name="Telefono" /></td>
            </tr>
            <tr><td><label>Puesto</label></td>
                <td><input type="text" name="Puesto" /></td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="Insertar" name="insertar" /></td>
            </tr>

        </table>
    </form>
    </body>
</html>