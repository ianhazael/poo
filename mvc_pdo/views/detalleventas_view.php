<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Detalle de Ventas</title>
    <h1>Lista de detalle de ventas</h1>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id</td><td>Fecha</td><td>Cantidad</td><td>Sub_Total</td><td>IVA</td><td>Total</td><td>Borrar</td><td>Actualizar</td>
        </tr>

        <?php foreach ($arrDetalleventas as $detalleventa) { ?>
            <tr>        
            <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                <td><?php echo $detalleventa['Id']; ?></td>
                <td><input type=CURRENT_TIMESTAMP  name="Fecha"   value="<?php echo $detalleventa['Fecha']; ?>"></td>
                <td><input type="text" name="Cantidad"             value="<?php echo $detalleventa['Cantidad']; ?>"></td> 
                <td><input type="text" name="Sub_Total"            value="<?php echo $detalleventa['Sub_Total']; ?>"></td>
                <td><input type="text" name="IVA"                  value="<?php echo $detalleventa['IVA']; ?>"></td>
                <td><input type="text" name="Total"                value="<?php echo $detalleventa['Total']; ?>"></td>
                <td><input type="submit" value="Borrar" name="borrardetaventas"></td>
                <td><input type="hidden"   name="Id"               value="<?php echo $detalleventa['Id']; ?>"><input type="submit" value="Actualizar" name="actualizardetaventas"></td>
            </form>
        </tr>

    <?php } ?>
</table>
<style>
    form table#detalleventa tbody tr td {
        padding-right: 15px;
    }
</style>

<h3>Agregar los detalles de ventas</h3>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <table id="detalleventa">

        </tr>
        <tr><td><label>Cantidad</label></td>
            <td><input type="numero" name="Cantidad" /></td>
        </tr>    
        </tr>
        <tr><td><label>Sub_Total</label></td>
            <td><input type="text" name="Sub_Total" /></td>
        </tr>
        <tr><td><label>IVA</label></td>
            <td><input type="text" name="IVA" /></td>
        </tr>
        <tr><td><label>Total</label></td>
            <td><input type="text" name="Total" /></td>
        </tr>

        <tr><td colspan="2"><input type="submit" value="Insertar" name="insertardetaventas" /></td>
        </tr>

    </table>
</form>

</body>
</html>