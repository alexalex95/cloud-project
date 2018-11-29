

<?php
	//Funcion para conectarse a la DB mysql que contiene toda la informacion
	function conectarse(){
	//Datos del servidor, usuario y contraseña
	$conexion=mysqli_connect('basenube.db.8917278.hostedresource.com', 'basenube', 'HG865lj#5ktu3');
	//Selecciona la DB a la que se conectara con los datos anteriores.
	mysqli_select_db($conexion,'basenube');
	mysqli_set_charset($conexion, "utf8");//para que los datos se codifiquen a UTF cuando se rcuperen de la base de datos
	//Retorna el valor de la conexion.
	return $conexion;
}
?>
