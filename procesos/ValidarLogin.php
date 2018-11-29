<?php
@ob_start();
@session_start();

require("../class/class.managerDB.php");
require("../class/class.data.php");

$data = new data();

$params = $_POST;

$sql="SELECT CONCAT(nombre,' ',apellido) AS nombre,usuario.usuario,usuario.estado,usuario.password,usuario.id_usuario, usuario.tipo_usuario,usuario.sexo,usuario.fecha_nac,usuario.correo FROM usuario WHERE usuario=:usuario  AND password=:contra ";
$param_list=array('usuario','contra');
$response = $data->query($sql, $params, $param_list);
if ($response["success"] == true) {
	if ($response['total']>0) {
				if ($response['items'][0]['estado']=='Activo') {
			  $_SESSION["password"] = $response['items'][0]['password'];
	    $_SESSION["tipo_usuario"] = $response['items'][0]['tipo_usuario']; 
	    $_SESSION["usuario"] = $response['items'][0]['usuario'];
		  $_SESSION["nombre"] = $response['items'][0]['nombre'];
	    $_SESSION["id_usuario"] = $response['items'][0]['id_usuario'];
	    $_SESSION["sexo"] = $response['items'][0]['sexo'];
	    $_SESSION["fecha_nac"] = $response['items'][0]['fecha_nac'];
	    $_SESSION["correo"] = $response['items'][0]['correo'];

	    	$response=array('success'=>true);
		  }else{
			$response=array('success'=>false, 'titulo'=>'Verifique su información!', 'mensaje'=>'El usuario se encuentra inactivo');
		
		} 
	}else{
	    $response=array('success'=>false, 'titulo'=>'Verifique su información!', 'mensaje'=>'Usuario o contrase&ntilde;a invalidos');
	}
}else{
	 $response=array('success'=>false, 'titulo'=>'Error!', 'mensaje'=>$response["error"]);
}
echo json_encode($response);
?>
