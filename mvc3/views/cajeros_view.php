<!doctype   html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de cajeros</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Id</td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Direccion</td><td>Correo</td><td>Ciudad</td>
            </tr>
            
            <?php foreach ($arrCajeros as $cajero) { ?>
            <tr>
                <td><?php echo $cajero['id']; ?></td><td><?php echo $cajero['nombre']; ?></td><td><?php echo $cajero['apellido']; ?></td><td><?php echo $cajero['telefono']; ?></td><td><?php echo $cajero['direccion']; ?></td><td><?php echo $cajero['correo']; ?></td><td><?php echo $cajero['ciudad']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <?php require 'views/form_insert_element.php'; ?>
    
    </body>
</html>
