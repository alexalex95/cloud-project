
<!--Funcion de busqueda de modulos-->
<script type="text/javascript">
$(document).ready(function(){
    $("#buscarmodulo").keypress(function(e){
        key = e.which;
        if(key==13)
        {
            var searchBarVal=$("#buscarmodulo").val();
            if(searchBarVal==""){
                alert("Ingrese su busqueda");
                return false;
            }
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "procesos/busquedamodulo.php",
                data: {dato:searchBarVal},
                beforesend : function(){$(".loader").css('visibility', 'visible');}
            }).done(function(data){
                $(window).load(function() {
                    $(".loader").fadeOut("slow");

                });
                $("#TablaModulo").DataTable().clear();
                $("#TablaModulo").DataTable().destroy();
                $("#pagin_body").append(data);
                $("#TablaModulo").DataTable({
                    'sPaginationType' : 'full_numbers'
                });
            });
            return false;
        }

    });
});
</script>


<section>
  <div class="panel panel-primary">
      <div class="panel-heading">Modulos</div>
      <div class="panel-body">
        <div class="row">
            <div class="">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#moduloinscrito" data-toggle="tab"><i class="fa fa-cubes"></i> Modulos Inscritos</a></li>
                  <li><a href="#busquedamodulo" data-toggle="tab"> <i class="fa fa-search"></i> Busqueda de Modulo</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="busquedamodulo">
                    <div class="loader"></div>
                        <!--<h1>Buscar Abogados</h1>-->
                        <br />
                        <div class="panel panel-primary">
                            <div class="panel-heading">Buscar modulo </div>
                            <div class="panel-body">
                                <label>Ingrese su busqueda:</label>
                                <form role="search" id="Form1" onsubmit="return false;">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="buscarmodulo" placeholder="Busqueda por nombre o codigo de la materia">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                            <br><br>
                                        <div class="col-md-12">
                                               <table id="example" class="display" width="100%"></table>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        <table id="TablaModulo" class="datatable table table-condensed " cellspacing="0" width="100%">
                            <thead style="background: #337ab7; color: #fff;">
                                <tr>
                                    <th style='text-align:center;'>No</th>
                                    <th style='text-align:center;'>Nombre Docente</th>
                                    <th style='text-align:center;'>Apellidos Docentes</th>
                                    <th style='text-align:center;'>Nombre del Modulo</th>
                                    <th style='text-align:center;'>Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="pagin_body">

                            </tbody>
                        </table>


                        <style type="text/css">
                            .loader {
                            position: fixed;
                            left: 0px;
                            top: 0px;
                            width: 100%;
                            height: 100%;
                            z-index: 9999;
                            visibility: hidden;
                        }
                        </style>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane active" id="moduloinscrito">

                    <?php include('ContenidoInscribirMaterias/verMateriasInscritas.php'); ?>
                      
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->
      </div>
    </div>
</section>
