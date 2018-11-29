<?php 
require("../class/modulo.class.php");
require_once("../config/config2.php");

$nombre=$_POST['nombreM'];
$codigo=$_POST['codigo'];
session_start();
$idUsuario=$_SESSION['id_usuario'];

$guardar=modulo::saveModulo($codigo,$idUsuario,$nombre);

echo "<script src='../js/jquery.js'></script>";
echo "<script>$(document).ready(function(){window.location.href = '../admin.php?mod=AgregarMaterias';
	});</script>";
 ?>