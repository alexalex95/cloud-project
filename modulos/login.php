<?php 

	require('../class/usuario.class.php');

	$usuario=$_POST["usuario"];
	$password=$_POST["password"];

	$iniciar=usuario::login($usuario,$password);
	$redireccionar=usuario::redirect();
	$logot=usuario::logout();
?>
