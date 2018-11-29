<?php
    require_once("../config/config2.php");
    require_once('../class/usuario.class.php');
    //$obj = new usuario();
    $usuario=$_REQUEST["dato"];
    $id_usuario=$usuario;
    $result=usuario::tabla_usuarios($usuario,$id_usuario);
    for ($i=0; $i < count($result); $i++) { 
        echo "<tr>";
        $a=$i+1;
        echo "<td style='text-align:center;'>".$a."</td>";
        echo "<td style='text-align:center;'>".$result[$i]['Nombre']."</td>";
        echo "<td style='text-align:center;'>".$result[$i]['apellido']."</td>";
        echo "<td style='text-align:center;'>".$result[$i]['nombre_mod']."</td>";
        echo "<td style='text-align:center;'>".$result[$i]['descripcion']."</td>";
        echo "<td style='text-align:center;'>".$result[$i]['Archivo']."</td>";
        echo "<td style='text-align:center;'>
        <a href='#mostrar_informacion' class='btn-warning btn' onclick = 'Mostrar_Datos()' role='button' data-toggle='modal' data-target='#myImprenta' title='Mostrar informacion'><span class='glyphicon glyphicon-info-sign'></span></a>
        </td>";
        echo "</tr>";
    }
?>

<script type="text/javascript">
    function Mostrar_Datos(){
    $("#opcionesSede3").val(id_sede);
    $('#opcionEdificios3').val(id_edificio);
    cargaredificioMod(id_sede,id_edificio);
    $('#nombreAula3').val(Aula);
    $('#capacidad_Aula3').val(capacidad);
    $('#IDAula').val(id_aula);
    $('#mostrar_informacion').attr('class', 'active');
    $('#busqueda_alumno').attr('class', '');
    //sh();
    $('#mostrar_Informacion').show();
    $('#busqueda').hide();
}
</script>
