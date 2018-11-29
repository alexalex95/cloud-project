<?php 
$GLOBALS["id_modulo"]=$_REQUEST["id"];
 ?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="assets/js/jquery.form-validator.min.js"></script>

<div class="panel panel-info">
  <div class="panel-heading">
    <h2><?php echo $_REQUEST["nombre"]; ?></h2>
  </div>
  <div class="panel-body">

  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-user"></i> Solicitudes de personas</a></li>
  <li><a data-toggle="tab" href="#menu1"><i class="fa fa-cloud-upload"></i>Solicitudes de archivos</a></li>
  <li><a data-toggle="tab" href="#menu2"><i class="fa fa-cloud-upload"></i>Archivos</a></li>
</ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <?php include('dentroDeMateria/solicitudes.php');  ?>
      </div>
      <div id="menu1" class="tab-pane fade">
        <?php include('dentroDeMateria/soli_archivos.php'); ?>
      </div>
      <div id="menu2" class="tab-pane fade">
        <?php include('dentroDeMateria/archivos.php'); ?>
      </div>
    </div>

  </div>
</div>

<script> $.validate(); </script>
