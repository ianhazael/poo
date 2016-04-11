<!DOCTYPE HTML>
<html>
	<head>
		<title>Base para el ejercicio 1</title>
	</head>
	<body>
		<h1>Título visible en la pagina</h1>
<?php 
$grados 	= 0;
$resultado 	= 0;
	if(!empty($_POST['grados'])) {
			$grados = filter_input(INPUT_POST, 'grados', FILTER_VALIDATE_FLOAT);
			if($grados!==false){
				$resultado = ($grados - 32)*(5/9);
				//echo '<h2>El resultado en grados centigrados es: '.$resultado.'</h2>';
				echo "<h2>El resultado en grados centigrados es: $resultado</h2>";
			}
		
	}
?>
		<p>Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí, Párrafos aquí</p>
		<a href="http://www.ith.mx"><img src="http://ith.mx/logo_ith.jpg"></a>
		
		
		<form method="post" action="centigrados.php">
			<label>Grados Farenheit:</label>
			<input type="text" name="grados">
			<input type="submit">
		</form>
		<br />
		<a href="http://www.google.com">Liga a Buscador Google</a>
	</body>
</html>