<div class="col-md-12">
		
	<h2><i class="fa fa-archive"></i> Archivos subidos</h2>
	<hr>

	<?php 
	include_once('config/config2.php');
		$sql=archivo::getAllArchivosByModulo($GLOBALS["id_modulo"]);
	 ?>
	 <table width="80%" border="1" class="table table-striped">
    <tr>
    	<td><b>No.</b></td>
	    <td><b>Nombre</b></td>
	    <td><b>Apellido</b></td>
        <td><b>Archivo</b></td>
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
    		echo "<td>".$sql[$i]['apellido']."</td>";
            echo "<td>".$sql[$i]['archivo']."</td>";
            echo "<td>".$sql[$i]['descripcion']."</td>";
    		echo "<td><a href='archivos/".$sql[$i]['file']."' target='_blank'>Ver archivo</a></td>";
    		echo "</tr>";
    	}

     ?>
	</table>

</div>