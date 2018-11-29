<?php
require_once ("../class/class.data.php");
require_once ("../class/class.managerDB.php");
//variables que vienen desde el formulario
$params=$_POST;
//instanciar el objeto de la clase
$db=new data();
if($params['txtnombre']!=""){
	//consulta para eliminar registro
	$sql="UPDATE usuario SET estado=:txtestatus WHERE usuario=:txtnombre";
	//ejecutar consulta
		$param_list=array('txtnombre','txtestatus');
		$response=$db->query($sql, $params, $param_list, true);
}else{
	$response=array('success'=>false, 'mensaje'=>"No se pudo modificar el estado");
}
	if($response['insertId']=="0" && $params['txtnombre']==""){
		$response=array('success'=>false, 'mensaje'=>'No se pudo agregar el registro');
	}
echo json_encode($response);
?>