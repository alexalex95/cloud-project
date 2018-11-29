<div class="col-md-12">
		
	<h2><i class="fa fa-archive"></i> Solicitudes de personas</h2>
	<hr>

	<?php 
	include('class/intermedia.class.php');
	include_once('config/config2.php');
		$sql=intermedia::getSolicitudbyId($GLOBALS["id_modulo"]);

	 ?>
	 <table width="80%" border="1" class="table table-striped">
    <tr>
    	<td><center><b>N°</b></center></td>
	    <td><center><b>NOMBRES</b></center></td>
	    <td><center><b>APELLIDOS</b></center></td>
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
            echo "<td width='20%'><center><a href='#' class='btn btn-primary' onclick='aprobado1(".$sql[$i]['id_intermedia'].")'>Aprobar</a> <a href='#' class='btn btn-danger' onclick='rechazado1(".$sql[$i]['id_intermedia'].")'>Rechazar</a></center></td>";
            echo "</tr>";
        }

     ?>
	</table>

</div>

<script type="text/javascript">
    
function aprobado1(aprobacion)
{
    $.ajax({
        type:'post',
        datatype:'JSON',
        data:{'aprobacion':aprobacion},
        url:'procesos/aprobar_soli.php',
        success:function(){
            alert("Usuario aprobado");
            location.reload();
        },
        error:function(){
            alert("No se pudo realizar la solicitud");
            location.reload();
        }
    });
}

function rechazado1(rechazo)
{
    $.ajax({
        type:'post',
        datatype:'JSON',
        data:{'rechazo':rechazo},
        url:'procesos/rechazar_soli.php',
        success:function(){
            alert("Usuario rechazado");
            location.reload();
        },
        error:function(){
            alert("No se pudo realizar la solicitud");
            location.reload();
        }
    });
}

</script>