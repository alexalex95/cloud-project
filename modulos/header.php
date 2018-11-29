
<!-- Función para validar las contraseñas-->
                <script type="text/javascript">
    $(document).ready(function () {
        $.validate({
            modules : 'security',
            onModulesLoaded : function() {
                var optionalConfig = {
                    fontSize: '9pt',
                    padding: '4px',
                    bad : 'Débil',
                    weak : 'Media',
                    good : 'Buena',
                    strong : 'Fuerte'
                };
                $('#nueva_contra').displayPasswordStrength(optionalConfig);
            }
        });
    });
            $(document).ready(function () {
        $("#guardar").click(function () {
            
            if ($('#nueva_contra').val() == $('#confirmar_contra').val()) {
                                //Guardar en variables el valor que tengan las cajas de texto Por medio de los id's Y tener mejor manipulación de dichos valores
                                var formulario = $("#frmPass").serializeArray();
                                $.ajax({
                                    type: "POST",
                                    dataType: 'json',
                                    data: formulario,
                                    url: "procesos/cambio_password.php",
                                }).done(function (response) {
                               if (response.success != false) {
                                        alert(response.mensaje, function() { });
                                        
                                        
                                    } else {
                                        alert(response.mensaje, function() { });
                                    }
                                    
                                });

            }
        });//click
    });//ready
      </script>

      <header class="main-header" >
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="img/logo_Cloududb.png" alt="Inicio" class="img-circle" width="40" height="30"/></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">CloudUDB</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                          <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="img/user_icon.png" style="background: #ffffff;"  class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo($_SESSION["nombre"]); ?></span>
                </a>
                <ul class="dropdown-menu" style="width:300px;">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="img/user_icon.png" style="background: #ffffff;" class="img-circle" alt="User Image">
                    <p>
                    <?php echo($_SESSION["nombre"]); ?>
                      <small><?php //echo($_SESSION["seccion"]); ?></small>
                    </p>
                  </li>
                  
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#modal_pass">Cambiar Contrase&ntilde;a</a>
                    </div>
                    <div class="pull-right">
                      <a href="?mod=logout" class="btn-sm btn  btn-danger">Cerrar sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
       
      <!-- MODAL CAMBIAR PASSWORD -->
      <div class="modal fade" id="modal_pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Cambiar Contrase&ntilde;a</h4> 
                  </div>
                  <form role="form" id="frmPass" onsubmit="return false">
                      <div class="modal-body">
                          <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo($_SESSION['id_usuario']); ?>">
                          <div class="form-group"> 
                              <label>Nombre:</label>    
                              <input class="form-control" name="nombre_completo" id="nombreMod" disabled="disable" value="<?php echo($_SESSION["nombre"]); ?>">
                          </div>
                          <div class="form-group"> 
                              <label>Contrase&ntilde;a actual:</label>    
                              <input type="password" class="form-control" name="antigua_contra" id="antigua_contra" placeholder="*******" data-validation="required" data-validation-error-msg="Este campo es obligatorio">
                          </div>
                          <div class="form-group"> 
                              <label>Nueva contrase&ntilde;a:</label>    
                              <input type="password" class="form-control" name="nueva_contra" id="nueva_contra" placeholder="*******" data-validation="length" data-validation-length="min6" data-validation-error-msg="La cantidad mínima de caracteres son 6">
                          </div>  
                          <div class="form-group"> 
                              <label>Confirmar Nueva contrase&ntilde;a:</label>    
                              <input type="password" class="form-control" name="confirmar_contra" id="confirmar_contra" placeholder="*******" data-validation="confirmation" data-validation-confirm="nueva_contra" data-validation-error-msg="Las contraseñas no coinciden">
                          </div>                          
                      </div> 
                      <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                          <button type="submit" id="guardar" name="guardar" class="btn btn-primary" >Guardar</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <!--FIN MODAL-->