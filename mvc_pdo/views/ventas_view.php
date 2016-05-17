<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de ventas</title>
    <h1>Lista de ventas</h1>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Id</td><td>Precio_Unitario</td><td>Total</td><td>Borrar</td><td>Actualizar</td>
            </tr>

            <?php foreach ($arrVentas as $venta) { ?>
                <tr>        
                <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                    <td><?php echo $venta['Id']; ?></td>
                    <td><input type="text" name="Precio_Unitario"     value="<?php echo $venta['Precio_Unitario']; ?>"></td> 
                    <td><input type="text" name="Total"               value="<?php echo $venta['Total']; ?>"></td>

                    <td><input type="submit" value="Borrar" name="borrarventa"></td>
                    <td><input type="hidden"   name="Id"              value="<?php echo $venta['Id']; ?>"><input type="submit" value="Actualizar" name="actualizarventa"></td>
                </form>
            </tr>

        <?php } ?>
    </table>
    <style>
        form table#venta tbody tr td {
            padding-right: 15px;
        }
    </style>


    <h3>Agregar venta</h3>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <table id="venta">

            <tr><td><label>Precio Unitario</label></td>
                <td><input type="text" name="Precio_Unitario" /></td>
            </tr>  
            <tr><td><label>Total</label></td>
                <td><input type="text" name="Total" /></td>
            </tr>   
            <tr><td colspan="2"><input type="submit" value="Insertar" name="insertarventas" /></td>
            </tr>

        </table> 
    </form>

    </body>
</html>