<div class="col-md-12">
		
	<h2><i class="fa fa-archive"></i> Solicitudes de archivos</h2>
	<hr>

	<?php 
        require('class/archivo.class.php');
		$sql=archivo::soliArchivos($GLOBALS["id_modulo"]);

	 ?>
	 <table width="80%" border="1" class="table table-striped">
    <tr>
    	<td><center><b>N°</b></center></td>
	    <td><center><b>NOMBRE</b></center></td>
	    <td><center><b>APELLIDO</b></center></td>
        <td><center><b>ARCHIVO</b></center></td>
        <td><center><b>TIPO</b></center></td>
        <td><center><b>DESCRIPCION</b></center></td>
        <td><center><b>VER ARCHIVO</b></center></td>
	    <td><center><b>OPCION</b></center></td>
    </tr>
    <?php 

        for($i=0;$i<count($sql);$i++)
        {
            $j=$i+1;
            echo "<tr>";
            echo "<td width='5%'><center>".$j."</center></td>";
            echo "<td><center>".$sql[$i]['nombre']."</center></td>";
            echo "<td><center>".$sql[$i]['apellido']."</center></td>";
            echo "<td><center>".$sql[$i]['archivo']."</center></td>";
            echo "<td><center>".$sql[$i]['tipo']."</center></td>";
            echo "<td><center>".$sql[$i]['descripcion']."</center></td>";
            echo "<td><a href='archivos/".$sql[$i]['file']."' target='_blank'>Ver archivo</a></td>";
            echo "<td width='20%'><center><a href='#' class='btn btn-primary' onclick='aprobarArchivo(".$sql[$i]['id_archivo'].")'>Aprobar</a> <a href='#' class='btn btn-danger' onclick='rechazarArchivo(".$sql[$i]['id_archivo'].")'>Rechazar</a></center></td>";
            echo "</tr>";
        }

     ?>
	</table>

</div>

<script type="text/javascript">
    
function aprobarArchivo(aprobacion)
{
    $.ajax({
        type:'post',
        datatype:'JSON',
        data:{'aprobacion':aprobacion},
        url:'procesos/aprobar_archivo.php',
        success:function(){
            alert("Archivo aprobado");
            location.reload();
        },
        error:function(){
            alert("No se pudo realizar la solicitud");
            location.reload();
        }
    });
}

function rechazarArchivo(rechazo)
{
    $.ajax({
        type:'post',
        datatype:'JSON',
        data:{'rechazo':rechazo},
        url:'procesos/rechazar_archivo.php',
        success:function(){
            alert("Archivo rechazado");
            location.reload();
        },
        error:function(){
            alert("No se pudo realizar la solicitud");
            location.reload();
        }
    });
}

</script>