<?php 
function gradFar2Cent(){
	$grados 	= 0;
	$resultado 	= false;
	if(isset($_POST['grados'])) {
		
		$grados = filter_input(INPUT_POST, 'grados', FILTER_VALIDATE_FLOAT);
		if($grados!==false){
			$resultado = ($grados - 32)*(5/9);
		}
	}
	return $resultado;
}

$grados 	= gradFar2Cent();
$tipoGrados = 'centigrados';
//mandar llamar la vista
header('Content-Type: text/html; charset=ISO-8859-1');
require_once('views/grados_view.php');
?>