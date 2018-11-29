<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <!-- <h1>
            Blank page
            <small>it all starts here</small>
          </h1>-->
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">perfil</a></li>
    <li class="active">información personal</li>
  </ol>
  </section>
  </br>
  <div class="col-md-8">
    <!-- Main content -->
    <section class="content">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="modulos/d.jpg" alt="User profile picture">
        <h3 class="profile-username text-center">nombre usuario</h3>
        <p class="text-muted text-center">
          Alumno
        </p>
        <div class="form-group">
          <!-- <label for="exampleInputFile">seleccionar nueva foto</label>-->
          <input type="file" id="exampleInputFile">
          <p class="help-block">
            Actualizar foto
          </p>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Subir Archivo</button>
        </div>
        <!--
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="pull-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                      <b>Following</b> <a class="pull-right">543</a>
                    </li>
                    <li class="list-group-item">
                      <b>Friends</b> <a class="pull-right">13,287</a>
                    </li>
                  </ul>
                -->
        <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <!-- Default box -->
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Información personal</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">nombre:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="nombra guardado en BD">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="apellidos guardados en BD">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Correo Electronico</label>
            <input type="email" class="form-control" id="e2" placeholder="correo guardado en BD">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fecha de Nacimiento</label>
            <input type="email" class="form-control" id="e2" placeholder="correo guardado en BD">
          </div>
          <!-- Date dd/mm/yyyy -->
          <div class="form-group">
            <label>Date masks:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" placeholder="dd/mm/yyyy" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
    <!-- /.box -->
    <!---   ******************************************************    -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Login</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">nombre Usuario:</label>
            <input type="text" class="form-control" id="e2" placeholder="usuario guardado en BD">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="e4" placeholder="password en BD">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirmar Contraseña</label>
            <input type="email" class="form-control" id="e5" placeholder="confirmar contraseña">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
    <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- /.content-wrapper -->