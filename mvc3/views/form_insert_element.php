<style>
    form table#cajero tbody tr td {
        padding-right: 15px;
    }
</style>

<h2>Agregar cajero</h2>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <table id="cajero">
        <tr><td><label>Nombre</label></td>
            <td><input type="text" name="nombre" /></td>
        </tr>
        <tr><td><label>Apellido</label></td>
            <td><input type="text" name="apellido" /></td>
        </tr>
        <tr><td><label>Teléfono</label></td>
            <td><input type="text" name="telefono" /></td>
        </tr>
        <tr><td><label>Dirección</label></td>
            <td><input type="text" name="direccion" /></td>
        </tr>
        <tr><td><label>Correo</label></td>
            <td><input type="email" name="correo" /></td>
        </tr>
        <tr><td><label>Fecha de Nac </label></td>
            <td><input type="date" name="fecha" /></td>
        </tr>
        <tr><td><label>Ciudad</label></td>
            <td><input type="text" name="ciudad" /></td>
        </tr>
        <tr><td><label>Estado</label></td>
            <td><input type="text" name="estado" /></td>
        </tr>
        <tr><td><label>Pais</label></td>
            <td><input type="text" name="pais" /></td>
        </tr>
        <tr><td colspan="2"><input type="submit" value="Transmitir" name="insertar" /></td>
        </tr>
        
    </table>
    
</form>