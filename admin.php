<?php
ob_start();
clearstatcache();
date_default_timezone_set('America/El_Salvador'); 
setlocale(LC_TIME, 'spanish');

$html = <<<html
<!DOCTYPE html>
<html>
<head>
	<title>CloudUDB</title>
</head>
<body>
<link rel="icon" href="img/Cloudnube.png" type="image/x-icon">
</body>
</html>
html;
echo $html;
include('conf.php');

if (isset($_GET['mod'])) {// Si le mande un modulo
    $modulo = $_GET['mod']; //A la variable modulo que se guarde ese modulo
} else { //Sino
    $modulo = MODULO_DEFECTO; //A la variable modulo se le agrega el modulo defecto que esta en conf.php que es el inicio (perfilDoc)
}
if(isset($conf[$modulo]["layout"])){ //Si existe el modulo
	$path_layout = LAYOUT_PATH . '/' . $conf[$modulo]["layout"]; //Que se guarde la direccion del modulo en path_layout
	if(!empty($conf[$modulo]['layout'])){//Si la direccion si existe
		include($path_layout);//Que se carge ese modulo
	}
}else{// Sino, que muestre error
	$modulo="error";
	$path_layout = LAYOUT_PATH . '/' . $conf[$modulo]["layout"];
	include($path_layout);
}
?>

<script>
if (history.forward(1)) {
	location.replace(history.forward(1));
}
</script>
