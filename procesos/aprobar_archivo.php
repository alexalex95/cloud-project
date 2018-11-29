<?php 
	include_once('../config/config2.php');
	require('../class/archivo.class.php');

	$opcion=$_REQUEST["aprobacion"];

	$saver=archivo::aprobarArchivo($opcion);
	echo $opcion;

 ?>