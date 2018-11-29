<div class="col-md-12">
		
	<h2><i class="fa fa-archive"></i> Materias</h2>
	<hr>

	<?php 
	include('class/modulo.class.php');
	include_once('config/config2.php');
		$sql=modulo::ViewMateriaInDocente($_SESSION['id_usuario']);

	 ?>
	 <table width="80%" border="1" class="table table-striped">
    <tr>
    	<td><b>No</b></td>
	    <td><b>Id del Modulo</b></td>
	    <td><b>Nombre del Modulo</b></td>
	    <td><b>Ver materia</b></td>
    </tr>

    <?php 
    	for($i=0;$i<count($sql);$i++)
    	{
    		$j=$i+1;
    		echo "<tr>";
    		echo "<td>".$j."</td>";
    		echo "<td>".$sql[$i]['idmodulo']."</td>";
    		echo "<td>".$sql[$i]['nombre_mod']."</td>";
    		echo "<td><a href='#' onclick=\"materia('".$sql[$i]['idmodulo']."','".$sql[$i]['nombre_mod']."')\" >Ir a la Materia</a></td>";
    		echo "</tr>";
    	}

     ?>
	</table>

</div>

<script>
    
    function materia(id_materia,nombreMat)
    {
        //alert(id_materia);
        location.href='admin.php?mod=irMateria&id='+id_materia+'&nombre='+nombreMat;
    }

</script>