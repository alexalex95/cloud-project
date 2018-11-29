<?php 
	include_once('../config/config2.php');
	require('../class/intermedia.class.php');

	$opcion=$_REQUEST["rechazo"];
	$saver=intermedia::rechazar($opcion);

	echo $opcion;
	
 ?>