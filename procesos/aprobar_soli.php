<?php 
	include_once('../config/config2.php');
	require('../class/intermedia.class.php');

	$opcion=$_REQUEST["aprobacion"];

	$saver=intermedia::aprobar($opcion);
	echo $opcion;

 ?>