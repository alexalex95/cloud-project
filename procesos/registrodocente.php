<?php 

	require('../class/usuario.class.php');

	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$usuario=$_POST["usuario"];
	$correo=$_POST["email"];
	$contra=$_POST["contra"];
	$sexo=$_POST["sexo"];
	$fecha=$_POST["fecha"];

	$guardar=usuario::saveNewDoc($usuario,$contra,$nombre,$apellido,$sexo,$correo,$fecha);

 ?>
<script src="../assets/js/jquery-1.11.1.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
		window.location.href = "../admin.php";
	});
</script>