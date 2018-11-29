<div class="col-md-12">
		
	<h2><i class="fa fa-archive"></i> Materias</h2>
	<hr>

	<?php 
	include('class/intermedia.class.php');
	include_once('config/config2.php');
		$sql=intermedia::mostrar($_SESSION['id_usuario']);

	 ?>
	 <table width="80%" border="1" class="table table-striped">
    <tr>
    	<td><b>No</b></td>
	    <td><b>Id del Modulo</b></td>
	    <td><b>Nombre del Modulo</b></td>
        <td><b>Docente</b></td>
	    <td><b>Ver materia</b></td>
    </tr>

    <?php 
    	for($i=0;$i<count($sql);$i++)
    	{
    		$j=$i+1;
    		echo "<tr>";
    		echo "<td>".$j."</td>";
    		echo "<td>".$sql[$i]['id_modulo']."</td>";
    		echo "<td>".$sql[$i]['nombre_mod']."</td>";
            echo "<td>".$sql[$i]['nombre']." ".$sql[$i]['apellido']."</td>";
    		echo "<td><a href='#' onclick=\"irMateria('".$sql[$i]['id_modulo']."','".$sql[$i]['nombre_mod']."')\">Ir a la Materia</a></td>";
    		echo "</tr>";
    	}

     ?>
	</table>

</div>

<script type="text/javascript">
    
function irMateria(idMateria, nombreMateria)
{
    location.href='admin.php?mod=PruebaModuloMaterias&id='+idMateria+'&nombre='+nombreMateria;
}

</script>