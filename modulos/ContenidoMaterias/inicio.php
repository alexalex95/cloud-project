<div class="col-md-12">
		
	<h2><i class="fa fa-archive"></i> Archivos subidos</h2>
	<hr>

	<?php 
	include('class/archivo.class.php');
	include_once('config/config2.php');
		$sql=archivo::getAllArchivos($_SESSION['id_usuario'],$_SESSION['idmod']);
	 ?>
	 <table width="80%" border="1" class="table table-striped">
    <tr>
    	<td><b>N°</b></td>
	    <td><b>Nombre del archivo</b></td>
	    <td><b>Descripcion</b></td>
	    <td><b>Ver archivo</b></td>
    </tr>

    <?php 

    	for($i=0;$i<count($sql);$i++)
    	{
    		$j=$i+1;
    		echo "<tr>";
    		echo "<td>".$j."</td>";
    		echo "<td>".$sql[$i]['nombre']."</td>";
    		echo "<td>".$sql[$i]['descripcion']."</td>";
    		echo "<td><a href='archivos/".$sql[$i]['archivo']."' target='_blank'>Ver archivo</a></td>";
    		echo "</tr>";
    	}

     ?>
	</table>

</div>