
<?php
   	@session_start();

require_once ("../class/class.data.php");
require_once ("../class/class.managerDB.php");
//variables que vienen desde el formulario
$params=$_POST;
//instanciar el objeto de la clase
$db=new data();
if($params['nombre']!="" || $params['correo']!=""){
	//consulta para eliminar registro
	$sql="UPDATE usuario SET nombre=:nombre, correo=:correo, fecha_nac=:fecha  WHERE id_usuario=".$_SESSION["id_usuario"]."";
	//ejecutar consulta 	
		$param_list=array('nombre','correo','fecha');
		$response=$db->query($sql, $params, $param_list, true);
}else{
	$response=array('success'=>false, 'msg'=>"No se pudo modificar");
}
	if($response['insertId']=="0" && $_SESSION["id_usuario"]==""){
		$response=array('success'=>false, 'msg'=>'No se pudo agregar el registro');
	}
?>
<script src="../assets/js/jquery-1.11.1.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
		window.location.href = "../admin.php";
	});
</script>