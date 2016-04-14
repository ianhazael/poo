<!DOCTYPE HTML>
<html>
	<head>
		<title>Base para el ejercicio 1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	</head>
	<body>
		<h1>Título visible en la página</h1>
		<?php if($grados!==false) { ?>
		<h2>El resultado en <?php echo $tipoGrados?> es:<?php echo $grados; ?></h2>
		<?php } ?>
		<p>Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí</p>
		<a href="http://www.ith.mx"><img src="http://ith.mx/logo_ith.jpg"></a>		
		<form method="post" action="index.php">
			<label>Grados Farenheit:</label>
			<input type="text" name="grados">
			<input type="submit">
		</form>
		<br />
		<a href="http://www.google.com">Liga a Buscador Google</a>
	</body>
</html>