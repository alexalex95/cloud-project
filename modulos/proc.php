<?php 
@session_start();
	 include("conexion.php");//se incluye el archivo de conexion a la base de datos y al servidor
		$con=conectarse(); // esta variable guarda la conexion que devuele el archivo "conexion.php"
//desde aqui empieza la parte de editar y actualizar la foto

$query = "SELECT * from imagen2 where id_im ='".$_SESSION["id_usuario"]."'";
    $result2 = mysqli_query($con,$query);
    $fila = mysqli_fetch_row($result2);

		

if(isset($_POST["foto"]))
{
	echo "
		<script type='text/javascript'>
		 alert('Foto Actualizada correctamente'); window.location='../admin.php?mod=Perfilalumno'; </script>
		";

}else
{
	//$nom=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$tipo_archivo = $_FILES["foto"]["type"]; 

$destino="f_usuario/".$foto;

$nnombre = explode(".",$foto);
$destino2 = explode("/",$fila[1]);
//echo "$foto<br />";
//echo "$tipo_archivo<br />";
//echo "$nnombre[1] <br />";
//echo "el nuevo nombre es:  $_SESSION[id_usuario].".$nnombre[1];
//echo "<br /> $ruta";

//echo "$dfa";



$dirr = "modulos/f_usuario/".$_SESSION["id_usuario"].".".$nnombre[1];
//echo "<br >".$dirr."<br />".$_SESSION["id_usuario"];

$query = "SELECT * from imagen2 where id_im ='".$_SESSION["id_usuario"]."'";
    $result2 = mysqli_query($con,$query);
    $fila = mysqli_fetch_row($result2);



if($fila > 0){
    	//unlink('f_usuario/'.$_SESSION["id_usuario"].'.'.$nnombre[1]);
    	rename($destino2[1]."/".$destino2[2], "old_".$_SESSION["id_usuario"]);
    	$up="UPDATE imagen2 SET dir='".$dirr."' WHERE id_im='". $_SESSION["id_usuario"] . "'";
    	mysqli_query($con,$up);
    	copy($ruta,$destino);
    	rename($destino, "f_usuario/".$_SESSION["id_usuario"].".".$nnombre[1]);
    	echo "
		<script type='text/javascript'>
		 alert('foto Actualizada correctamente'); window.location='../admin.php'; </script>
		";

    }else
    {
$query="INSERT INTO imagen2(id_im,dir) VALUES('".$_SESSION["id_usuario"]."','".$dirr."')";
		mysqli_query($con,$query);
		copy($ruta,$destino);
rename($destino, "f_usuario/".$_SESSION["id_usuario"].".".$nnombre[1]);

		echo "
		<script type='text/javascript'>
		 alert('foto Actualizada correctamente'); window.location='../admin.php'; </script>
		";
		

    }


}
    




		//header('Location: ../admin.php?mod=Perfilalumno');
?>