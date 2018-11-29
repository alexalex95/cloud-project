<section>
  <div id="Perfil_Alumno">
    <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Perfil Alumno</h3>
        </div>
        <div class="panel-body">
          <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <center><h3 class="panel-title">Datos del Alumno</h3></center>
              </div>
              <div class="panel-body">
                <div>
                   <div class="thumbnail">
                      <img src="img/CloudUDB.png" alt="imagen">
                      <div class="caption">
                        <form>
                          <h3>Perfil Alumno</h3>
                          <div class="col-xs-12 form-group">
                            <label for="NomAlumno">Nombre del Alumno:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                              <input type="text" id="Location" class="form-control" name="NomAlumno" placeholder="Nombre del Usuario" data-validation="required" data-validation-error-msg="* Completar Campo">
                            </div>
                          </div>
                          <div class="col-xs-12 form-group">
                            <label for="ApellidoAlumno">Apellido del Alumno:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                              <input type="text" id="ApellidoAlumno" class="form-control" name="ApellidoAlumno" placeholder="Apellidos del Alumno" data-validation="required" data-validation-error-msg="* Completar Campo">
                            </div>
                          </div>
                          <div class="col-xs-12 form-group">
                            <label for="EmailAlumno">Correo del Alumno:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                              <input type="email" id="EmailAlumno" class="form-control" name="EmailAlumno" placeholder="Email del Alumno" data-validation="required" data-validation-error-msg="* Completar Campo">
                            </div>
                          </div>
                          <br>
                          <p>
                          <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span></a> 
                          </p>
                        </form>  
                      </div>
                   </div>
                 </div>
              </div>
          </div>
          </div>
          <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Informacion</h3>
                </div>
                <div class="panel-body">
                   <div class="col-md-12">
                    <!-- Custom Tabs (Pulled to the right) -->
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#tab_1-1" data-toggle="tab">Galeria de Fotos</a></li>
                        <li><a href="#tab_2-2" data-toggle="tab">Archivos de Proyectos</a></li>
                        <li><a href="#tab_3-2" data-toggle="tab">Modulos Inscritos</a></li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Datos <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Subir Fotos</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Subir Archivos de Proyectos</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Buscar Modulos </a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                          </ul>
                        </li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Fotos, Archivos, Modulos</li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_1-1">
                          <b>How to use:</b>
                          <p>Exactly like the original bootstrap tabs except you should use
                            the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                          A wonderful serenity has taken possession of my entire soul,
                          like these sweet mornings of spring which I enjoy with my whole heart.
                          I am alone, and feel the charm of existence in this spot,
                          which was created for the bliss of souls like mine. I am so happy,
                          my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                          that I neglect my talents. I should be incapable of drawing a single stroke
                          at the present moment; and yet I feel that I never was a greater artist than now.
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2-2">
                          The European languages are members of the same family. Their separate existence is a myth.
                          For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                          in their grammar, their pronunciation and their most common words. Everyone realizes why a
                          new common language would be desirable: one could refuse to pay expensive translators. To
                          achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                          words. If several languages coalesce, the grammar of the resulting language is more simple
                          and regular than that of the individual languages.
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3-2">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          It has survived not only five centuries, but also the leap into electronic typesetting,
                          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                          like Aldus PageMaker including versions of Lorem Ipsum.
                        </div><!-- /.tab-pane -->
                      </div><!-- /.tab-content -->
                    </div><!-- nav-tabs-custom -->
                  </div><!-- /.col -->              
                </div>
            </div> 
        </div>
    </div>
  </div>
  <div id="Perfil_Docente">
    <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Perfil Docente</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
    </div>
  </div>
</section>
<style type="text/css">
  /* custom inclusion of right, left and below tabs */

.tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}

.tabs-below > .nav-tabs {
  border-top: 1px solid #ddd;
}

.tabs-below > .nav-tabs > li {
  margin-top: -1px;
  margin-bottom: 0;
}

.tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}

.tabs-below > .nav-tabs > li > a:hover,
.tabs-below > .nav-tabs > li > a:focus {
  border-top-color: #ddd;
  border-bottom-color: transparent;
}

.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover,
.tabs-below > .nav-tabs > .active > a:focus {
  border-color: transparent #ddd #ddd #ddd;
}

.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}

.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}

.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
     -moz-border-radius: 4px 0 0 4px;
          border-radius: 4px 0 0 4px;
}

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
}

.tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
  border-left: 1px solid #ddd;
}

.tabs-right > .nav-tabs > li > a {
  margin-left: -1px;
  -webkit-border-radius: 0 4px 4px 0;
     -moz-border-radius: 0 4px 4px 0;
          border-radius: 0 4px 4px 0;
}

.tabs-right > .nav-tabs > li > a:hover,
.tabs-right > .nav-tabs > li > a:focus {
  border-color: #eeeeee #eeeeee #eeeeee #dddddd;
}

.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover,
.tabs-right > .nav-tabs .active > a:focus {
  border-color: #ddd #ddd #ddd transparent;
  *border-left-color: #ffffff;
}
 
</style>