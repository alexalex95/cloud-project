
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cambio de Estado</h4>
            </div>
            <form method="POST" action="#" name="frmEstado" id="frmEstado" onsubmit="return false">
                <div class="modal-body">
                    <input type="hidden" id="txtidusuario" name="txtidusuario" value="">
                    <div class="form-group">
                        <label>Nombre de usuario:</label>
                        <input class="form-control" name="txtnombre" id="txtnombre" value="">
                    </div>
                    <div class="form-group">
                        <label>Estado:</label>
                        <select name="txtestatus" id="txtestatus" class="form-control">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary pull-right" name="guardarestado" id="guardarestado">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script type="text/javascript">
// Funcion que nos permitira mandar los datos a ingresar
$(document).ready(function () {
   $('#guardarestado').click(function() {
         
                    var datos = $('#frmEstado').serialize();
                    $.ajax({
                        type: "POST",
                        url: "procesos/cambiar_estado.php",
                        data: datos,
                        dataType: "json",
                        success: function(data) {
                            if (data.success) {
                                //recargar la tabla
                                alert("Datos guardados correctamente", function() {
                                    location.reload();
                                });
                                store_persona();
                            } else {
                                alert(data.mensaje);

                            }
                        }

                    });

        });

        $('#cancelar').click(function() {
            document.getElementById('formUsuario').reset();
            document.getElementById('txtnombre').value = "";
        });
});
        </script> 
