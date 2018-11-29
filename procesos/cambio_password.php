

<?php  
@ob_start();
@session_start();
require("../class/class.managerDB.php");
require("../class/class.data.php");
	$data = new data();
	$params = $_POST;

	//obtener password
	$sql="SELECT password FROM usuario WHERE id_usuario=:id_usuario AND password=:antigua_contra";
	$param_l=array('id_usuario', 'antigua_contra');
	$value=$data->query($sql, $params, $param_l);
	
	if($value['total'] == 0){
		$response=array('success'=>false, 'error'=>'La contraseña actual no coincide, no se realizo ningun cambio');

	}else{
		if($params['nueva_contra'] == $params['confirmar_contra']){
			$sql="UPDATE usuario SET password=:nueva_contra WHERE id_usuario=:id_usuario";
			$param_list=array('nueva_contra', 'id_usuario');		
			$response=$data->query($sql, $params, $param_list);
			if($response['total']==0){
					    $response=array('success'=>false, 'titulo'=>'Verifique su información!', 'mensaje'=>'No se Realizo ningun cambio.');
	

			}else{
									    $response=array('success'=>false, 'titulo'=>'Felicidades!', 'mensaje'=>'Cambio de contraseña realizado exitosamente');
	
			}
		}else{
												    $response=array('success'=>false, 'titulo'=>'Error!', 'mensaje'=>'Las contraseñas no coinciden');
	
		}
	}		
	echo json_encode($response);

?>


