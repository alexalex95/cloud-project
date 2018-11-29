<?php 
include('../class/archivo.class.php');
include_once('../config/config2.php');
include('../class/imagen.class.php');
session_start();

	$nombre=$_POST['nombre'];
	//$archivo=addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
	$file = rand(100,100000)."-".$_FILES['archivo']['name'];
	$descripcion=$_POST['descripcion'];
	$tamaño=$_FILES['archivo']['size'];
	$tipo=$_FILES['archivo']['type'];

	$idUsuario=$_SESSION['id_usuario'];
	$idmod=$_SESSION['idmod'];

	$target_Path="../archivos/";
	//$pictures_path="../archivos/imagenes/";
	//$count=0;
	//$max_image_size=1024*5000;

	/*foreach ($_FILES['imagenes']['name'] as $imagen => $name) 
	{
		if ($_FILES['imagenes']['error'][$imagen]==4)
		{
			continue; //Salta el archivo si ocurre un error
		} 
		if ($_FILES['imagenes']['error'][$imagen]==0) 
		{
			if ($_FILES['imagenes']['size'][$imagen]>$max_image_size) {
				$message[]="La imagen es muy grande!";
				continue; //Se salta las imagenes muy grandes
			}
			else {
					move_uploaded_file($_FILES["imagenes"]["tmp_name"][$imagen], $pictures_path.$name);
			}
		}
	}*/

	move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_Path.$file);

	$subir=archivo::uploadArchivo($nombre,$file,$descripcion,$tamaño,$tipo,$idUsuario,$idmod);

	echo "<script src='../js/jquery.js'></script>";
	echo "<script>$(document).ready(function(){window.location.href = '../admin.php?mod=PruebaModuloMaterias&id=".$idmod."&nombre=".$_SESSION['nombremod']."';
	});</script>";


 ?>