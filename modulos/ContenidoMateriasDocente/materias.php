<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="assets/js/jquery.form-validator.min.js"></script>

<div class="panel panel-info">
  <div class="panel-heading">
    <h4>AGREGAR MATERIAS</h4>
  </div>
  <div class="panel-body">
  <form action="procesos/guardarMateria.php" method="POST">
  	<div class="form-group">
	    <label>Nombre de la materia: </label>
	    <input type="text" class="form-control" name="nombreM" placeholder="Ingrese el nombre de la materia" data-validation="required" data-validation-error-msg="Ingrese el nombre de la materia"></input>
    </div>
    <div class="form-group">
    	<label>Codigo de la materia: </label>
    	<input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo de la materia" data-validation="required" data-validation-error-msg="Ingrese un codigo para la materia"></input>
    </div>
    <div class="btn-group" role="group">
    	<button type="submit" id="registrar" class="btn btn-info">Registrar</button>
    </div>
    </form>
  </div>
</div>

<script> $.validate(); </script>
