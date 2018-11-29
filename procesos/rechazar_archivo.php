<?php 
	include_once('../config/config2.php');
	require('../class/archivo.class.php');

	$opcion=$_REQUEST["rechazo"];
	$saver=archivo::rechazarArchivo($opcion);

	echo $opcion;
	
 ?>