<?php

    //$modulos=new Modulos();
    require_once('../class/class.modulos.php');
    $nombreMateria=$_REQUEST["dato"];
    $idModulo=$nombreMateria;
    $result=Modulo::ViewModulos($nombreMateria,$idModulo);
    for ($i=0; $i < count($result); $i++)
    {
        echo "<tr>";
        $a=$i+1;
        echo "<td style='text-align:center;'>".$a."</td>";
        echo "<td style='text-align:center;'>".$result[$i]['nombre']."</td>";
        echo "<td style='text-align:center;'>".$result[$i]['apellido']."</td>";
        echo "<td style='text-align:center;'>".$result[$i]['nombre_mod']."</td>";
        echo "<td style='text-align:center;'>";

        echo"<a href='#' onsubmit='return false' onclick=\"inscribir('".$result[$i]['idmodulo']."')\"  class=' btn-primary btn' title='Enviar solicitud' role='button' data-toggle='tab'><span class='glyphicon glyphicon-saved'></span>Solicitar modulo</a>";
        echo "</td>";
        echo "</tr>";
    }
?>
<script>
    
    function inscribir(id_modulo)
    {
        $.ajax({
            type: 'POST',
            dataType: ' JSON',
            url: 'procesos/inscribirModulo.php',
            data: {id_modulo},
            success: function(){
                alert("Solicitud enviada con exito");
                location.href='admin.php?mod=Modexistentes';
            },
            error:function(){
                alert("No se pudo enviar la solicitud");
            }
        });
    }
</script>