<?php 

require('../class/intermedia.class.php');
include_once('../config/config2.php');

	$id_modulo=$_REQUEST['id_modulo'];
	session_start();
	$idUsuario=$_SESSION['id_usuario'];

	$guardar=intermedia::guardar($id_modulo,$idUsuario);

	echo json_encode($guardar);

 ?>