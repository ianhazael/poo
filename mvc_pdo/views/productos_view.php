<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de productos</title>
    <h1>Lista de productos</h1>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Id</td><td>Nombre</td><td>Codigo</td><td>Precio</td><td>Borrar</td><td>Actualizar</td>
            </tr>

            <?php foreach ($arrProductos as $producto) { ?>
                <tr>        
                <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                    <td><?php echo $producto['Id']; ?></td>
                    <td><input type="text" name="Nombre"           value="<?php echo $producto['Nombre']; ?>"></td> 
                    <td><input type="text" name="Codigo"           value="<?php echo $producto['Codigo']; ?>"></td>
                    <td><input type="text" name="Precio"           value="<?php echo $producto['Precio']; ?>"></td>
                    <td><input type="submit"                       value="Borrar" name="borrarproducto"></td>
                    <td><input type="hidden"   name="Id"           value="<?php echo $producto['Id']; ?>"><input type="submit" value="Actualizar" name="actualizarproducto"></td>
                </form>
            </tr>
        <?php } ?>

    </table>
    <style>
        form table#producto tbody tr td {
            padding-right: 15px;
        }
    </style>

    <h3>Agregar productos</h3>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <table id="producto">

            <tr><td><label>Nombre</label></td>
                <td><input type="text" name="Nombre" /></td>
            </tr>
            <tr><td><label>Codigo</label></td>
                <td><input type="text" name="Codigo" /></td>
            </tr>
            <tr><td><label>Precio</label></td>
                <td><input type="text" name="Precio" /></td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="Insertar" name="insertarproducto" /></td>
            </tr>

        </table>
    </form>

    </body>
</html>
