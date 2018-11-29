<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="assets/js/jquery.form-validator.min.js"></script>

<div class="panel panel-info">
  <div class="panel-heading">
    <h4>Mis Materias</h4>
  </div>
  <div class="panel-body">

  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Mis materias</a></li>
  <li><a data-toggle="tab" href="#menu1"><i class="fa fa-cloud-upload"></i>Agregar materias</a></li>
</ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <?php include('ContenidoMateriasDocente/VerMisMaterias.php');  ?>
      </div>
      <div id="menu1" class="tab-pane fade">
        <?php include('ContenidoMateriasDocente/materias.php'); ?>
      </div>
    </div>

  </div>
</div>

<script> $.validate(); </script>