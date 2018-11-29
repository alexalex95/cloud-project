<?php 
$_SESSION['idmod']=$_REQUEST['id'];
$_SESSION['nombremod']=$_REQUEST['nombre'];
 ?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="assets/js/jquery.form-validator.min.js"></script>

<div class="panel panel-info">
  <div class="panel-heading">
    <h2><?php echo $_SESSION['nombremod']; ?></h2>
  </div>
  <div class="panel-body">

  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Inicio</a></li>
  <li><a data-toggle="tab" href="#menu1"><i class="fa fa-cloud-upload"></i> Subir archivos</a></li>
</ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <?php include('ContenidoMaterias/inicio.php');  ?>
      </div>
      <div id="menu1" class="tab-pane fade">
        <?php include('ContenidoMaterias/subirArchivo.php'); ?>
      </div>
    </div>

  </div>
</div>

<script> $.validate(); </script>
